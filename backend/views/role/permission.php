<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;


$this->title = Yii::t('app','Set Permission');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app','Role List'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="row">
    <div class="col-xs-12">
        <div class="widget-box">
            <div class="widget-header">
                <h4 class="widget-title">&nbsp;</h4>

                <div class="widget-toolbar">
                    <a href="#" data-action="collapse">
                        <i class="ace-icon fa fa-chevron-up"></i>
                    </a>

                    <a href="#" data-action="close">
                        <i class="ace-icon fa fa-times"></i>
                    </a>
                </div>
            </div>

            <div class="widget-body">
                <?php $form = ActiveForm::begin();?>
                <div class="widget-main">
                    <?php foreach ($allPermissions as $category=>$permissions):

                    ?>
                    <div>
                        <label class="control-label bolder blue block" >
                            <input name="selectedPermissions[]" type="checkbox" class="ace" value="<?=$category?>" <?php if(array_key_exists($category, $existPermissions)) echo 'checked';?> />
                            <span class="lbl">&nbsp;
                                <?php
                                    if(isset($permissionsGroup[$category])){
                                        echo $permissionsGroup[$category];
                                    }else{
                                        echo $category;
                                    }
                                 ?>
                             </span>
                        </label>
                        <?php
                        $i = 0;
                        foreach($permissions as $permission){
                                if($permission['name'] == 'root_permission' && !in_array(Yii::$app->user->identity->username, Yii::$app->params['systemAdmin']))
                                    continue;
                            ?>
                            <div class="checkbox inline">
                                <label>
                                    <input name="selectedPermissions[]" type="checkbox" class="ace" value="<?=$permission['name']?>" <?php if(array_key_exists($permission['name'], $existPermissions)) echo 'checked';?> />
                                    <span class="lbl"><?=$permission['description']?></span>
                                </label>
                            </div>
                        <?php 
                            $i++;
                        }
                        ?>
                    </div>
                    <hr/>
                    <?php endforeach;?>

                </div>
                <div class="form-actions center">
                    <button type="submit" name="submit" class="btn btn-success">
                        <i class="ace-icon fa fa-check bigger-110"></i>
                        <?=Yii::t('app','Submit')?>
                    </button>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>

