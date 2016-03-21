<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\db\Query;
use backend\controllers\BaseController;
use common\base\YiiForum;
use backend\models\User;

/**
 * 用户管理模块
 *
 */
class UserController extends BaseController
{

    /**
     * 查询用户列表
     *
     * @return mixed
     */
    public function actionIndex()
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
        $locals['model'] = new User;
        return $this->render('index', $locals);
    }

    /**
     * 创建用户
     *
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new User;
        if($model->load(Yii::$app->request->post())){

            $model->setPassword('123456');
            $model->generateAuthKey();
            //$model->signup();
            $ret = $model->save();
            if($ret){
                return $this->redirect([
                        'index' 
                ]);
            }
        }

        return $this->render('create',[
                'model' => $model,
            ]);

    }
    /**
     * 编辑用户
     *
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if($model->load(Yii::$app->request->post()))
        {
            if($model->reset_password == 2){
                $model->setPassword('123456');
            }
            if($model->save()){
                return $this->redirect([
                        'index' 
                ]);                
            }

        }

        return $this->render('update', [
                'model' => $model,
            ]);
    }    

    /**
     * 语言切换
     */
    public function actionLanguage(){       
        $language=  \Yii::$app->request->get('lang');  
        if(isset($language)){  
            \Yii::$app->session['language']=$language;  
        }  
        //切换完语言哪来的返回到哪里
        $this->goBack(\Yii::$app->request->headers['Referer']);  
    }

    /**
     * 封装搜索条件
     */
    private function _getSearchCondition(&$searchUrlArr)
    {
        $arr = ['and',];     
        $username = Yii::$app->request->post('username') ? Yii::$app->request->post('username') : Yii::$app->request->get('username');
        if($username){
            $arr[] = "username='".$username."'";
            $searchUrlArr['username'] = $username;
        }
            
        $sex = Yii::$app->request->post('sex') ? Yii::$app->request->post('sex') : Yii::$app->request->get('sex');
        if($sex){
            $arr[] = "sex='".$sex."'";
            $searchUrlArr['sex'] = $sex;
        }
            
        $nick_name = Yii::$app->request->post('nick_name') ? Yii::$app->request->post('nick_name') : Yii::$app->request->get('nick_name');
        if($nick_name){
            $arr[] = "nick_name='".$nick_name."'";
            $searchUrlArr['nick_name'] = $nick_name;
        }

        $email = Yii::$app->request->post('email') ? Yii::$app->request->post('email') : Yii::$app->request->get('email');
        if($email){
            $arr[] = ['like','email',$email];
            $searchUrlArr['email'] = $email;
        }
            

        return count($arr) > 1 ? $arr : [];
    }

    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null)
        {
            return $model;
        }
        else
        {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}