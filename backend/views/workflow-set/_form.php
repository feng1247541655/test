<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\FlowForm;
use backend\models\FlowCategory;

/**
 * @var yii\web\View $this
 * @var common\models\User $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<?php $form = ActiveForm::begin([
            'options' => [
                'class'=>'form-horizontal',
                'role'=>'form',
            ],
            'fieldConfig' => [
                'template' => "{label}\n<div class=\"col-sm-4 col-xs-12\">{input}</div><div class=\"help-block col-xs-12 col-sm-reset inline\">{error}</div>",
                'labelOptions' => ['class'=>'col-sm-2 control-label no-padding-right'],
            ],
    ]); ?>
        <?= $form->field($model, 'flow_name')->textInput(['class'=>'col-xs-12']) ?>

        <?= $form->field($model, 'category_id')->dropDownList([ArrayHelper::map(FlowCategory::find()->all(),'category_id','category_name')],['class'=>'col-xs-12','prompt'=>Yii::t('app', 'Please Select')]) ?>

        <?= $form->field($model, 'form_id')->dropDownList([ArrayHelper::map(FlowForm::find()->all(),'form_id','form_name')],['class'=>'col-xs-12','prompt'=>Yii::t('app', 'Please Select')]) ?>

        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right"><?=Yii::t('app','Flow Type')?></label>

            <div class="radio inline">
                <label>
                    <input name="FlowItem[flow_type]" value="1" type="radio" class="ace" <?php if($model->isNewRecord){ echo 'checked';}else{if($model->flow_type == 1) echo 'checked';}?> />
                    <span class="lbl"> <?=Yii::t('app','Fixed Flow')?></span>
                </label>
            </div>
            <div class="radio inline">
                <label>
                    <input name="FlowItem[flow_type]" value="2" type="radio" class="ace" <?php if(!$model->isNewRecord && $model->flow_type == 2) echo 'checked'; ?> />
                    <span class="lbl"> <?=Yii::t('app','Free Flow')?></span>
                </label>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right"><?=Yii::t('app','Flow Doc')?></label>

            <div class="radio inline">
                <label>
                    <input name="FlowItem[flow_doc]" value="1" type="radio" class="ace" <?php if($model->isNewRecord){ echo 'checked';}else{if($model->flow_doc == 1) echo 'checked';}?> />
                    <span class="lbl"> <?=Yii::t('app','Yes')?></span>
                </label>
            </div>
            <div class="radio inline">
                <label>
                    <input name="FlowItem[flow_doc]" value="0" type="radio" class="ace" <?php if(!$model->isNewRecord && $model->flow_doc == 0) echo 'checked'; ?> />
                    <span class="lbl"> <?=Yii::t('app','No')?></span>
                </label>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right"><?=Yii::t('app','Free Other')?></label>

            <div class="radio inline">
                <label>
                    <input name="FlowItem[free_other]" value="1" type="radio" class="ace" <?php if($model->isNewRecord){ echo 'checked';}else{if($model->free_other == 1) echo 'checked';}?> />
                    <span class="lbl"> <?=Yii::t('app','Yes')?></span>
                </label>
            </div>
            <div class="radio inline">
                <label>
                    <input name="FlowItem[free_other]" value="2" type="radio" class="ace" <?php if(!$model->isNewRecord && $model->free_other == 2) echo 'checked'; ?> />
                    <span class="lbl"> <?=Yii::t('app','No')?></span>
                </label>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right"><?=Yii::t('app','Flow Status')?></label>

            <div class="radio inline">
                <label>
                    <input name="FlowItem[flow_status]" value="1" type="radio" class="ace" <?php if($model->isNewRecord){ echo 'checked';}else{if($model->flow_status == 1) echo 'checked';}?> />
                    <span class="lbl"> <?=Yii::t('app','Enable')?></span>
                </label>
            </div>
            <div class="radio inline">
                <label>
                    <input name="FlowItem[flow_status]" value="0" type="radio" class="ace" <?php if(!$model->isNewRecord && $model->flow_status == 0 ) echo 'checked'; ?> />
                    <span class="lbl"> <?=Yii::t('app','Disable')?></span>
                </label>
            </div>
        </div>

        <?= $form->field($model, 'flow_desc')->textArea(['class'=>'col-xs-12']) ?>

        <?= $form->field($model, 'auto_name')->textArea(['class'=>'col-xs-12']) ?>

        <?= $form->field($model, 'auto_field')->textArea(['class'=>'col-xs-12']) ?>

        <?= $form->field($model, 'auto_len')->textInput(['class'=>'col-xs-12']) ?>
        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right"><?=Yii::t('app','Free Preset')?></label>

            <div class="radio inline">
                <label>
                    <input name="FlowItem[free_preset]" value="1" type="radio" class="ace" <?php if($model->isNewRecord){ echo 'checked';}else{if($model->free_other == 1) echo 'checked';}?> />
                    <span class="lbl"> <?=Yii::t('app','Yes')?></span>
                </label>
            </div>
            <div class="radio inline">
                <label>
                    <input name="FlowItem[free_preset]" value="0" type="radio" class="ace" <?php if(!$model->isNewRecord && $model->free_other == 0) echo 'checked'; ?> />
                    <span class="lbl"> <?=Yii::t('app','No')?></span>
                </label>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right"><?=Yii::t('app','Is Auto')?></label>

            <div class="radio inline">
                <label>
                    <input name="FlowItem[is_auto]" value="0" type="radio" class="ace" <?php if($model->isNewRecord){ echo 'checked';}else{if($model->free_other == 0) echo 'checked';}?> />
                    <span class="lbl"> <?=Yii::t('app','No')?></span>
                </label>
            </div>
            <div class="radio inline">
                <label>
                    <input name="FlowItem[is_auto]" value="1" type="radio" class="ace" <?php if(!$model->isNewRecord && $model->free_other == 1) echo 'checked'; ?> />
                    <span class="lbl"> <?=Yii::t('app','Yes')?></span>
                </label>
            </div>
        </div>
        <?= $form->field($model, 'auto_task')->textArea(['class'=>'col-xs-12']) ?>        

        <?= $form->field($model, 'model_id')->textInput(['class'=>'col-xs-12']) ?>
        <?= $form->field($model, 'model_name')->textArea(['class'=>'col-xs-12']) ?>

        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right"><?=Yii::t('app','View Priv')?></label>

            <div class="radio inline">
                <label>
                    <input name="FlowItem[view_priv]" value="1" type="radio" class="ace" <?php if($model->isNewRecord){ echo 'checked';}else{if($model->free_other == 1) echo 'checked';}?> />
                    <span class="lbl"> <?=Yii::t('app','Yes')?></span>
                </label>
            </div>
            <div class="radio inline">
                <label>
                    <input name="FlowItem[view_priv]" value="0" type="radio" class="ace" <?php if(!$model->isNewRecord && $model->free_other == 0) echo 'checked'; ?> />
                    <span class="lbl"> <?=Yii::t('app','No')?></span>
                </label>
            </div>
        </div>

        <?=$form->field($model, 'view_user')->textInput(['class'=>'col-xs-12']) ?>

        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right"><?=Yii::t('app','Is Version')?></label>

            <div class="radio inline">
                <label>
                    <input name="FlowItem[is_version]" value="1" type="radio" class="ace" <?php if($model->isNewRecord){ echo 'checked';}else{if($model->free_other == 1) echo 'checked';}?> />
                    <span class="lbl"> <?=Yii::t('app','Yes')?></span>
                </label>
            </div>
            <div class="radio inline">
                <label>
                    <input name="FlowItem[is_version]" value="0" type="radio" class="ace" <?php if(!$model->isNewRecord && $model->free_other == 0) echo 'checked'; ?> />
                    <span class="lbl"> <?=Yii::t('app','No')?></span>
                </label>
            </div>
        </div>        


    <div class="clearfix form-actions">
        <div class="col-md-offset-2 col-md-9">
            <button class="btn btn-info btn-sm" type="submit">
                <i class="ace-icon fa fa-check bigger-110"></i>
                <?=Yii::t('app','Submit') ?>
            </button>

            &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
            <button class="btn btn-sm" type="reset">
                <i class="ace-icon fa fa-undo bigger-110"></i>
                <?=Yii::t('app','Reset') ?>
            </button>
        </div>
    </div>
<?php ActiveForm::end(); ?>
