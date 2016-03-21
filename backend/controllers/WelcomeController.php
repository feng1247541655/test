<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use backend\controllers\BaseController;
use common\base\YiiForum;

/**
 * 后台首页
 *
 */
class WelcomeController extends BaseController
{
    public function actionHome()
    {
        $this->layout = false;
        return $this->render('home');
    }

    public function actionIndex()
    {
        $this->layout = false;
        return $this->render('index');
    }


}