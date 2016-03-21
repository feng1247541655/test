<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\User $model
 */

$this->title = Yii::t('app','Create Workflow Step');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Workflow List'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Workflow Step List'), 'url' => ['step-index','id'=>$flowModel['flow_id']]];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="page-content">
	<div class="page-header">
		<h1>
			<?= Html::encode($this->title) ?>
		</h1>
	</div>
	<div class="row widget-con">
		<div class="col-xs-12">
			<?= $this->render('_step_form', [
				'model' => $model,
				'flowModel' => $flowModel,
			])	?>
		</div>
	</div>		
	
</div>

