<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;


$this->title = Yii::t('app','Set User Role');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app','User List'), 'url' => ['index']];
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
                    <div>

                        <?php foreach ($allRoles as $group=>$roles):
                            if($group == 'administrator' && !in_array(Yii::$app->user->identity->username, Yii::$app->params['systemAdmin']))
                                continue;
                        ?>
                        <div>
                            <label class="control-label bolder blue block" >
                                <input name="selectedRoles[]" type="checkbox" class="ace" value="<?=$group ?>" <?php if(array_key_exists($group, $existRoles)) echo 'checked';?> />
                                <span class="lbl">&nbsp;
                                    <?php
                                        if(isset($rolesGroup[$group])){
                                            echo $rolesGroup[$group];
                                        }else{
                                            echo $group;
                                        }
                                     ?>
                                 </span>
                            </label>
                            <?php
                            $i = 0;
                            foreach($roles as $role){
                                if($role['name'] == 'root_role' && !in_array(Yii::$app->user->identity->username, Yii::$app->params['systemAdmin']))
                                    continue;
                            ?>
                                <div class="checkbox inline">
                                    <label>
                                        <input name="selectedRoles[]" type="checkbox" class="ace" value="<?=$role['name']?>" <?php if(array_key_exists($role['name'], $existRoles)) echo 'checked';?> />
                                        <span class="lbl"><?=$role['description']?></span>
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


