<?php

use yii\helpers\Html;
use yii\grid\GridView;
use base\YiiForum;

use yii\helpers\Url;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;


$this->title = Yii::t('app','Permission List');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
	<div class="col-xs-12">
		<div class="row">
			<div class="col-xs-12">
				<div>
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th class="center hide">
									<label class="position-relative">
										<input type="checkbox" class="ace" />
										<span class="lbl"></span>
									</label>
								</th>
								<th><?=Yii::t('app','Name')?></th>

								<th><?=Yii::t('app','Description')?></th>
								<th><?=Yii::t('app','Type')?></th>
								<th><?=Yii::t('app','Operation')?></th>
							</tr>
						</thead>

						<tbody>
							<?php
								foreach($rows as $row):
							?>
							<tr>
								<td class="center hide">
									<label class="position-relative">
										<input type="checkbox" class="ace" />
										<span class="lbl"></span>
									</label>
								</td>

								<td>
									<?= $row['name'] ?>
								</td>
								<td><?= $row['description'] ?></td>
								<td>
								<?php
									if(array_key_exists($row['name'], $groups))
										echo Yii::t('app','Module');
									else
										echo Yii::t('app','Node');
								?>
								</td>
								<td>
									<div class="hidden-sm hidden-xs action-buttons">
										<a class="green" href="<?php echo Url::to(['permission/update','id'=>$row['name']])?>">
											<i class="ace-icon fa fa-pencil bigger-130"></i>
										</a>
										<a class="red" href="<?php echo Url::to(['permission/delete','id'=>$row['name']])?>">
											<i class="ace-icon fa fa-trash-o bigger-130"></i>
										</a>
									</div>
								</td>
							</tr>
							<?php endforeach;?>
						</tbody>
					</table>
				</div>
                <div class="modal-footer no-margin-top">
                <div class="col-xs-6">
                    <div class="dataTables_info pull-left"><?=Yii::t('app','The total number of records').' : '.$pages->totalCount?></div>
                </div>
                <?= LinkPager::widget([
                        'pagination' => $pages,
                        'maxButtonCount'=>8,
                        'options' => [
                            'class' => 'pagination pull-right no-margin',
                        ],
                    ]);
                ?>
            	</div>
			</div>
		</div>

	</div><!-- /.col -->
</div><!-- /.row -->


<!-- inline scripts related to this page -->
<script type="text/javascript">
	jQuery(function($) {
		$(document).on('click', 'th input:checkbox' , function(){
			var that = this;
			$(this).closest('table').find('tr > td:first-child input:checkbox')
			.each(function(){
				this.checked = that.checked;
				$(this).closest('tr').toggleClass('selected');
			});
		});
	
	/*
		$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
		function tooltip_placement(context, source) {
			var $source = $(source);
			var $parent = $source.closest('table')
			var off1 = $parent.offset();
			var w1 = $parent.width();
	
			var off2 = $source.offset();
			//var w2 = $source.width();
	
			if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
			return 'left';
		}*/
	
	})
</script>
