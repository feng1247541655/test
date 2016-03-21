<?php

namespace backend\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\rbac\Item;
use yii\rbac\Role;
use yii\rbac\Permission;
use backend\models\AuthItem;
use common\base\YiiForum;


/**
 * AuthItemController implements the CRUD actions for AuthItem model.
 */
class PermissionController extends AuthController
{

	/**
	 * Lists all AuthItem models.
	 *
	 * @return mixed
	 */
	public function actionIndex()
	{
		$groups = YiiForum::getAppParam('cachedPermissionsGroup');;
		
        $query = AuthItem::find();
        $config = [
                'pageSize' => Yii::$app->params['pageSize'],
                'order' => 'created_at DESC',
                'where' => [
                		'type' => 2,
                ],
            ];
        $locals = YiiForum::getPagedRows($query,$config);
        $locals['groups'] = $groups;
		return $this->render('index', $locals);
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
			$item = $this->model2Item($model, new Permission());
			$this->auth->add($item);
			
			$categoryName = YiiForum::getPostValue('AuthItem')['category'];
			$category = new Permission();
			if($categoryName){
				$category->name = $categoryName;
				$this->auth->addChild($category, $item);				
			}else{
				$rootPermission = $this->auth->getPermission('root_permission');
				if(!$rootPermission){
					$model2 = new AuthItem;
					$model2->name = 'root_permission';
					$model2->description = '权限根';
					$model2->rule_name = '';
					$model2->data = '';
					$item2 = $this->model2Item($model2, new Permission());
					$this->auth->add($item2);
				}
				$category->name = 'root_permission';
				$this->auth->addChild($category, $item);
				AuthItem::createCachedPermissionsGroup();				
			}

			return $this->redirect([
					'index',
			]);

		}else{
			$locals = [];
			$locals['groups'] = YiiForum::getAppParam('cachedPermissionsGroup');
			$locals['model'] = $model;
			//var_dump(Yii::$app->params);
			//exit;
			return $this->render('create', $locals);
		}
	}

	public function actionRefresh()
	{
		AuthItem::createCachedPermissions();
		
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
			$item = $this->model2Item($model, new Permission());
			$this->auth->update($id, $item);
					
			return $this->redirect([
					'index',
			]);
		}
		else
		{
			$locals = [];
			$locals['groups'] = YiiForum::getAppParam('cachedPermissionsGroup');
			
			$parent = AuthItem::getAuthItemParent($id);
			if($parent)
				$model->category = $parent;
			$locals['model'] = $model;
			return $this->render('update', $locals);
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
		$item = new Permission();
		$item->name = $id;
		$this->auth->remove($item);
		
		//AuthItem::createCachedPermissions();
		
		return $this->redirect([
				'index', 
		]);
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
