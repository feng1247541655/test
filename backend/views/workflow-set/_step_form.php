<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

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
        <?= $form->field($model, 'prcs_id')->dropDownList(['1'=>Yii::t('app','Step_1'),'2'=>Yii::t('app','Step_2'),'3'=>Yii::t('app','Step_3'),'4'=>Yii::t('app','Step_4'),'5'=>Yii::t('app','Step_5'),'6'=>Yii::t('app','Step_6'),'7'=>Yii::t('app','Step_7'),'8'=>Yii::t('app','Step_8'),'9'=>Yii::t('app','Step_9'),'10'=>Yii::t('app','Step_10'),'11'=>Yii::t('app','Step_11'),'12'=>Yii::t('app','Step_12')],['class'=>'col-xs-12']) ?>
        <?= $form->field($model, 'prcs_name')->textInput(['class'=>'col-xs-12'])?>
        <?= $form->field($model, 'prcs_flag')->dropDownList(['0'=>Yii::t('app','Direct Leader'),'2'=>Yii::t('app','Special Department'),'1'=>Yii::t('app','Special Person'),'3'=>Yii::t('app','Joint Signature'),'4'=>Yii::t('app','Department Leader') ,'5'=>Yii::t('app','General Department')],['class'=>'col-xs-12']) ?>
        <?= $form->field($model, 'prcs_item')->textArea(['class'=>'col-xs-12'])?>
        <?= $form->field($model, 'prcs_dept_user')->textArea(['class'=>'col-xs-12'])?>
        <?php // $form->field($model, 'prcs_to')->dropDownList(['1'=>Yii::t('app','Step_1'),'2'=>Yii::t('app','Step_2'),'3'=>Yii::t('app','Step_3'),'4'=>Yii::t('app','Step_4'),'5'=>Yii::t('app','Step_5'),'6'=>Yii::t('app','Step_6'),'7'=>Yii::t('app','Step_7'),'8'=>Yii::t('app','Step_8'),'0'=>Yii::t('app','Step End')],['class'=>'col-xs-12']) ?>
        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right"><?=Yii::t('app','Prcs To')?></label>
            <?php
                $stepArr = [
                    '1' => Yii::t('app','Step_1'),
                    '2' => Yii::t('app','Step_2'),
                    '3' => Yii::t('app','Step_3'),
                    '4' => Yii::t('app','Step_4'),
                    '5' => Yii::t('app','Step_5'),
                    '6' => Yii::t('app','Step_6'),
                    '7' => Yii::t('app','Step_7'),
                    '8' => Yii::t('app','Step_8'),
                    '9' => Yii::t('app','Step_9'),
                    '10' => Yii::t('app','Step_10'),
                    '11' => Yii::t('app','Step_11'),
                    '12' => Yii::t('app','Step_12'),
                    '0' => Yii::t('app','Step End'),
                ];
                $existSteps = explode(',', $model['prcs_to']);
                if($stepArr && is_array($stepArr)):
                    foreach ($stepArr as $stepid=>$stepname):
            ?>
            <div class="checkbox inline">
                <label>
                    <input name="selectSteps[]" value="<?=$stepid ?>" type="checkbox" class="ace"  <?php if(!empty($existSteps) && in_array($stepid,$existSteps)) echo 'checked';?> />
                    <span class="lbl"> <?=$stepname ?></span>
                </label>
            </div>
            <?php
                endforeach;
                endif;
            ?>
        </div>
        <?= $form->field($model, 'prcs_in')->textArea(['class'=>'col-xs-12'])?>
        <?= $form->field($model, 'prcs_in_set')->textArea(['class'=>'col-xs-12'])?>
        <?= $form->field($model, 'sign_look')->dropDownList(['0'=>Yii::t('app','Always Visible'),'1'=>Yii::t('app','Signer Not Visible'),'2'=>Yii::t('app','Other Step Not Visible')])?>
        <?= $form->field($model, 'mail_to')->textArea(['class'=>'col-xs-12'])?>

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
