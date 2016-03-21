<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\User $model
 */

$this->title = Yii::t('app','Update Workflow');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Workflow List'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-xs-12">
        <?= $this->render('_form', [
            'model' => $model,
        ])  ?>
    </div>
</div>      


