<?php

$this->title = Yii::t('app','Create User');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'User List'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-xs-12">
        <?=
            $this->render('_form', [
                'model' => $model,
            ])
        ?>
    </div>
</div>