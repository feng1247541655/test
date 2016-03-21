<?php
namespace backend\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\db\Query;
use common\base\YiiForum;
use backend\controllers\BaseController;
use backend\models\FlowItem;
use backend\models\FlowProcess;


/**
 * 工作流设置模块
 *
 */
class WorkflowSetController extends BaseController
{  

    public function actionIndex()
    {
        $searchUrlArr = [];
        // 设置搜索条件
        $searchArr = $this->_getSearchCondition($searchUrlArr);
        $queryModel = new Query;
        $query = $queryModel->from(FlowItem::tableName());
        $config = [
                'pageSize' => Yii::$app->params['pageSize'],
                'where'=>$searchArr,
                'urlWhere'=>$searchUrlArr,
            ];
        $locals = YiiForum::getPagedRows($query,$config);
        return $this->render('index', $locals);
    }
    /**
     * 创建工作流
     *
     */
    public function actionCreate()
    {
        $model = new FlowItem;
        if ($model->load(Yii::$app->request->post()) && $model->save())
        {
            return $this->redirect([
                    'index'
            ]);             
            
        }else{
            return $this->render('create', [
                    'model' => $model,                  
            ]);
        }
    }
    /**
     * 更新工作流
     * @param $id
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()))
        {            
            if($model->save()){
                return $this->redirect([
                        'index' 
                ]);                
            }
        }else{
            return $this->render('update', [
                    'model' => $model,                    
            ]);
        }
    }

    /**
     * 删除工作流
     * @param $id int 工作流ID
     */
    public function actionDelete($ids)
    {
        return $this->_delete($ids);
        
    }

    /**
     * 工作流步骤列表
     * @param $id int 工作流id
     */
    public function actionStepIndex($id)
    {
        $flowModel = $this->findModel($id);
        $stepModel = new FlowProcess;
        $allSteps = FlowProcess::find()->where(['flow_id'=>$id])->orderBy('prcs_id ASC')->asArray()->all();
        return $this->render('step-index',[
                'flowModel'=>$flowModel,
                'allSteps' => $allSteps ? $allSteps : [],
            ]);
    }

    /**
     * 创建工作流步骤
     * @param $id int 工作流Id
     */
    public function actionCreateStep($id)
    {
        $flowModel = $this->findModel($id);
        $stepModel = new FlowProcess;
        if($stepModel->load(Yii::$app->request->post())){
            $stepModel->flow_id = $id;
            $stepModel->prcs_to = implode(',', Yii::$app->request->post('selectSteps'));
            if($stepModel->save())
                return $this->redirect(['step-index','id'=>$id]);
        }

        return $this->render('create_step',[
                'model' => $stepModel,
                'flowModel' => $flowModel,
            ]);

    }

    /**
     * 修改工作流步骤
     * @param $id 工作流步骤ID
     */
    public function actionUpdateStep($id)
    {
        $stepModel = FlowProcess::findOne(['id'=>$id]);
        $flowModel = $this->findModel($stepModel['flow_id']);

        if($stepModel->load(Yii::$app->request->post())){
            $stepModel->prcs_to = implode(',', Yii::$app->request->post('selectSteps'));
            if($stepModel->save())
                return $this->redirect(['step-index','id'=>$stepModel['flow_id']]);
        }

        return $this->render('update_step',[
                'model' => $stepModel,
                'flowModel' => $flowModel,
            ]);       
    }

    /**
     * 删除工作流步骤
     * @param $id int 步骤ID
     */
    public function actionDeleteStep($id)
    {
        if (($model = FlowProcess::findOne($id)) === null){
            throw new NotFoundHttpException('The requested page does not exist.');
        }

        $model->delete();
        
        return $this->redirect([
                'step-index',
                'id' => $model['flow_id'],
        ]);

    }

    protected function findModel($id)
    {
        if (($model = FlowItem::findOne(['flow_id'=>$id])) !== null)
        {
            return $model;
        }
        else
        {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * 封装搜索条件
     */
    private function _getSearchCondition($searchUrlArr)
    {
        $arr = ['and',];
        $flow_name = Yii::$app->request->post('flow_name') ? Yii::$app->request->post('flow_name') : Yii::$app->request->get('flow_name');
        if($flow_name){
            $arr[] = ['like', 'flow_name', $flow_name];
            $searchUrlArr['flow_name'] = $flow_name;
        }
            

        return count($arr) > 1 ? $arr : [];       
    }

    /**
     * 保存流程和部门的关联
     * @param $flow_id 流程id
     * @param $depts array 部门
     * @return array
     */
    private function _saveDeptForFlow($flow_id,$depts)
    {
        if(is_array($depts) && count($depts) > 0){
            foreach ($depts as $dept) {
                $model = new FlowDept();
                $model->attributes = [
                    'flow_id' => $flow_id,
                    'dept_id' => $dept,
                ];
                $model->save();
            }
            return true;    
        }
        return false;
    }

    /**
     * 更新流程和部门的关联
     * @param $flow_id 流程id
     * @param $depts array 部门
     * @return array
     */
    private function _updateDeptForFlow($flow_id,$depts)
    {
        $existDepts = $this->_getDeptsByFlowid($flow_id);
        if($existDepts){
            $dropDepts = array_diff($existDepts, $depts);
            /*$dropDepts = [];
            foreach($existDepts as $id){
                if(!in_array($id,$depts)){
                    $dropDepts[] = $id;
                }
            }*/
            if($dropDepts)
                $this->_delDeptForFlow($flow_id,$dropDepts);
        }
        
        if(is_array($depts) && count($depts) > 0){
            foreach ($depts as $dept) {
                $exits = FlowDept::findOne(['flow_id'=>$flow_id,'dept_id'=>$dept]);
                if(!$exits){
                    $model = new FlowDept();
                    $model->attributes = [
                        'flow_id' => $flow_id,
                        'dept_id' => $dept,
                    ];
                    $model->save();
                }
            }
            return true;    
        }
        return false;
    }

    /**
     * 获取流程已经关联的部门
     * @param $flow_id int 流程ID
     * @return array
     */
    private function _getDeptsByFlowid($flow_id)
    {
        $depts = [];
        $deptsInfo = FlowDept::find()->where(['flow_id'=>$flow_id])->indexBy('dept_id')->asArray()->all();
        if($deptsInfo)
            $depts = array_keys($deptsInfo);
        return $depts;

    }

    /**
     * 删除流程所关联的部门
     * @param $flow_id int 流程ID
     * @param $depts array 部门ID数组
     * @return boolen
     */
    private function _delDeptForFlow($flow_id,$depts)
    {
        if($depts){
            foreach ($depts as $dept_id) {
                FlowDept::findOne(['flow_id'=>$flow_id,'dept_id'=>$dept_id])->delete();
            }
        }
        return true;
    }

    /**
     * 流程分类列表
     */
    public function actionFlowCategory()
    {
        echo "这里是列表页";
    }
    
}
