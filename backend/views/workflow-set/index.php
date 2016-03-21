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
//AppAsset::register($this);
$this->title = Yii::t('app','Workflow List');
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="row">
    <div class="col-xs-12">
        <div class="row">
            <div class="col-sm-12">
                <div class="widget-box">

                    <div class="widget-body">
                        <div class="widget-main">
                            <?php $form = ActiveForm::begin([
                                        'options' => [
                                            'class'=>'form-inline',
                                            'role'=>'form',
                                        ],
                                        'action'=>Url::to(['workflow-set/index']),

                                ]); ?>
                                <label class="inline"><?=Yii::t('app', 'Flow Name') ?> : </label> <input type="text" name="flow_name" class="input-sm" />
                                <button type="submit" class="btn btn-purple btn-sm">
                                    <?=Yii::t('app', 'Search') ?>
                                    <i class="ace-icon fa fa-search icon-on-right bigger-110"></i>
                                </button>
                            <?php ActiveForm::end(); ?>                               
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div>
                    <div class="modal-footer no-margin-top">
                        <div class="col-xs-6">
                            <div class="dataTables_info pull-left">
                                <a href="<?=Url::to(['workflow-set/create'])?>"><button class="btn btn-sm btn-success"><?=Yii::t('app', 'Create')?></button></a>
                                <button class="btn btn-sm btn-danger"><?=Yii::t('app', 'Delete')?></button>
                            </div>
                        </div>
                        <?= LinkPager::widget([
                                    'pagination' => $pages,
                                    'maxButtonCount'=>8,
                                    'options' => [
                                        'class' => 'pagination pull-right no-margin',
                                    ],
                                ]);
                            ?>
                    </div>
                    <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th><?=Yii::t('app', 'ID') ?></th>
                                <th class="hidden-320"><?=Yii::t('app', 'Flow Name') ?></th>
                                <th><?=Yii::t('app', 'Category ID') ?></th>
                                <th><?=Yii::t('app', 'Flow Status') ?></th>
                                <th><?=Yii::t('app', 'Flow Type') ?></th>
                                <th><?=Yii::t('app','Operation') ?></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                foreach($rows as $row):
                            ?>
                            <tr>
                                <td>
                                    <?= $row['flow_id'] ?>
                                </td>
                                <td><?= $row['flow_name'] ?></td>
                                <td>
                                    <?php

                                    ?>
                                </td>
                                <td>
                                    <?php
                                        if($row['flow_status'] == 1)
                                            echo '<span class="label label-success arrowed">'.Yii::t('app','Enable').'</span>';
                                        else
                                            echo '<span class="label label-warning">'.Yii::t('app','Disable').'</span>';
                                    ?>
                                    
                                </td>
                                <td>
                                    <?php
                                        if($row['flow_type'] == 1)
                                            echo Yii::t('app','Fixed Flow');
                                        else
                                            echo Yii::t('app','Free Flow');
                                    ?>
                                    
                                </td>
                                <td>
                                    <div class="hidden-sm hidden-xs action-buttons">
                                        <a title="<?=Yii::t('app', 'View')?>" class="blue" href="#">
                                            <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                        </a>
                                        <a title="<?=Yii::t('app','Set Step')?>" class="green" href="<?php echo Url::to(['workflow-set/step-index','id'=>$row['flow_id']])?>">
                                            <i class="ace-icon fa fa-plus-circle bigger-130"></i>
                                        </a>

                                        <a title="<?=Yii::t('app','Edit')?>" class="green" href="<?php echo Url::to(['workflow-set/update','id'=>$row['flow_id']])?>">
                                            <i class="ace-icon fa fa-pencil bigger-130"></i>
                                        </a>

                                        <a title="<?=Yii::t('app','Delete')?>" class="red" href="<?php echo Url::to(['workflow-set/delete','id'=>$row['flow_id']])?>">
                                            <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                        </a>

                                    </div>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer no-margin-top">
                    <div class="col-xs-6">
                        <div class="dataTables_info pull-left"><?=Yii::t('app','The total number of records').' : '.$pages->totalCount?></div>
                    </div>
                    <?= LinkPager::widget([
                            'pagination' => $pages,
                            'maxButtonCount'=>8,
                            'options' => [
                                'class' => 'pagination pull-right no-margin',
                            ],
                        ]);
                    ?>
                </div>
            </div>
        </div>

        <div id="modal-table" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header no-padding">
                        <div class="table-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                <span class="white">&times;</span>
                            </button>
                            <?=Yii::t('app','Workflow Instruction') ?>
                        </div>
                    </div>

                    <div class="modal-body" id="flow_desc_detail" style="min-height:100px;">

                    </div>

                    <div class="modal-footer no-margin-top">
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
</div><!-- /.row -->

<!-- inline scripts related to this page -->
<script type="text/javascript">
    function view_flowDesc($id){
        var url = '<?=Url::to(['bajax/flow-desc'])?>';
        $.post(url,{'id':$id},function(data){
            if(data.status == 0){
                $('#flow_desc_detail').html(data.content);
                $('#modal-table').modal('show');
            }else{
                alert('fail');
            }

        },'json');
    }

</script>

