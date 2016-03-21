<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;


/**
 * 基础Base，其他的全部继承此Base
 */
class BaseController extends Controller
{

    public function init()
    {
        parent::init();
        //判断登陆
        if (\Yii::$app->user->isGuest){
            header("Location:/index.php?r=site/login");
            exit;
        }
    }


    public function _delete($ids)
    {
        $idArr = explode(',', $ids);
        if($idArr){
            foreach($idArr as $id){
                $this->findModel($id)->delete();
            }
        }

        return \yii\helpers\Json::encode([
            'status' => 0,
            'content' => 'ok',
        ]);
    }


}