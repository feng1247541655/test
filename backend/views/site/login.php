<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$errorArr = $model->getErrors();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Login Page - Ace Admin</title>

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
			<link rel="stylesheet" href="/static/css/ace-part2.min.css" />
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

	<body class="login-layout custom-login">
		<div class="container">
			<div class="login-container">
				<div class="center">
					<h1>
						<i class="ace-icon fa fa-leaf green"></i>
						<span class="red">Ace</span>
						<span class="white" id="id-text2">Application</span>
					</h1>
				</div>

				<div class="space-6"></div>

				<div class="position-relative">
					<div id="login-box" class="login-box visible widget-box no-border">
						<h4 class="form-title">Login to your account</h4>
						<div class="space-6"></div>

						<?php $form = ActiveForm::begin([
								'id' => 'login-form',

								]); ?>
							<fieldset>
								<div class="alert alert-danger">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Enter any username and password.
									<br>
								</div>
								
								<div class="control-group error">
									<label class="block clearfix">
										<span class="block input-icon input-icon-left">
											<?=Html::activeTextInput($model,'username', ['placeholder'=>'Username', 'class'=>'form-control']) ?>
											<!--<input type="text" class="form-control" placeholder="Username" />-->
											<i class="ace-icon fa fa-user"></i>
										</span>
									</label>
									<?php
										$user_class = 'hidden';
										$user_info = '';
										if(isset($errorArr['username'])){
											$user_class = '';
											$user_info = $errorArr['username'][0]; 
										}
									?>
									<label for="username" class="help-inline help-small no-left-padding <?=$user_class?>"><?=$user_info?></label>
								</div>

								<div class="control-group error">
									<label class="block clearfix">
										<span class="block input-icon input-icon-left">
											<?=Html::activePasswordInput($model,'password', ['placeholder'=>'Password', 'class'=>'form-control']) ?>
											<i class="ace-icon fa fa-lock"></i>
										</span>
									</label>
									<?php
										$pass_class = 'hidden';
										$pass_info = '';
										if(isset($errorArr['password'])){
											$pass_class = '';
											$pass_info = $errorArr['password'][0]; 
										}
									?>
									<label for="password" class="help-inline help-small no-left-padding <?=$pass_class?>"><?=$pass_info?></label>
								</div>

								<div class="clearfix">
									<label class="inline">
										<input type="checkbox" class="ace" value="1" name="LoginForm[rememberMe]" <?php if($model->rememberMe == 1) echo "checked=\"checked\"" ;?> />
										<span class="lbl"> Remember Me</span>
									</label>

									<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
										<i class="ace-icon fa fa-key"></i>
										<span class="bigger-110">Login</span>
									</button>
								</div>

								<div class="space-4"></div>
							</fieldset>
						<?php ActiveForm::end(); ?>

						<div class="toolbar clearfix forget-password">
							<h4>Forgot your password ?</h4>
							<p>no worries, click <a href="#" data-target="#forgot-box" class="forgot-password-link">here</a> to reset your password.</p>
						</div>
					</div><!-- /.login-box -->

					<div id="forgot-box" class="forgot-box widget-box no-border">
						<h4 class="form-title">Forget Password ?</h4>
						<p>Enter your email and to receive instructions</p>

						<form>
							<fieldset>
								<div class="control-group error">
									<label class="block clearfix">
										<span class="block input-icon input-icon-left">
											<input type="email" class="form-control" placeholder="Email" />
											<i class="ace-icon fa fa-envelope"></i>
										</span>
									</label>
									<label for="email" class="help-inline help-small no-left-padding">Email is required.</label>
								</div>

								<div class="clearfix form-rows toolbar">
									<div class="inline">
										<a href="#" data-target="#login-box" class="back-to-login-link">
											<button class="btn btn-sm">
												<span class="bigger-110 no-text-shadow">Back</span>
											</button>
										</a>
									</div>
									<button type="button" class="width-35 pull-right btn btn-sm btn-primary">
										<i class="ace-icon fa fa-lightbulb-o"></i>
										<span class="bigger-110">Send Me!</span>
									</button>
								</div>
							</fieldset>
						</form>

						
					</div><!-- /.forgot-box -->
				</div><!-- /.position-relative -->
			</div>

			<div class="copyright">2013 © Metronic. Admin Bootstrap Template.</div>
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
		<!-- adds js by login bg change-->
		<script src="/static/js/bootstrap.min.js"></script>
		<script src="/static/js/jquery.backstretch.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });

			//登录背景轮播
            $.backstretch([
                  "/static/img/login/1.jpg",
                  "/static/img/login/2.jpg",
                  "/static/img/login/3.jpg",
                  "/static/img/login/4.jpg"
            ], { duration: 3000, fade: 750 });
			 
			});
		</script>
	</body>
</html>
