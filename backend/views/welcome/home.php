<?php

use yii\helpers\Url;
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Blank Page - Ace Admin</title>

		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="/static/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/static/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="/static/css/ace-fonts.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="/static/css/ace.min.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="/static/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="/static/css/ace-skins.min.css" />
		<link rel="stylesheet" href="/static/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="/static/css/ace-ie.min.css" />
		<![endif]-->
		

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="/static/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="/static/js/html5shiv.js"></script>
		<script src="/static/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<div id="wrapper">
		<!-- #section:basics/navbar.layout -->
		<div id="navbar" class="navbar navbar-default">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<!-- #section:basics/sidebar.mobile.toggle -->
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<!-- /section:basics/sidebar.mobile.toggle -->
				<div class="navbar-header pull-left">
					<!-- #section:basics/navbar.layout.brand -->
					<a href="#" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							Ace Admin
						</small>
					</a>

					<!-- /section:basics/navbar.layout.brand -->

					<!-- #section:basics/navbar.toggle -->

					<!-- /section:basics/navbar.toggle -->
				</div>

				<!-- #section:basics/navbar.dropdown -->
				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="grey">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-tasks"></i>
								<span class="badge badge-grey">4</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-check"></i>
									4 Tasks to complete
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Software Update</span>
											<span class="pull-right">65%</span>
										</div>

										<div class="progress progress-mini">
											<div style="width:65%" class="progress-bar"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Hardware Upgrade</span>
											<span class="pull-right">35%</span>
										</div>

										<div class="progress progress-mini">
											<div style="width:35%" class="progress-bar progress-bar-danger"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Unit Testing</span>
											<span class="pull-right">15%</span>
										</div>

										<div class="progress progress-mini">
											<div style="width:15%" class="progress-bar progress-bar-warning"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Bug Fixes</span>
											<span class="pull-right">90%</span>
										</div>

										<div class="progress progress-mini progress-striped active">
											<div style="width:90%" class="progress-bar progress-bar-success"></div>
										</div>
									</a>
								</li>

								<li class="dropdown-footer">
									<a href="#">
										See tasks with details
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="purple">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-bell icon-animated-bell"></i>
								<span class="badge badge-important">8</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-exclamation-triangle"></i>
									8 Notifications
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
												New Comments
											</span>
											<span class="pull-right badge badge-info">+12</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<i class="btn btn-xs btn-primary fa fa-user"></i>
										Bob just signed up as an editor ...
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>
												New Orders
											</span>
											<span class="pull-right badge badge-success">+8</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-info fa fa-twitter"></i>
												Followers
											</span>
											<span class="pull-right badge badge-info">+11</span>
										</div>
									</a>
								</li>

								<li class="dropdown-footer">
									<a href="#">
										See all notifications
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="green">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
								<span class="badge badge-success">5</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-envelope-o"></i>
									5 Messages
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar">
										<li>
											<a href="#">
												<img src="/static/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Alex:</span>
														Ciao sociis natoque penatibus et auctor ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>a moment ago</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#">
												<img src="/static/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Susan:</span>
														Vestibulum id ligula porta felis euismod ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>20 minutes ago</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#">
												<img src="/static/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Bob:</span>
														Nullam quis risus eget urna mollis ornare ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>3:15 pm</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#">
												<img src="/static/avatars/avatar2.png" class="msg-photo" alt="Kate's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Kate:</span>
														Ciao sociis natoque eget urna mollis ornare ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>1:33 pm</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#">
												<img src="/static/avatars/avatar5.png" class="msg-photo" alt="Fred's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Fred:</span>
														Vestibulum id penatibus et auctor  ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>10:09 am</span>
													</span>
												</span>
											</a>
										</li>
									</ul>
								</li>

								<li class="dropdown-footer">
									<a href="inbox.html">
										See all messages
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<!-- #section:basics/navbar.user_menu -->
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="/static/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									Jason
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="profile.html">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="#">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>

						<!-- /section:basics/navbar.user_menu -->
					</ul>
				</div>

				<!-- /section:basics/navbar.dropdown -->
			</div><!-- /.navbar-container -->
		</div>

		<!-- /section:basics/navbar.layout -->
		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<!-- #section:basics/sidebar -->
			<div id="sidebar" class="sidebar responsive">
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<!-- #section:basics/sidebar.layout.shortcuts -->
						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>

						<!-- /section:basics/sidebar.layout.shortcuts -->
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<!-- 点击左侧菜单，在右侧生成tab导航栏，动态生成iframe,左侧点击菜单需要配置 class="J_menuItem" data-index="0" href="form_basic.html"，其中data-index是标识索引，用来对应删除iframe -->
				<ul class="nav nav-list">

					<li class="hsub">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text">用户管理</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a class="J_menuItem" data-index="20" href="/index.php?r=user/index">
									<i class="menu-icon fa fa-caret-right"></i>
									用户列表
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a class="J_menuItem" data-index="21" href="/index.php?r=demo/approval">
									<i class="menu-icon fa fa-caret-right"></i>
									用户导入
								</a>

								<b class="arrow"></b>
							</li>

						</ul>
					</li>

					<li class="hsub">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text">工作流管理</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a class="J_menuItem" data-index="30" href="/index.php?r=workflow-set/index">
									<i class="menu-icon fa fa-caret-right"></i>
									流程列表
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a class="J_menuItem" data-index="31" href="/index.php?r=workflow-set/flow-category">
									<i class="menu-icon fa fa-caret-right"></i>
									流程分类列表
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a class="J_menuItem" data-index="32" href="http://www.zi-han.net/theme/hplus/form_advanced.html">
									<i class="menu-icon fa fa-caret-right"></i>
									表格
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="hsub">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text">表单管理</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a class="J_menuItem" data-index="40" href="/index.php?r=demo/form">
									<i class="menu-icon fa fa-caret-right"></i>
									表单列表
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a class="J_menuItem" data-index="41" href="/index.php?r=demo/approval">
									<i class="menu-icon fa fa-caret-right"></i>
									流程分类列表
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a class="J_menuItem" data-index="42" href="http://www.zi-han.net/theme/hplus/form_advanced.html">
									<i class="menu-icon fa fa-caret-right"></i>
									表格
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="hsub">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text">工作流</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a class="J_menuItem" data-index="50" href="/index.php?r=demo/form">
									<i class="menu-icon fa fa-caret-right"></i>
									新建工作
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a class="J_menuItem" data-index="51" href="/index.php?r=demo/approval">
									<i class="menu-icon fa fa-caret-right"></i>
									我的工作
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a class="J_menuItem" data-index="52" href="http://www.zi-han.net/theme/hplus/form_advanced.html">
									<i class="menu-icon fa fa-caret-right"></i>
									工作查询
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a class="J_menuItem" data-index="53" href="http://www.zi-han.net/theme/hplus/form_advanced.html">
									<i class="menu-icon fa fa-caret-right"></i>
									工作委托
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a class="J_menuItem" data-index="53" href="http://www.zi-han.net/theme/hplus/form_advanced.html">
									<i class="menu-icon fa fa-caret-right"></i>
									流程日志查询
								</a>

								<b class="arrow"></b>
							</li>

							<li class="hsub">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>
									文件上传
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<li class="">
										<a class="J_menuItem" data-index="3" href="top-menu.html">
											<i class="menu-icon fa fa-caret-right"></i>
											百度WebUploader
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a class="J_menuItem" data-index="4" href="mobile-menu-1.html">
											<i class="menu-icon fa fa-caret-right"></i>
											DropzoneJS
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a class="J_menuItem" data-index="5" href="mobile-menu-2.html">
											<i class="menu-icon fa fa-caret-right"></i>
											头像裁剪上传
										</a>

										<b class="arrow"></b>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="hsub">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text">授权管理</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="hsub">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>
									角色管理
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<li class="">
										<a class="J_menuItem" data-index="60" href="top-menu.html">
											<i class="menu-icon fa fa-caret-right"></i>
											用户列表
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a class="J_menuItem" data-index="61" href="<?=Url::to(['role/index'])?>">
											<i class="menu-icon fa fa-caret-right"></i>
											角色列表
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a class="J_menuItem" data-index="62" href="<?=Url::to(['role/create'])?>">
											<i class="menu-icon fa fa-caret-right"></i>
											添加角色
										</a>

										<b class="arrow"></b>
									</li>
								</ul>
							</li>

							<li class="hsub">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>
									权限管理
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<li class="">
										<a class="J_menuItem" data-index="60" href="<?=Url::to(['permission/index'])?>">
											<i class="menu-icon fa fa-caret-right"></i>
											权限列表
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a class="J_menuItem" data-index="62" href="<?=Url::to(['permission/create'])?>">
											<i class="menu-icon fa fa-caret-right"></i>
											添加权限
										</a>

										<b class="arrow"></b>
									</li>
								</ul>
							</li>


						</ul>
					</li>

					<li class="hsub">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text">样式模板</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a class="J_menuItem" data-index="0" href="/index.php?r=demo/form">
									<i class="menu-icon fa fa-caret-right"></i>
									基本表单
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a class="J_menuItem" data-index="1" href="/index.php?r=demo/approval">
									<i class="menu-icon fa fa-caret-right"></i>
									审批表单
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a class="J_menuItem" data-index="2" href="/index.php?r=demo/table">
									<i class="menu-icon fa fa-caret-right"></i>
									表格
								</a>

								<b class="arrow"></b>
							</li>

							<li class="hsub">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>
									文件上传
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<li class="">
										<a class="J_menuItem" data-index="3" href="top-menu.html">
											<i class="menu-icon fa fa-caret-right"></i>
											百度WebUploader
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a class="J_menuItem" data-index="4" href="mobile-menu-1.html">
											<i class="menu-icon fa fa-caret-right"></i>
											DropzoneJS
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a class="J_menuItem" data-index="5" href="mobile-menu-2.html">
											<i class="menu-icon fa fa-caret-right"></i>
											头像裁剪上传
										</a>

										<b class="arrow"></b>
									</li>
								</ul>
							</li>
						</ul>
					</li>

					<li class="hsub">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text"> Forms </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a class="J_menuItem" data-index="6" href="http://www.zi-han.net/theme/hplus/mailbox.html">
									<i class="menu-icon fa fa-caret-right"></i>
									基本表单
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a class="J_menuItem" data-index="7" href="http://www.zi-han.net/theme/hplus/mail_detail.html">
									<i class="menu-icon fa fa-caret-right"></i>
									高级插件
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a class="J_menuItem" data-index="8" href="http://www.zi-han.net/theme/hplus/form_advanced.html">
									<i class="menu-icon fa fa-caret-right"></i>
									表单向导
								</a>

								<b class="arrow"></b>
							</li>

							<li class="hsub">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>
									文件上传
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<li class="">
										<a class="J_menuItem" data-index="9" href="http://www.zi-han.net/theme/hplus/mail_compose.html">
											<i class="menu-icon fa fa-caret-right"></i>
											百度WebUploader
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a class="J_menuItem" data-index="10" href="http://www.zi-han.net/theme/hplus/contacts.html">
											<i class="menu-icon fa fa-caret-right"></i>
											DropzoneJS
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a class="J_menuItem" data-index="11" href="http://www.zi-han.net/theme/hplus/profile.html">
											<i class="menu-icon fa fa-caret-right"></i>
											头像裁剪上传
										</a>

										<b class="arrow"></b>
									</li>
								</ul>
							</li>
						</ul>
					</li>

					<li class="hsub">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-caret-right"></i>
							<span class="menu-text">文件上传</span>	
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a class="J_menuItem" data-index="12" href="http://www.zi-han.net/theme/hplus/projects.html">
									<i class="menu-icon fa fa-caret-right"></i>
									百度WebUploader
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a class="J_menuItem" data-index="13" href="http://www.zi-han.net/theme/hplus/project_detail.html">
									<i class="menu-icon fa fa-caret-right"></i>
									DropzoneJS
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a class="J_menuItem" data-index="14" href="http://www.zi-han.net/theme/hplus/teams_board.html">
									<i class="menu-icon fa fa-caret-right"></i>
									头像裁剪上传
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a class="J_menuItem" data-index="14" href="http://www.zi-han.net/theme/hplus/social_feed.html">
									<i class="menu-icon fa fa-caret-right"></i>
									头像裁剪上传
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a class="J_menuItem" data-index="14" href="http://www.zi-han.net/theme/hplus/clients.html">
									<i class="menu-icon fa fa-caret-right"></i>
									头像裁剪上传
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a class="J_menuItem" data-index="14" href="http://www.zi-han.net/theme/hplus/file_manager.html">
									<i class="menu-icon fa fa-caret-right"></i>
									头像裁剪上传
								</a>

								<b class="arrow"></b>
							</li>

						</ul>
					</li>
				</ul><!-- /.nav-list -->


				<!-- #section:basics/sidebar.layout.minimize -->
				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>

				<!-- /section:basics/sidebar.layout.minimize -->
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
				</script>
			</div>

			<!-- /section:basics/sidebar -->
			<div class="main-content">
				<!-- #section:basics/content.breadcrumbs -->
				<div class="page-wrapper">
					<div class="row content-tabs">
		                <button class="roll-nav roll-left J_tabLeft"><i class="fa fa-backward"></i>
		                </button>
		                <div class="page-tabs J_menuTabs">
		                    <div class="page-tabs-content">
		                        <a href="javascript:;" class="active J_menuTab" data-id="index_v1.html">首页</a>
		                        <!-- <a href="javascript:;" class="active hover" data-id="">布局 <i class="fa fa-times-circle"></i></a>
		                        <a href="javascript:;" class="hover" data-id="">布局 <i class="fa fa-times-circle"></i></a>
		                        <a href="javascript:;" class="" data-id="">布局 <i class="fa fa-times-circle"></i></a>
		                        <a href="javascript:;" class="" data-id="">布局 <i class="fa fa-times-circle"></i></a> -->
		                    </div>
		                </div>
		                <button class="roll-nav roll-right J_tabRight"><i class="fa fa-forward"></i>
		                </button>
		                <div class="btn-group roll-nav roll-right">
		                    <button class="dropdown" data-toggle="dropdown">关闭操作<span class="caret"></span>

		                    </button>
		                    <ul role="menu" class="dropdown-menu dropdown-menu-right">
		                        <li class="J_tabShowActive"><a>定位当前选项卡</a>
		                        </li>
		                        <li class="divider"></li>
		                        <li class="J_tabCloseAll"><a>关闭全部选项卡</a>
		                        </li>
		                        <li class="J_tabCloseOther"><a>关闭其他选项卡</a>
		                        </li>
		                    </ul>
		                </div>
		            </div>

		            <div class="J_mainContent" id="content-main">
		                <iframe class="J_iframe" name="iframe0" width="100%" height="100%" src="/index.php?r=welcome/index" frameborder="0" data-id="index_v1.html" seamless></iframe>
		            </div>

		            <div class="footer">
						<p>Ace Application © 2013-2014</p>
					</div>

					<div class="ace-settings-container" id="ace-settings-container">
						<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
							<i class="ace-icon fa fa-cog bigger-150"></i>
						</div>

						<div class="ace-settings-box clearfix" id="ace-settings-box">
							<div class="pull-left width-50">
								<!-- #section:settings.skins -->
								<div class="ace-settings-item">
									<div class="pull-left">
										<select id="skin-colorpicker" class="hide">
											<option data-skin="no-skin" value="#438EB9">#438EB9</option>
											<option data-skin="skin-1" value="#222A2D">#222A2D</option>
											<option data-skin="skin-2" value="#C6487E">#C6487E</option>
											<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
										</select>
									</div>
									<span>&nbsp; Choose Skin</span>
								</div>

								<!-- /section:settings.skins -->

								<!-- #section:settings.navbar -->
								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
									<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
								</div>

								<!-- /section:settings.navbar -->

								<!-- #section:settings.sidebar -->
								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
									<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
								</div>

								<!-- /section:settings.sidebar -->

								<!-- #section:settings.breadcrumbs -->
								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
									<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
								</div>

								<!-- /section:settings.breadcrumbs -->

								<!-- #section:settings.rtl -->
								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
									<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
								</div>

								<!-- /section:settings.rtl -->

								<!-- #section:settings.container -->
								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
									<label class="lbl" for="ace-settings-add-container">
										Inside
										<b>.container</b>
									</label>
								</div>

								<!-- /section:settings.container -->
							</div><!-- /.pull-left -->

							<div class="pull-left width-50">
								<!-- #section:basics/sidebar.options -->
								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" />
									<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" />
									<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" />
									<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
								</div>

								<!-- /section:basics/sidebar.options -->
							</div><!-- /.pull-left -->
						</div><!-- /.ace-settings-box -->
					</div><!-- /.ace-settings-container -->

					<!-- /.breadcrumb -->

				</div>

				<!-- /section:basics/content.breadcrumbs -->
			</div><!-- /.main-content -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!--mini聊天窗口开始-->
		<div class="small-chat-box fadeInRight animated active">
            <div class="heading" draggable="true">
                <small class="chat-date pull-right">
                    2015.9.1
                </small> 与 Beau-zihan 聊天中
            </div>

            <div class="some-content-related-div">
				<div id="inner-content-div" class="content">
					<div class="left">
	                    <div class="author-name">Beau-zihan <small class="chat-date">10:02</small></div>
	                    <div class="chat-message active">你好</div>
	                </div>

	                <div class="right">
	                    <div class="author-name">游客 <small class="chat-date">11:24</small></div>
	                    <div class="chat-message">你好，请问H+有帮助文档吗？</div>
	                </div>

	                <div class="left">
	                    <div class="author-name">Beau-zihan <small class="chat-date">08:45</small></div>
	                    <div class="chat-message active">有，购买的H+源码包中有帮助文档，位于docs文件夹下</div>
	                </div>
	                <div class="right">
	                    <div class="author-name">游客 <small class="chat-date">11:24</small></div>
	                    <div class="chat-message">那除了帮助文档还提供什么样的服务？</div>
	                </div>
	                <div class="left">
	                    <div class="author-name">Beau-zihan <small class="chat-date">08:45</small></div>
	                    <div class="chat-message active">
	                        1.所有源码(未压缩、带注释版本)；
	                        <br> 2.说明文档；
	                        <br> 3.终身免费升级服务；
	                        <br> 4.必要的技术支持；
	                        <br> 5.付费二次开发服务；
	                        <br> 6.授权许可；
	                        <br> ……
	                        <br>
	                    </div>
	                </div>
				</div>
			</div>

            <!-- <div class="slimScrollDiv" style="position: relative; width: auto; height: 234px;">
            	<div class="content" style="width: auto; height: 234px;">
            	                <div class="left">
            	                    <div class="author-name">Beau-zihan <small class="chat-date">10:02</small></div>
            	                    <div class="chat-message active">你好</div>
            	                </div>
            
            	                <div class="right">
            	                    <div class="author-name">游客<small class="chat-date">11:24</small></div>
            	                    <div class="chat-message">你好，请问H+有帮助文档吗？</div>
            	                </div>
            
            	                <div class="left">
            	                    <div class="author-name">Beau-zihan<small class="chat-date">08:45</small></div>
            	                    <div class="chat-message active">有，购买的H+源码包中有帮助文档，位于docs文件夹下</div>
            	                </div>
            	                <div class="right">
            	                    <div class="author-name">游客<small class="chat-date">11:24</small></div>
            	                    <div class="chat-message">那除了帮助文档还提供什么样的服务？</div>
            	                </div>
            	                <div class="left">
            	                    <div class="author-name">Beau-zihan<small class="chat-date">08:45</small></div>
            	                    <div class="chat-message active">
            	                        1.所有源码(未压缩、带注释版本)；
            	                        <br> 2.说明文档；
            	                        <br> 3.终身免费升级服务；
            	                        <br> 4.必要的技术支持；
            	                        <br> 5.付费二次开发服务；
            	                        <br> 6.授权许可；
            	                        <br> ……
            	                        <br>
            	                    </div>
            	                </div>
            	</div>
            	        </div> -->

            <div class="form-chat">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control"> 
                    <span class="input-group-btn"> 
                    	<button class="btn btn-primary" type="button">发送</button> 
                    </span>
                </div>
            </div>

        </div>

        <div id="small-chat">
            <span class="badge badge-warning pull-right">5</span>
            <a class="open-small-chat">
                <i class="fa fa-remove"></i>
            </a>
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

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->
		<script src="/static/js/ace-elements.min.js"></script>
		<script src="/static/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<link rel="stylesheet" href="/static/css/ace.onpage-help.css" />
		<!-- design -->
		<link rel="stylesheet" href="/static/css/design.css" />
		<link rel="stylesheet" href="/static/css/custom-skin.css" />
		<link rel="stylesheet" href="/static/css/animate.min.css" />
		<!-- design end -->

		
		<script src="/static/js/new_land.js"></script>
		<script src="/static/js/contab.js"></script>
	    <script src="/static/js/jquery.slimscroll.min.js"></script>

	</body>
</html>
