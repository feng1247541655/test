<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\widgets\LinkPager;
use common\base\YiiForum;
/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var common\models\search\UserSearch $searchModel
 */

$this->title = Yii::t('app','User List');
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="row">
    <div class="col-xs-12">
        <div class="row">
            <div class="col-sm-12">
                <div class="widget-box">
                    <div class="widget-header widget-header-small">
                        <h5 class="widget-title lighter"><?=Yii::t('app', 'Search Form') ?></h5>
                    </div>

                    <div class="widget-body">
                        <div class="widget-main">
                            <?php $form = ActiveForm::begin([
                                        'options' => [
                                            'class'=>'form-inline',
                                            'role'=>'form',
                                        ],
                                        'action'=>Url::to(['user/index']),

                                ]); ?> 
                                <label class="inline"><?=Yii::t('app', 'Username') ?> : </label> <input type="text" name="username" class="input-sm" />
                                <label class="inline"><?=Yii::t('app', 'Nickname') ?> : </label> <input type="text" name="nickname" class="input-sm" />
                                <label class="inline"><?=Yii::t('app', 'Email') ?> : </label> <input type="text" name="email" class="input-sm" />
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
            <div id="left_list" class="col-xs-12">
                <div>
                    <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="center hide">
                                    <label class="position-relative">
                                        <input type="checkbox" class="ace" />
                                        <span class="lbl"></span>
                                    </label>
                                </th>
                                <th><?=Yii::t('app', 'Username') ?></th>
                                <th><?=Yii::t('app', 'Nickname') ?></th>
                                <th><?=Yii::t('app', 'Email') ?></th>
                                <th><?=Yii::t('app', 'Status') ?></th>

                                <th><?=Yii::t('app', 'Operation') ?></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                foreach($rows as $row):
                            ?>
                            <tr>
                                <td class="center hide">
                                    <label class="position-relative">
                                        <input type="checkbox" class="ace" />
                                        <span class="lbl"></span>
                                    </label>
                                </td>
                                <td><?= $row['username'] ?></td>
                                <td><?= $row['nickname'] ?></td>
                                <td><?= $row['email'] ?></td>

                                <td>
                                    <?php
                                        if($row['status'] == 200)
                                            echo '<span class="label label-success arrowed">Active</span>';
                                        else
                                            echo '<span class="label label-warning">Disable</span>';
                                    ?>
                                    
                                </td>

                                <td>
                                    <div class="hidden-sm hidden-xs action-buttons">
                                        <?php if(YiiForum::checkAccess('role_set-user')):?>
                                        <a title="<?=Yii::t('app','Set Role')?>" class="green" href="<?php echo Url::to(['role/set-user','id'=>$row['user_id']])?>">
                                            <i class="ace-icon fa fa-plus-circle bigger-130"></i>
                                        </a>
                                        <?php endif;?>
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
                            Results for "Latest Registered Domains
                        </div>
                    </div>

                    <div class="modal-body no-padding">
                        <table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
                            <thead>
                                <tr>
                                    <th>Domain</th>
                                    <th>Price</th>
                                    <th>Clicks</th>

                                    <th>
                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                        Update
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>
                                        <a href="#">ace.com</a>
                                    </td>
                                    <td>$45</td>
                                    <td>3,330</td>
                                    <td>Feb 12</td>
                                </tr>

                                <tr>
                                    <td>
                                        <a href="#">base.com</a>
                                    </td>
                                    <td>$35</td>
                                    <td>2,595</td>
                                    <td>Feb 18</td>
                                </tr>

                                <tr>
                                    <td>
                                        <a href="#">max.com</a>
                                    </td>
                                    <td>$60</td>
                                    <td>4,400</td>
                                    <td>Mar 11</td>
                                </tr>

                                <tr>
                                    <td>
                                        <a href="#">best.com</a>
                                    </td>
                                    <td>$75</td>
                                    <td>6,500</td>
                                    <td>Apr 03</td>
                                </tr>

                                <tr>
                                    <td>
                                        <a href="#">pro.com</a>
                                    </td>
                                    <td>$55</td>
                                    <td>4,250</td>
                                    <td>Jan 21</td>
                                </tr>
                            </tbody>
                        </table>                        
                    </div>

                    <div class="modal-footer no-margin-top">
                        <button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
                            <i class="ace-icon fa fa-times"></i>
                            Close
                        </button>

                        <ul class="pagination pull-right no-margin">
                            <li class="prev disabled">
                                <a href="#">
                                    <i class="ace-icon fa fa-angle-double-left"></i>
                                </a>
                            </li>

                            <li class="active">
                                <a href="#">1</a>
                            </li>

                            <li>
                                <a href="#">2</a>
                            </li>

                            <li>
                                <a href="#">3</a>
                            </li>

                            <li class="next">
                                <a href="#">
                                    <i class="ace-icon fa fa-angle-double-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
</div><!-- /.row -->



<!-- inline scripts related to this page -->
<script type="text/javascript">
    function test1(){
        $('#left_list').removeClass('col-xs-12').addClass('col-xs-8');
        $('#right_list').addClass('col-xs-4').show();
        $('#detail_container').append('<div class="message-loading-overlay"><i class="fa-spin ace-icon fa fa-spinner orange2 bigger-160"></i></div>');
        setTimeout(function(){
            $('#detail_container').find('.message-loading-overlay').remove();   
        },500 + parseInt(Math.random() * 500));
        
    }
    
    function test2(){
        $('#left_list').removeClass('col-xs-8').addClass('col-xs-12');
        $('#right_list').removeClass('col-xs-4').hide();        
    }
    jQuery(function($) {
        $(document).on('click', 'th input:checkbox' , function(){
            var that = this;
            $(this).closest('table').find('tr > td:first-child input:checkbox')
            .each(function(){
                this.checked = that.checked;
                $(this).closest('tr').toggleClass('selected');
            });
        });
    
    /*
        $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
        function tooltip_placement(context, source) {
            var $source = $(source);
            var $parent = $source.closest('table')
            var off1 = $parent.offset();
            var w1 = $parent.width();
    
            var off2 = $source.offset();
            //var w2 = $source.width();
    
            if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
            return 'left';
        }*/
    
    })
</script>

