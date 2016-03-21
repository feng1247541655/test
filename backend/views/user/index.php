<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\widgets\LinkPager;

$this->title = Yii::t('app','User List');
$this->params['breadcrumbs'][] = $this->title;

//接收搜索的默认参数
$username = Yii::$app->request->post('username') ? Yii::$app->request->post('username') : Yii::$app->request->get('username','');
$nick_name = Yii::$app->request->post('nick_name') ? Yii::$app->request->post('nick_name') : Yii::$app->request->get('nick_name','');
$sex = Yii::$app->request->post('sex') ? Yii::$app->request->post('sex') : Yii::$app->request->get('sex','');
//性别下拉列表数组
$sexArr = [
    '1' => Yii::t('app','Man'),
    '2' => Yii::t('app','Woman'),
];
?>
<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->

        <div class="row">
            <div class="col-sm-12">
                <div class="widget-box">
                    <div class="widget-body">
                        <div class="widget-main">
                            <?php $form = ActiveForm::begin([
                                        'options' => [
                                            'class'=>'form-inline',
                                            'role'=>'form',
                                            'id' => 'search_form',
                                        ],
                                ]); ?>
                                <div class="btn-group">
                                    <label class="inline"><?=Yii::t('app','Username')?></label>
                                    <input type="text" name="username" class="input-sm" value="<?=$username?>" />
                                </div>
                                <div class="btn-group">
                                    <label class="inline"><?=Yii::t('app','Nick Name')?></label>
                                    <input type="text" name="nick_name" class="input-sm" value="<?=$nick_name?>" /> 
                                </div>
                                <label class="inline left"><?=Yii::t('app', 'Sex')?></label>
                                <div class="btn-group">
                                    <select name="sex" class="col-xs-12" style="width:150px;">
                                        <option value=""><?=Yii::t('app','Please Select')?></option>
                                        <?php
                                            foreach ($sexArr as $key => $value) {
                                                $select = '';
                                                if($key == $sex){
                                                    $select = 'selected="selected"';
                                                }
                                                echo '<option '.$select.' value="'.$key.'">'.$value.'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="btn-group">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-purple btn-sm">
                                            <?=Yii::t('app','Search')?>
                                            <i class="ace-icon fa fa-search icon-on-right bigger-110"></i>
                                        </button>
                                    </span>
                                </div>
                                <div class="btn-group">
                                    <span class="input-group-btn">
                                        <button onclick="clearForm('search_form')" type="button" class="btn btn-gray btn-sm">
                                            <?=Yii::t('app','Clear')?>
                                        </button>
                                    </span>
                                </div>
                               
                            </form>
                            <?php $form->end();?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="modal-footer no-margin-top">
                    <div class="col-xs-6">
                        <div class="dataTables_info pull-left">
                            <a href="<?=Url::to('user/create')?>"><button class="btn btn-sm btn-success"><?=Yii::t('app', 'Create')?></button></a>
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
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="center">
                                <label class="position-relative">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </th>
                            <th><?=Yii::t('app', 'Username')?></th>
                            <th><?=Yii::t('app', 'Nick Name')?></th>
                            <th><?=Yii::t('app', 'Sex')?></th>
                            <th><?=Yii::t('app', 'Email')?></th>
                            <th><?=Yii::t('app', 'Mobile')?></th>
                            <th><?=Yii::t('app', 'Status')?></th>
                            <th><?=Yii::t('app', 'Not Login')?></th>
                            <th><?=Yii::t('app', 'Operation')?></th>
                        </tr>
                    </thead>

                    <tbody id="content_table">
                        <?php
                            if($rows):
                                foreach($rows as $row):
                        ?>
                        <tr>
                            <td class="center">
                                <label class="position-relative">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </td>

                            <td><?=$row['username']?></td>
                            <td><?=$row['nick_name']?></td>
                            <td><?=$row['sex']?></td>
                            <td><?=$row['email']?></td>
                            <td><?=$row['mobile']?></td>
                            <td><?=$row['status']?></td>
                            <td><?=$row['not_login']?></td>

                            <td>
                                <div class="hidden-sm hidden-xs action-buttons">
                                    <a title="<?=Yii::t('app', 'View')?>" class="blue" href="#">
                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                    </a>

                                    <a title="<?=Yii::t('app', 'Edit')?>" class="green" href="<?=Url::to(['update','id'=>$row['id']])?>">
                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                    </a>

                                    <a title="<?=Yii::t('app', 'Delete')?>" class="red" href="#">
                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                    </a>

                                    <a class="purple" href="#">
                                        <i class="ace-icon fa fa-plus-circle bigger-130"></i>
                                    </a>

                                    <a class="green" href="#">
                                        <i class="ace-icon fa fa-refresh bigger-130"></i>
                                    </a>
                                    <a class="red" href="#">
                                        <i class="ace-icon fa fa-plus bigger-130"></i>
                                    </a>

                                    <a class="green" href="#">
                                        <i class="ace-icon fa fa-check bigger-130"></i>
                                    </a>
                                    <a class="red" href="#">
                                        <i class="ace-icon fa fa-heart bigger-130"></i>
                                    </a>
                                    <a class="red" href="#">
                                        <i class="ace-icon fa fa-reply bigger-130"></i>
                                    </a>
                                    <a class="purple" href="#">
                                        <i class="ace-icon fa fa-bell-o bigger-130"></i>
                                    </a>
                                    <a class="green" href="#">
                                        <i class="ace-icon fa fa-circle bigger-130"></i>
                                    </a>
                                    <a class="orange" href="#">
                                        <i class="ace-icon fa fa-exclamation-triangle bigger-130"></i>
                                    </a>

                                </div>
                            </td>
                        </tr>
                        <?php
                                endforeach;
                            endif;
                        ?>
                    </tbody>
                </table>
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
            </div><!-- /.span -->
        </div><!-- /.row -->

        <div class="hr hr-18 dotted hr-double"></div>

        <h4 class="pink">
            <i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
            <a href="#modal-table" role="button" class="green" data-toggle="modal"> Table Inside a Modal Box </a>
        </h4>

        <div class="hr hr-18 dotted hr-double"></div>

        <div id="modal-table" class="modal fade" tabindex="-99">
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
<script type="text/javascript">
    jQuery(function($) {
        $(document).on('click', 'th input:checkbox' , function(){
            var that = this;
            $(this).closest('table').find('tr > td:first-child input:checkbox')
            .each(function(){
                this.checked = that.checked;
                $(this).closest('tr').toggleClass('selected');
            });
        });
    });



    function masklayer(obj){
        $('#'+obj).append('<div class="message-loading-overlay"><i class="fa-spin ace-icon fa fa-spinner grey bigger-300"></i></div>');
    }

    function clearForm(id) {
        var objId = document.getElementById(id);
        if (objId == undefined) {
            return;
        }
        for (var i = 0; i < objId.elements.length; i++) {
            if (objId.elements[i].type == "text") {
                objId.elements[i].value = "";
            }
            else if (objId.elements[i].type == "password") {
                objId.elements[i].value = "";
            }
            else if (objId.elements[i].type == "radio") {
                objId.elements[i].checked = false;
            }
            else if (objId.elements[i].type == "checkbox") {
                objId.elements[i].checked = false;
            }
            else if (objId.elements[i].type == "select-one") {
                objId.elements[i].options[0].selected = true;
            }
            else if (objId.elements[i].type == "select-multiple") {
                for (var j = 0; j < objId.elements[i].options.length; j++) {
                    objId.elements[i].options[j].selected = false;
                }
            }
            else if (objId.elements[i].type == "textarea") {
                objId.elements[i].value = "";
            }
            //else if (objId.elements[i].type == "file") {
            // //objId.elements[i].select();
            // //document.selection.clear();
            // // for IE, Opera, Safari, Chrome
            // var file = objId.elements[i];
            // if (file.outerHTML) {
            // file.outerHTML = file.outerHTML;
            // } else {
            // file.value = ""; // FF(包括3.5)
            // }
            //}
        }
    }
</script>