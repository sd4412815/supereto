<?php
/* @var $this Controller */
/*$id = Yii::app ()->user->id;
if (! is_int ( ( int ) $id ) || $id <= 0) {
	throw new CHttpException ( 404, '访问页面不存在' );
} else {
	$userModel = User::model ()->findByPk ( $id );
}
if ($userModel === null)
	throw new CHttpException ( 404, '访问页面不存在' );
*/?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<title><?php echo CHtml::encode($this->pageTitle).'-'.Yii::app ()->name; ?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="IE=edge">
<meta name="renderer" content="webkit">
<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
<meta name="Keywords" content="">
<meta name="description" content="">
<link rel="shortcut icon" href="<?php echo Yii::app()->baseUrl;?>/favicon.ico" type="image/x-icon" />
<?php

Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/common/bootstrap-3.3.5-dist/css/bootstrap.min.css" );
Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/common/AdminLTE-2.3.3/css/AdminLTE.css" );
Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/common/AdminLTE-2.3.3/css/skins/_all-skins.min.css" );
Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/common/font-awesome-4.5.0/css/font-awesome.min.css" );
//Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/common/ionicons-2.0.1/css/ionicons.min.css" );

//Yii::app ()->clientScript->registerCoreScript ( 'jquery' );
Yii::app ()->clientScript->registerScriptFile ( Yii::app ()->theme->baseUrl . "/public/js/jquery-1.12.4.min.js", CClientScript::POS_END );
Yii::app ()->clientScript->registerScriptFile ( Yii::app ()->theme->baseUrl . "/public/common/bootstrap-3.3.5-dist/js/bootstrap.min.js", CClientScript::POS_END );
Yii::app ()->clientScript->registerScriptFile ( Yii::app ()->theme->baseUrl . "/public/common/AdminLTE-2.3.3/js/app.min.js", CClientScript::POS_END );
Yii::app ()->clientScript->registerScriptFile ( Yii::app ()->theme->baseUrl . "/public/common/layer-v2.3/layer.js", CClientScript::POS_END );




?>

</head>

<body class="skin-blue sidebar-mini">
<div class="wrapper">
    <header class="main-header">
        <!-- Logo -->
        <!-- <a href="index2.html" class="logo">
            mini logo for sidebar mini 50x50 pixels
            <span class="logo-mini"><b>A</b>LT</span>
            logo for regular state and mobile devices
            <span class="logo-lg"><b>super</b>ETO</span>
        </a> -->
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle text-center">
                            supereto
                        </a>
                    </li>
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 4 messages</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- start message -->
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="<?php echo Yii::app ()->theme->baseUrl  ?>/public/common/AdminLTE-2.3.3/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>
                                                Support Team
                                                <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="<?php echo Yii::app ()->theme->baseUrl  ?>/public/common/AdminLTE-2.3.3/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>
                                                AdminLTE Design Team
                                                <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="<?php echo Yii::app ()->theme->baseUrl  ?>/public/common/AdminLTE-2.3.3/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>
                                                Developers
                                                <small><i class="fa fa-clock-o"></i> Today</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="<?php echo Yii::app ()->theme->baseUrl  ?>/public/common/AdminLTE-2.3.3/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>
                                                Sales Department
                                                <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="<?php echo Yii::app ()->theme->baseUrl  ?>/public/common/AdminLTE-2.3.3/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>
                                                Reviewers
                                                <small><i class="fa fa-clock-o"></i> 2 days</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">See All Messages</a></li>
                        </ul>
                    </li>

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo Yii::app ()->theme->baseUrl?>/public/common/AdminLTE-2.3.3/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs">
                                <?php if(isset(Yii::app()->user->_nickName)){
                                    echo Yii::app()->user->_nickName;
                                }
                                ?>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="<?php echo Yii::app ()->theme->baseUrl?>/public/common/AdminLTE-2.3.3/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                <p>
                                    Alexander Pierce - Web Developer
                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->

		<aside class="main-sidebar">
		    <!-- sidebar: style can be found in sidebar.less -->
		    <section class="sidebar">
		        <!-- Sidebar user panel -->
		        <div class="user-panel">
		            <div class="pull-left image">
		                <img src="<?php echo Yii::app ()->theme->baseUrl  ?>/public/common/AdminLTE-2.3.3/img/user2-160x160.jpg" class="img-circle" alt="User Image">
		            </div>
		            <div class="pull-left info">
		                <p>欢迎 <b style="color: #00a65a;">
                                <?php if(isset(Yii::app()->user->_nickName)){
                                    echo Yii::app()->user->_nickName;
                                }
                                ?>
                            </b>
                        </p>
		                <a href="#"><i class="fa fa-circle text-success"></i> 在线中 <i class="fa fa-tablet"></i> <i class="fa fa-wifi"></i></a>
		            </div>
		        </div>

		        <!-- sidebar menu: : style can be found in sidebar.less -->
		        <ul class="sidebar-menu">
		<!--                <li class="header" style="text-align: center">导 航 栏</li>-->
		            <li class="active treeview">
		                <a href="<?php echo Yii::app()->createUrl('index/index');?>">
		                    <i class="fa fa-home"></i> <span>系统首页</span>
		                </a>
		            </li>
		            <li class="treeview">
		                <a href="#">
		                    <i class="fa fa-shield"></i>
		                    <span>账户管理</span>
		                    <span class="label label-primary pull-right">4</span>
		                </a>
		                <ul class="treeview-menu">
		                    <li><a href="<?php echo Yii::app()->createUrl('user/EditInfo');?>"><i class="fa fa-edit"></i> 修改资料</a></li>
		                    <li><a href="<?php echo Yii::app()->createUrl('user/EditPwd');?>"><i class="fa fa-lock"></i> 变更密码</a></li>
		                </ul>
		            </li>
		            <li>
		                <a href="pages/widgets.html">
		                    <i class="fa fa-user"></i> <span>会员中心</span>
		                    <small class="label pull-right bg-green">new</small>
		                </a>
		                <ul class="treeview-menu">
		                    <li><a href="<?php echo Yii::app()->createUrl('user/register');?>"><i class="fa fa-mail-forward"></i> 新建账户</a></li>
		                    <li><a href="<?php echo Yii::app()->createUrl('user/RecommendList') ?>"><i class="fa fa-magic"></i> 推荐清单</a></li>
		                </ul>
		            </li>
		            <li class="treeview">
		                <a href="#">
		                    <i class="fa fa-dollar"></i>
		                    <span>ETO理财</span>
		                    <i class="fa fa-angle-left pull-right"></i>
		                </a>
		                <ul class="treeview-menu">
		                    <li><a href="<?php echo Yii::app()->createUrl('cft/buy') ?>"><i class="fa fa-reply"></i> 买入ETO包</a></li>
		                    <li><a href="<?php echo Yii::app()->createUrl('cft/sell') ?>"><i class="fa fa-share"></i> 卖出ETO包</a></li>
		                    <li><a href="<?php echo Yii::app()->createUrl('cft/buyLog') ?>"><i class="fa fa-caret-square-o-down"></i> 买入记录</a></li>
		                    <li><a href="<?php echo Yii::app()->createUrl('cft/sellLog') ?>"><i class="fa fa-caret-square-o-up"></i> 卖出记录</a></li>
		                </ul>
		            </li>
		            <li class="treeview">
		                <a href="#">
		                    <i class="fa fa-yen"></i>
		                    <span>财务管理</span>
		                    <i class="fa fa-angle-left pull-right"></i>
		                </a>
		                <ul class="treeview-menu">
		                    <li><a href=""><i class="fa fa-book"></i> 我的账户</a></li>
		                    <li><a href=""><i class="fa fa-exchange"></i> 门票转账</a></li>
		                    <li><a href=""><i class="fa fa-newspaper-o"></i> 佣金清单</a></li>
		                </ul>
		            </li>
		            <li class="treeview">
		                <a href="#">
		                    <i class="fa fa-users"></i> <span>交流中心</span>
		                    <i class="fa fa-angle-left pull-right"></i>
		                </a>
		                <ul class="treeview-menu">
		                    <li><a href=""><i class="fa fa-building-o"></i> 网站公告</a></li>
		                    <li><a href=""><i class="fa fa-calendar-o"></i> 在线工单</a></li>
		                </ul>
		            </li>
		            <li class="treeview">
		                <a href="<?php echo Yii::app()->createUrl('index/logout') ?>">
		                    <i class="fa fa-sign-out"></i> <span>安全退出</span>
		<!--                        <i class="fa fa-angle-left pull-right"></i>-->
		                </a>
		            </li>
		<!--                <li class="header">LABELS</li>-->
		<!--                <li><a href=""><i class="fa fa-circle-o text-red"></i> <span>等待添加</span></a></li>-->
		<!--                <li><a href=""><i class="fa fa-circle-o text-yellow"></i> <span>等待添加</span></a></li>-->
		<!--                <li><a href=""><i class="fa fa-circle-o text-aqua"></i> <span>等待添加</span></a></li>-->
		        </ul>

		    </section>
		    <!-- /.sidebar -->
		</aside>





    <div class="content-wrapper" style="min-height: 916px;">
       	<?php echo $content; ?>
       <!-- Modal -->
    </div>

</div>
</body>

</html>
