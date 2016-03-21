<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/**
 * @var yii\web\View $this
 * @var common\models\AuthItem $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<?php 


$form = ActiveForm::begin([
            'options' => [
                'class'=>'form-horizontal',
                'role'=>'form',
            ],
            'fieldConfig' => [
                'template' => "{label}\n<div class=\"col-sm-10\">{input}</div>",
                'labelOptions' => ['class'=>'col-sm-2 control-label no-padding-right'],
            ],
    ]); ?>
        <?php
            if(!$model->isNewRecord){
                $classProperty = ['class'=>'col-xs-10 col-sm-4','disabled'=>'disabled','prompt'=>Yii::t('app','Please Select')];
            }else{
                $classProperty = ['class'=>'col-xs-10 col-sm-4','prompt'=>Yii::t('app','Please Select')];
            }
        ?>
        <?= $form->field($model, 'group')->dropDownList(ArrayHelper::map($groups, 'name', 'description'),$classProperty) ?>

        <?= $form->field($model, 'name')->textInput(['class'=>'col-xs-10 col-sm-4','maxlength' => 64,]) ?>
        
        <?= $form->field($model, 'description')->textarea(['class'=>'col-xs-10 col-sm-4']) ?>
        
        <?= $form->field($model, 'data')->textarea(['class'=>'col-xs-10 col-sm-4']) ?>
        
        <?= $form->field($model, 'rule_name')->textInput(['class'=>'col-xs-10 col-sm-4','maxlength' => 64]) ?>  

    <div class="clearfix form-actions">
        <div class="col-md-offset-2 col-md-9">
            <button class="btn btn-info" type="submit">
                <i class="ace-icon fa fa-check bigger-110"></i>
                <?=Yii::t('app',$model->isNewRecord ? 'Submit' : 'Update') ?>
            </button>

            &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
            <button class="btn" type="reset">
                <i class="ace-icon fa fa-undo bigger-110"></i>
                <?=Yii::t('app','Reset') ?>
            </button>
        </div>
    </div>
<?php ActiveForm::end(); ?>

