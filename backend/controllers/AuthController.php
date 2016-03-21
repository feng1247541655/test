<?php

namespace backend\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use yii\rbac\Item;
use yii\rbac\Role;
use yii\rbac\Permission;
use common\base\AuthManager;
use backend\models\AuthItem;
use common\base\YiiForum;
use backend\controllers\BaseController;

/**
 * AuthItemController implements the CRUD actions for AuthItem model.
 */
class AuthController extends BaseController
{
	protected $auth = null;
	
	public function init()
	{
		parent::init();
		$this->auth=\Yii::$app->authManager;
	}

   public function beforeAction($action){
        parent::beforeAction($action);

        if(!in_array(Yii::$app->user->identity->username,['ming.lin','wuying.hai'])){
            $AuthManagerModel = new AuthManager();
            $userid = Yii::$app->user->identity->id;
            $route = strtolower(Yii::$app->controller->route);
            $routeArr = explode('/',$route);
            $controller = !empty($routeArr[0]) ? $routeArr[0] : 'welcome';
            $ac = !empty($routeArr[1]) ? $routeArr[1] : 'index';
            $permission = strtolower($controller.'_'.$ac);
            if(!$AuthManagerModel->checkAccess($userid,$permission)){
                $this->redirect(['site/sys-error']);
            }        
        }

        
        return true;
   }
    
    
    public function model2Item($model,$item)
    {
    	$item->name=$model->name;
    	//$item->type=
    	$item->description=$model->description;
    	$item->ruleName=$model->ruleName==''? null: $model->ruleName;
    	$item->data=$model->data;
    	$item->createdAt=$model->created_at;
    	$item->updatedAt=$model->updated_at;
    	return $item;
    }
    
    public function item2Model($item)
    {
    	$model = new AuthItem();
    	$model->name=$item->name;
    	$model->type=$item->type;
    	$model->description=$item->description;
    	$model->rule_name=$item->rule_name;
    	$model->data=$item->data;
    	$model->created_at=$item->createAt;
    	$model->updated_at=$item->updateAt;
    	return $model;
    	 
    }

    /**
     * 查询所有的权限，并个格式化
     */
    public function getFormatAllPermissions()
    {
        $allPermissions = $this->auth->getPermissions();
        $allGroup = YiiForum::getAppParam('cachedPermissionsGroup');
        $resArr = [];
        $excluedArr = [];
        foreach($allGroup as $group){
            $allChild = $this->auth->getChildren($group['name']);
            $childArr = [];
            foreach($allChild as $child){
                $childArr[$child->name] = [
                    'name' => $child->name,
                    'description' => $child->description,
                ];
                unset($allPermissions[$child->name]);
            }
            $resArr[$group['name']] = $childArr;

            $excluedArr[] = $group['name'];
        }
        if(count($allPermissions) > 0){
            foreach($allPermissions as $permission){;
                if(!in_array($permission->name,$excluedArr))
                    $resArr['other'][$permission->name] = [
                        'name' => $permission->name,
                        'description' => $permission->description,
                    ];
            }
        }

        return $resArr;
    }



    /**
     * 查询所有的角色，并个分组格式化
     */
    public function getFormatAllRoles()
    {
        $allRoles = $this->auth->getRoles();
        $allRolesArr = [];
        foreach($allRoles as $prole){
            $allRolesArr[] = $prole->name;
        }
        $allGroup = YiiForum::getAppParam('cachedRolesGroup');
        $resArr = [];
        $excluedArr = [];
        foreach($allGroup as $group){
            $allChild = $this->auth->getChildren($group['name']);
            $childArr = [];
            foreach($allChild as $child){
                if(in_array($child->name, $allRolesArr)){
                    $childArr[$child->name] = [
                        'name' => $child->name,
                        'description' => $child->description,
                    ];
                }
                unset($allRoles[$child->name]);
            }
            $resArr[$group['name']] = $childArr;

            $excluedArr[] = $group['name'];
        }
        if(count($allRoles) > 0){
            foreach($allRoles as $role){
                if(!in_array($role->name,$excluedArr))
                    $resArr['other'][$role->name] = [
                        'name' => $role->name,
                        'description' => $role->description,
                    ];
            }
        }

        return $resArr;
    } 
}
