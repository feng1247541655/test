<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\widgets\LinkPager;
use backend\models\YiiForum;
/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var common\models\search\UserSearch $searchModel
 */

$this->title = Yii::t('app','Flow_desc and Step_list');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Workflow List'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="page-content">
    <div class="page-header">
        <h1>
            <?= Html::encode($this->title) ?>
        </h1>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="widget-box">
                        <div class="widget-header">
                            <h4 class="widget-title"><?=Yii::t('app','Step List')?></h4>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main">
                                <p><?=Yii::t('app','Flow Name') ?>: <?=$flowModel['flow_name'] ?></p>
                                <p><?=Yii::t('app','Flow Desc')?>: <?=$flowModel['flow_desc'] ?></p>
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th><?=Yii::t('app', 'ID') ?></th>
                                            <th><?=Yii::t('app', 'Prcs Name') ?></th>
                                            <th><?=Yii::t('app', 'Prcs To') ?></th>
                                            <th><?=Yii::t('app', 'Operation')?></td>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                            foreach($allSteps as $step):
                                        ?>
                                        <tr>
                                            <td><span class="badge badge-info"><?=$step['prcs_id'] ?></span></td>
                                            <td><?=$step['prcs_name'] ?></td>
                                            <td>→<?=$step['prcs_to'] > 0 ? $step['prcs_to'] : Yii::t('app','Step End') ?></td>
                                            <td>
                                                <a title="<?=Yii::t('app','Role Permission')?>" class="green" href="javascript:view_step(<?=$step['id']?>)">
                                                    <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                </a>
                                                &nbsp;
                                                <a title="<?=Yii::t('app','Update')?>" class="green" href="<?php echo Url::to(['workflow-set/update-step','id'=>$step['id']])?>">
                                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                </a>
                                                &nbsp;
                                                <a title="<?=Yii::t('app','Delete')?>" class="red" href="<?php echo Url::to(['workflow-set/delete-step','id'=>$step['id']])?>">
                                                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                                <p><a href="<?=Url::to(['workflow-set/create-step','id'=>$flowModel['flow_id']])?>"><button class="btn btn-sm btn-info"><?=Yii::t('app','Create Step')?></button></a></p>                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="widget-box">
                        <div class="widget-header">
                            <h4 class="widget-title"><?=Yii::t('app','Step List')?></h4>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main" id="flow_step_timeline">
                                <div class="timeline-container timeline-style2">
                                    <span class="timeline-label">
                                        <b><?=Yii::t('app','Flow Start')?></b>
                                    </span>

                                    <div class="timeline-items">
                                        <?php foreach($allSteps as $step):?>
                                        <div class="timeline-item clearfix">
                                            <div class="timeline-info">
                                                <span class="timeline-date"><?=Yii::t('app','Step_'.$step['prcs_id']) ?></span>

                                                <i class="timeline-indicator btn btn-info no-hover"></i>
                                            </div>

                                            <div class="widget-box transparent">
                                                <div class="widget-body">
                                                    <div class="widget-main no-padding">
                                                        <span class="bigger-110">
                                                            <?=$step['prcs_name']?>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach;?>
                                        
                                    </div><!-- /.timeline-items -->
                                    <span class="timeline-label">
                                        <b><?=Yii::t('app','Flow End')?></b>
                                    </span>
                                </div><!-- /.timeline-container -->                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.page-content -->


<!-- inline scripts related to this page -->
<script type="text/javascript">
    function view_step(id){
        $.post('/index.php?r=bajax/flow-step-detail',{'id':id},function(data){
            if(data.status == 0){
                $('#flow_step_timeline').html(data.content);
            }else{
                //alert(22);
                //$.ajaxError(data.content);
                var msg = data.content;
                $.gritter.add({
                title: 'This is a warning notification',
                text: msg,
                class_name: 'gritter-error'
        });
            }

        },'json');
    }
</script>

