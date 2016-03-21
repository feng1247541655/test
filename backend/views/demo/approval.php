<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>审批</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="/static/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/static/css/font-awesome.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="/static/css/ace-fonts.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="/static/css/ace.min.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="../assets/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="/static/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="/static/css/ace-ie.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="/static/css/ace.onpage-help.css" />

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="/static/js/html5shiv.js"></script>
		<script src="/static/js/respond.min.js"></script>
		<![endif]-->

		<!-- 自定义登录-->
		<link rel="stylesheet" href="/static/css/design.css" />
	</head>

	<body id="operation">
		<div class="main-container" style="margin-top:0px;">
			<div class="operation">
				<div class="switcher">
					<ul>
					<li class="form_in" name="1"><i class="ace-icon fa fa-credit-card"></i>表单</li>
					<li class="attach_in" name="2"><i class="ace-icon fa fa-external-link"></i>附件</li>
					<li class="remark_in" name="3"><i class="ace-icon fa fa-pencil-square-o"></i>会签</li>
					</ul>
				</div>
				<div class="operation-block"><i class="ace-icon fa fa-cogs"></i>流程图</div>
				<div class="operation-block"><i class="ace-icon fa fa-users"></i>委托</div>
			</div>

			<div class="main-content" style="margin-left:51px;">
				<div class="page-wrapper">
					<div class="page-content">
						<div class="page-header">
							<h1>
								新建流程
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									借支申请
								</small>
							</h1>
						</div>
						
						<div class="operation-con">
							<div class="operation-tab" id="index_1" style="height:800px; background:#d6ecfb;">审批表格</div><!-- /.operation-tab -->

							<div class="operation-adjunct" id="index_2">
								<div class="attchment-title-block ico-fj">
									<span class="attchment-public">公共附件区</span>
								</div>
								<div class="operation-tab">
									审批附件
								</div>
							</div><!-- /.operation-adjunct -->

							<div class="operation-sign" id="index_3">
								<div class="attchment-title-block ico-qz">
									<span class="attchment-public">会签意见区</span>
								</div>
								<div class="operation-tab">
									审批签字
								</div>
							</div><!-- /.operation-sign -->
						</div>
					</div><!-- /.page-content -->

					<div class="footer">
						<div class="handle-btn-block">
							<button class="btn btn-sm btn-primary">转交下一步</button>
							<button class="btn btn-sm btn-primary">一键转交</button>
							<button class="btn btn-white btn-primary">保存</button>
							<button class="btn btn-white btn-primary">取消</button>
						</div>
					</div>
				</div>
			</div>

		</div>

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='/static/js/jquery.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
		<script type="text/javascript">
		 window.jQuery || document.write("<script src='/static/js/jquery1x.min.js'>"+"<"+"/script>");
		</script>
		<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='/static/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="/static/js/bootstrap.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				$(".switcher ul li").click(function(event) { 
				      var index = $(this).attr('name');
				      var id='#'+'index_'+index
				     $("html,body").animate({scrollTop: $(id).offset().top}, 1000);
				});

			});
		</script>
	</body>
</html>
