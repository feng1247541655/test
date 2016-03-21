<?php

namespace backend\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\rbac\Item;
use yii\rbac\Role;
use yii\db\Query;
use yii\rbac\Permission;
use backend\models\AuthItem;
use backend\models\User;
use common\base\YiiForum;



/**
 * AuthItemController implements the CRUD actions for AuthItem model.
 */
class RoleController extends AuthController
{

    public function actionUserIndex()
    {
        //查询所有的用户
        $searchUrlArr = [];
        $searchArr = $this->_getSearchCondition($searchUrlArr);
        $queryModel = new Query;
        $query = $queryModel->from(User::tableName());
        $config = [
                'pageSize' => Yii::$app->params['pageSize'],
                'where'=>$searchArr,
                'urlWhere'=>$searchUrlArr,
            ];
        $locals = YiiForum::getPagedRows($query,$config);
        return $this->render('user_index', $locals);
    }

    public function actionSetUser($id)
    {
        $auth = \Yii::$app->authManager;
        $existItems = $auth->getAssignments($id);
        $allRoles = $auth->getRoles();
        $model = [];
        //var_dump($allRoles);
        //exit;
        if (YiiForum::hasPostValue('submit'))
        {
            $selectedRoles = YiiForum::getPostValue('selectedRoles');
            $this->updateAssignments($allRoles, $selectedRoles, $existItems, $id);
            
            return $this->redirect([
                    'user-index' 
            ]);

        }else{
            
            $locals = [];
            $locals['model'] = $model;
            $locals['allRoles'] = $this->getFormatAllRoles();
            $locals['existRoles'] = $existItems;
			//角色组
			$rolesGroup = YiiForum::getAppParam('cachedRolesGroup');
			//var_dump($rolesGroup);
			//exit;
			$rolesArr = [];
			foreach($rolesGroup as $group){
				$rolesArr[$group['name']] = $group['description'];
			}
			$rolesArr['other'] = '其他';
			$locals['rolesGroup'] = $rolesArr;            
            return $this->render('set_role', $locals);
        }
    }

	/**
	 * Lists all AuthItem models.
	 *
	 * @return mixed
	 */
	public function actionIndex()
	{
		$query = AuthItem::find();
        $config = [
                'pageSize' => Yii::$app->params['pageSize'],
                'where'=>['type' => 1],
            ];
        $locals = YiiForum::getPagedRows($query,$config);
        return $this->render('/role/index', $locals);
	}

	/**
	 * Creates a new AuthItem model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 *
	 * @return mixed
	 */
	public function actionCreate()
	{
		$model = new AuthItem();
		if ($model->load(Yii::$app->request->post()))
		{
			$item = $this->model2Item($model, new Role());
			$this->auth->add($item);

			$groupName = YiiForum::getPostValue('AuthItem')['group'];
			$group = new Role();
			if($groupName){
				$group->name = $groupName;
				$this->auth->addChild($group, $item);				
			}else{
				//判断角色根是否存在
				$rootRole = $this->auth->getRole('root_role');
				if(!$rootRole){
					$model2 = new AuthItem;
					$model2->name = 'root_role';
					$model2->description = '角色根';
					$model2->rule_name = '';
					$model2->data = '';
					$item2 = $this->model2Item($model2, new Role());
					$this->auth->add($item2);
				}
				$group->name = 'root_role';
				$this->auth->addChild($group, $item);
				AuthItem::createCachedRolesGroup();				
			}
			
			return $this->redirect([
					'index',
			]);
		}
		else
		{
			$locals = [];
			$locals['groups'] = YiiForum::getAppParam('cachedRolesGroup');
			$locals['model'] = $model;
			
			return $this->render('create', $locals);
		}
	}

	public function actionRefresh()
	{
		AuthItem::createCachedRoles();
		
		return $this->redirect([
				'index',
		]);
	}

	/**
	 * Updates an existing AuthItem model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 *
	 * @param string $id        	
	 * @return mixed
	 */
	public function actionUpdate($id)
	{
		
		$model = $this->findModel($id);
		
		if ($model->load(Yii::$app->request->post()))
		{
			$item = $this->model2Item($model, new Role());
			$this->auth->update($id, $item);
			
			return $this->redirect([
					'index',
			]);
		}
		else
		{			
			$locals = [];
			$locals['groups'] = YiiForum::getAppParam('cachedRolesGroup');
			$parent = AuthItem::getAuthItemParent($id);
			if($parent)
				$model->group = $parent;
			$locals['model'] = $model;
			
			return $this->render('update', $locals);
		}
	}

    public function updateAssignments($allItems, $selectedItems, $existedItems, $id)
    {
        $auth = \Yii::$app->authManager;
        
        if ($selectedItems == null)
        {
            $selectedItems = [];
        }
        
        $role = new Role();
        foreach ( $allItems as $item )
        {
            $itemName = $item->name;
            
            $role->name = $itemName;
            
            // the selected role
            if (in_array($itemName, $selectedItems))
            {
                // check if exists in db
                if (isset($existedItems[$itemName]))
                {
                    YiiForum::info('exist:' . $itemName);
                    continue;
                }
                else
                {
                    // add new role
                    YiiForum::info('add:' . $itemName);
                    $auth->assign($role, $id);
                }
            }
            else // unselected role
            {
                // check if exists in db
                if (isset($existedItems[$itemName]))
                {
                    // need to be deleted
                    YiiForum::info('delete:' . $itemName);
                    $auth->revoke($role, $id);
                }
            }
        }
    }

	private function updatePermissions($allItems, $selectedItems, $existedItems, $parent, $child)
	{
		if ($selectedItems == null)
		{
			$selectedItems = [];
		}
		
		foreach ( $allItems as $item )
		{
			$itemName = $item->name;
			
			$child->name = $itemName;
			
			// check if the $itenName is selected
			if (in_array($itemName, $selectedItems))
			{
				// check if exists in db
				if (array_key_exists($itemName, $existedItems))
				{
					YiiForum::info('exist:' . $itemName);
					continue;
				}
				else
				{
					// add new permission
					YiiForum::info('add:' . $itemName);
					$this->auth->addChild($parent, $child);
				}
			}
			else // unselected permission
			{
				// check if exists in db
				if (array_key_exists($itemName, $existedItems))
				{
					// need to be deleted
					YiiForum::info('delete:' . $itemName);
					$this->auth->removeChild($parent, $child);
				}
			}
		}
	}

	public function actionPermission($id)
	{

		$model = $this->findModel($id);
		
		$existPermissions = $this->auth->getPermissionsByRole($id);
		if (YiiForum::hasPostValue('submit'))
		{
			$parent = new Role();
			$parent->name = $id;
			$allPermissions = $this->auth->getPermissions();
			$selectedPermissions = YiiForum::getPostValue('selectedPermissions');
			$this->updatePermissions($allPermissions, $selectedPermissions, $existPermissions, $parent, new Permission());
			
			return $this->redirect([
					'index',
			]);
		}else{			
			$locals = [];
			$locals['model'] = $model;
			$locals['allPermissions'] = $this->getFormatAllPermissions();
			$locals['existPermissions'] = $existPermissions;
			//权限组
			$permissionsGroup = YiiForum::getAppParam('cachedPermissionsGroup');
			//var_dump($rolesGroup);
			//exit;
			$permissionsArr = [];
			foreach($permissionsGroup as $group){
				$permissionsArr[$group['name']] = $group['description'];
			}
			$permissionsArr['other'] = '其他';
			$locals['permissionsGroup'] = $permissionsArr;
			return $this->render('permission', $locals);
		}
	}

	/**
	 * Displays a single AuthItem model.
	 *
	 * @param string $id        	
	 * @return mixed
	 */
	public function actionView($id)
	{
		return $this->render('view', [
				'model' => $this->findModel($id) 
		]);
	}

	/**
	 * Deletes an existing AuthItem model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 *
	 * @param string $id        	
	 * @return mixed
	 */
	public function actionDelete($id)
	{	
		$item = new Role();
		$item->name = $id;
		$this->auth->remove($item);
		
		return $this->redirect([
				'index',
		]);
	}

    /**
     * 封装用户列表搜索条件
     */
    private function _getSearchCondition(&$searchUrlArr)
    {
        $arr = ['and',];     
        $username = Yii::$app->request->post('username') ? Yii::$app->request->post('username') : Yii::$app->request->get('username');
        if($username){
            $arr[] = "username='".$username."'";
            $searchUrlArr['username'] = $username;
        }
            
        $nickname = Yii::$app->request->post('nickname') ? Yii::$app->request->post('nickname') : Yii::$app->request->get('nickname');
        if($nickname){
            $arr[] = ['like','nickname',$nickname];
            $searchUrlArr['nickname'] = $nickname;
        }
            
        $email = Yii::$app->request->post('email') ? Yii::$app->request->post('email') : Yii::$app->request->get('email');
        if($email){
            $arr[] = ['like','email',$email];
            $searchUrlArr['email'] = $email;
        }
            

        return count($arr) > 1 ? $arr : [];
    }

	/**
	 * Finds the AuthItem model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 *
	 * @param string $id        	
	 * @return AuthItem the loaded model
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	protected function findModel($id)
	{
		if (($model = AuthItem::findOne($id)) !== null)
		{
			return $model;
		}
		else
		{
			throw new NotFoundHttpException('The requested page does not exist.');
		}
	}
}
