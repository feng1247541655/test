<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\AuthItem $model
 */

$this->title = Yii::t('app','Update Role');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app','Role List'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="row">
    <div class="col-xs-12">
        <?= $this->render('_form', [
            'model' => $model,
            'groups' => $groups,
        ])  ?>
    </div>
</div>



