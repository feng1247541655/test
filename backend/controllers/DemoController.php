<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use backend\controllers\BaseController;
use common\base\YiiForum;

/**
 * 后台页面模板
 *
 */
class DemoController extends BaseController
{


    public function actionForm()
    {
        return $this->render('form');
    }
    

    public function actionApproval()
    {
        $this->layout = false;
        return $this->render('approval');
    }

    public function actionTable()
    {
        return $this->render('table');
    }

    public function actionList()
    {
        return $this->render('list2');
    }

}