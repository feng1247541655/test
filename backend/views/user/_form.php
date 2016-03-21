<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
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
<div class="tabbable">
    <ul class="nav nav-tabs" id="myTab">
        <li class="active">
            <a data-toggle="tab" href="#home">
                <?=Yii::t('app', 'Base Info')?>
            </a>
        </li>

        <li>
            <a data-toggle="tab" href="#profile">
                <?=Yii::t('app', 'Extend Info')?>
            </a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane in active">

            <?= $form->field($model, 'username')->textInput(['class'=>'col-xs-12']) ?>
    
            <?php if(!$model->isNewRecord): ?>
                <?= $form->field($model, 'reset_password')->radioList(['1'=>Yii::t('app','No'),'2' => Yii::t('app','Yes')],['class'=>'col-xs-12',]) ?>
            <?php endif; ?>

            <?= $form->field($model, 'nick_name')->textInput(['class'=>'col-xs-12']) ?>

            <?= $form->field($model, 'english_name')->textInput(['class'=>'col-xs-12']) ?>

            <?= $form->field($model, 'email')->textInput(['class'=>'col-xs-12']) ?>

            <?= $form->field($model, 'mobile')->textInput(['class'=>'col-xs-12']) ?>

            <?= $form->field($model, 'sex')->radioList(['1'=>Yii::t('app','Man'),'2' => Yii::t('app','Woman')],['class'=>'col-xs-12',]) ?>

            <?= $form->field($model, 'avatar')->fileInput(['class'=>'col-xs-12']) ?>

        </div>

        <div id="profile" class="tab-pane">
            <?= $form->field($model, 'dept_id')->textInput(['class'=>'col-xs-12']) ?>

            <?= $form->field($model, 'birthday')->textInput(['class'=>'col-xs-12']) ?>

            <?= $form->field($model, 'tel_dept')->textInput(['class'=>'col-xs-12']) ?>

            <?= $form->field($model, 'fax_dept')->textInput(['class'=>'col-xs-12']) ?>

            <?= $form->field($model, 'add_home')->textInput(['class'=>'col-xs-12']) ?>

            <?= $form->field($model, 'post_home')->textInput(['class'=>'col-xs-12']) ?>

            <?= $form->field($model, 'tel_home')->textInput(['class'=>'col-xs-12']) ?>

            <?= $form->field($model, 'qq')->textInput(['class'=>'col-xs-12']) ?>

            <?= $form->field($model, 'ichat')->textInput(['class'=>'col-xs-12']) ?>

            <?= $form->field($model, 'user_sort')->textInput(['class'=>'col-xs-12']) ?>

            <?= $form->field($model, 'remark')->textarea(['class'=>'col-xs-12']) ?>

            <?= $form->field($model, 'mobile_hidden')->dropDownList(['1' => Yii::t('app','Show Mobile'),'2' => Yii::t('app', 'Hide Mobile')],['class'=>'col-xs-12']) ?>

        </div>
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

<?php $form->end();?>



    


