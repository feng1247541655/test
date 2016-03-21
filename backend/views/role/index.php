<?php

use yii\helpers\Html;
use yii\grid\GridView;

use yii\helpers\Url;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
use common\base\YiiForum;


$this->title = Yii::t('app','Role List');
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    #button{
        float: right;
        position:relative; 
        right:13px; 
        top:-25px; 
    }
</style>
<!--<div id="button">
            <a href="<?=Url::to(['role/refresh'])?>"><button type="button" class="btn btn-primary btn-sm pull-right" onclick="show_approve_form()">
                <i class="ace-icon fa fa-check-square-o icon-on-left bigger-110"></i>更新缓存                    
            </button></a>
        </div>-->

<div class="row">
	<div class="col-xs-12">
		<div class="row">
			<div class="col-xs-12">
				<div>
					<table id="sample-table-2" class="table table-striped table-bordered table-hover">
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
								<th><?=Yii::t('app','Rule Name')?></th>
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
								<td><?= Yii::t('app',$row['description']) ?></td>
								<td><?= $row['rule_name'] ?></td>
								<td>
									<div class="hidden-sm hidden-xs action-buttons">
                                        <?php if(YiiForum::checkAccess('role_permission')):?>
                                        <a title="<?=Yii::t('app','Role Permission')?>" class="green" href="<?php echo Url::to(['role/permission','id'=>$row['name']])?>">
                                            <i class="ace-icon fa fa-plus-circle bigger-130"></i>
                                        </a>
                                        <?php endif;?>
										<?php if(YiiForum::checkAccess('role_update')):?>
										<a title="<?=Yii::t('app','Update') ?>" class="green" href="<?php echo Url::to(['role/update','id'=>$row['name']])?>">
											<i class="ace-icon fa fa-pencil bigger-130"></i>
										</a>
										<?php endif;?>
										<?php if(YiiForum::checkAccess('role_delete')):?>
										<a title="<?=Yii::t('app','Delete') ?>" class="red" href="<?php echo Url::to(['role/delete','id'=>$row['name']])?>">
											<i class="ace-icon fa fa-trash-o bigger-130"></i>
										</a>
										<?php endif;?>
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
