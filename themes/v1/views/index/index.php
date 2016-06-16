<?php
/**
 * User: Yuan
 * Date: 2016-6-5
 * Time: 12:33:12
 */

 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/bootstrap-responsive.css" );
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/font-awesome.css" );
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/style-metro.css" );
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/style.css" );
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/style1.css" );
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/grey.css" );
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/uniform.css" );
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/jquery.css" );
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/daterangepicker.css" );
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/fullcalendar.css" );
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/jquery_002.css" );
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/news.css" );
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/glyphicons.css" );
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/halflings.css" );
$this->pageTitle = '我的账户';
?>
<section class="content-header">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
	 <meta content="" name="description">
	 <meta content="" name="author">
	 <!-- BEGIN GLOBAL MANDATORY STYLES -->
 <style type="text/css">

 .big-btn-box .big-btn-box-a {width:32%;float:left;margin-right:2%;}
 .big-btn-box .big-btn-box-b {width:32%;float:right;}
 .big-btn-box .big-btn-box-c {width:32%;float:left;}
 .tongdao1 {
	 position: relative;
	 background: #4E8DF5;
	 padding: 10px;
	 border: 1px solid #417DE0;
 }
 @media  (max-width:736px) {
	 .big-btn-box .big-btn-box-a {width:100%;}
	 .big-btn-box .big-btn-box-b {width:100%;}
	 .big-btn-box .big-btn-box-c {width:100%;margin-top:10px;}
 }
 </style>
 </head>
 <!-- END HEAD -->

 <!-- BEGIN BODY -->
 <body class="page-header-fixed ">
	 <script>
	function makesure()
	{
		return(confirm("此操作将取消挂单，门票不予退还，你确定取消吗？"))
	}
 </script>
 <link rel="shortcut icon" href="" type="image/x-icon">
 <style type="text/css">
 .portlet {clear:none;}
 .portlet_a {width:49%;float:left;}
 .portlet_b {width:49%;float:right;}
 .flip-content .tit {font-weight:bold;text-align:center;}
 .list-notice {padding:1px 5px;}
 .table-condensed th, .table-condensed td {padding:6px 5px 5px}
 .tg-link {line-height:30px;background:#f9f9f9;border:1px solid #ddd;border-top:0;}

 .peidui_btn_div {padding:0px 20px;}

 @media (max-width: 767px) {
	 .portlet_a {width:100%;float:none;clear:both;}
	 .portlet_b {width:100%;float:none;}
 }

 @media (max-width: 778px) {
	  .donations-forward {display:none;}
	  .donations-date {width:35%;height:40px;}
	  .donations-status {width:20%;height:40px;}
	  .donations-number {width:45%;height:40px;font-size:12px;}
	  .donations-number span {font-size:12px;}
	  .donations-num {font-size:12px;width:30%;text-align:center;}
	  .donations-num span {font-size:14px;}
	  .donations-num span.rmbflag {display:none;}
	  .donations-pay {display:none;width:21%;font-size:12px;}
	  .donations-get {width:30%;font-size:12px;}
	  .donations-detail {width:40%;}
	  .portlet.box .pd-wrap {padding:5px;}
	  .transaction-details {padding:5px;}
	  .transaction-details table td {padding:3px 3px;}
  }
 </style>

		 <div class="page-content">
			 <!-- BEGIN PAGE CONTAINER-->
			 <div class="container-fluid">
				 <!-- BEGIN PAGE HEADER-->
				 <div class="row-fluid">
					 <div class="span12">
						 <h3 class="page-title"> 我的主页 <small>My Homepage</small> </h3>
						 <ul class="breadcrumb">
							 <li> <i class="icon-home"></i> <a href="http://127.0.0.1/www/index">Home</a> <i class="icon-angle-right"></i> </li>
							 <li><a href="http://127.0.0.1/www/index">我的主页</a></li>
						 </ul>
					 </div>
				 </div>
				 <!-- END PAGE HEADER-->
				 <!-- BEGIN ACCOUNT INFO-->
				 <div class="row-fluid">
					 <div class="span12">
						 <div class="first_div">
							 <div class="portlet box grey portlet_a" style="">
								 <div class="portlet-title">

									 <div class="caption"><i class="icon-user"></i>我的帳戶 My account </div>
									 <div class="tools"> <a href="javascript:;" class="collapse"></a></div>
								 </div>
																 <div class="portlet-body">
									 <table class="table-bordered table-striped table-condensed flip-content" width="100%">
										 <thead class="flip-content">
											 <tr>
												 <td class="tit" width="21%">账户编号</td>
												 <td style="text-align:center;" width="29%">
												   <!-- <a href="<?php //echo Yii::app()->createUrl('user/info');?>"> -->
												   <?php echo $userinfo['ui_account_number']; ?>
												 <!-- </a> -->
												 </td>
												 <td class="tit" width="21%">账户昵称</td>
												 <td style="text-align:center;" width="29%"><span id="AccountNickName"><?php echo Yii::app ()->name;  ?></span> <!--<i class="icon-refresh" id="todo" style="color:red;"></i>--></td>
											 </tr>
										 </thead>
										 <tbody>
											 <tr>
												 <td class="tit">信用评级</td>
												 <td class="text-center">
													 <img src="<?php echo Yii::app ()->theme->baseUrl . "/images/x.gif" ;?>" height="12" width="14">
													 <img src="<?php echo Yii::app ()->theme->baseUrl . "/images/x.gif" ;?>" height="12" width="14">
													 <img src="<?php echo Yii::app ()->theme->baseUrl . "/images/x.gif" ;?>" height="12" width="14">
													 <img src="<?php echo Yii::app ()->theme->baseUrl . "/images/x.gif" ;?>" height="12" width="14">
													 <img src="<?php echo Yii::app ()->theme->baseUrl . "/images/x.gif" ;?>" height="12" width="14">
												 </td>
												 <td class="tit">我的级别</td>
												 <td class="text-center"><?php echo $userinfo['ui_my_rank']; ?></td>
											 </tr>
											 <tr>
												 <td class="tit">直推数量</td>
												 <td class="text-center">全部<?php echo $userinfo['ui_recommend_number']; ?> &nbsp;合格<?php echo $userinfo['ui_recommend_number']; ?></td>
												 <td class="tit">团队数量</td>
												 <td class="text-center">全部<?php echo $userinfo['ui_team_number']; ?> &nbsp;合格<?php echo $userinfo['ui_team_number']; ?></td>
											 </tr>

											 <tr>
												 <td class="tit">静态余额</td>
												 <td class="text-center"><span style="color:green;"><i class="icon-money"></i></span> <?php echo $userinfo['ui_static_balance']; ?></td>
												 <td class="tit">动态余额</td>
												 <td class="text-center"><span style="color:green;"><i class="icon-money"></i></span> <?php echo $userinfo['ui_dynamic_balance']; ?></td>
											 </tr>
											 <tr>
												 <td class="tit">门票余额</td>
												 <td class="text-center"><span style="color:green;"><i class="icon-money"></i></span> <?php echo $userinfo['ui_ticket_balance']; ?> <a href="#">充值</a></td>
												 <td class="tit">冻结数额</td>
												 <td class="text-center"><span style="color:green;"><i class="icon-money"></i></span> <?php echo $userinfo['ui_blocked_balances']; ?></td>
											 </tr>

										 </tbody>
									 </table>

									 <div class="tg-link text-center"><b>推广链接：<a href="127.0.0.1/www/" target="_blank">127.0.0.1/www/</a></b></div>
								 </div>
							 </div>
							 <div class="portlet box grey portlet_b" style="">
								 <div class="portlet-title">
									 <div class="caption"><i class="icon-user"></i>网站公告 Notice </div>
									 <div class="tools"> <a href="javascript:;" class="collapse"></a></div>
								 </div>
								 <div class="portlet-body">
								 <ul class="list-notice">
										<?php  foreach($gonggao as $k =>$v){ ?>
										 <li>
											 <span><?php $v['rq'] ?></span>
											 <a href=""><i class="icon-file-alt"></i> <?php echo $v['gonggao'] ?></a>
										 </li>
										<?php }?>
									 </ul>
								 </div>
							 </div>
						 </div>
					 </div>
				 </div>
				 <!-- END ACCOUNT INFO-->

				 <!--舍得按钮-->
				 <div class="row-fluid">
                    <div class="span12">
                        <div class="portlet big-btn-box">
                            <div class="big-btn-box-a">
                                <a class="btn red btn-bigbig" id="pdBtn" href="mpackage_buy.php"><i class="icon-cloud-upload"></i> 买入M包</a>
                            </div>
                            <div class="big-btn-box-c">
                                <a class="btn blue btn-bigbig" id="pdBtn" href="mpackage_buy_vip.php"><i class="icon-cloud-upload"></i> 财富通道</a>
                            </div>
                            <div class="big-btn-box-b">
                                <a class="btn green btn-bigbig" id="gdBtn" href="mpackage_sell.php"><i class="icon-cloud-download"></i> 卖出M包</a>
                            </div>
                        </div>
                    </div>
                </div>
<?php if(1==1){?>
<!--舍列表-->
<div class="row-fluid">
    <div class="span12">

        <div class="portlet box grey">
            <div class="portlet-title">
                <div class="caption"><i class="icon-cloud-upload"></i>买入的M包</div>
                <div class="tools"> <a href="javascript:;" class="collapse"></a></div>
            </div>
            <div class="portlet-body pd-wrap">
                <div class="table-pd tongdao0">
                    <div class="donate-header clearfix">
                        <i title="" data-original-title="" class="icon-reorder hireTable" rel="S003044127" value="pd" data-toggle="tooltip" data-placement="top" align="right"></i>
                            <h4>提供帮助编号：<span>S003044127</span></h4>
                                <ul class="div_list">
                                    <li>参加者：M04535811</li>
                                    <li>提供帮助数额：RMB 2000.00</li>
                                    <li>排队日期：2016-05-29 11:39:59</li>
                                    <li>当前状态：<span class="pending"><font color="black">等待匹配</font>  <a href="http://cn.mmobar.com/home/index.php?action=cancelshe&amp;sheid=6184963" onclick="return makesure();"><font color="yellow">取消挂单</font></a></span>
                                    </li>
                                    <li>预计匹配时间：2016-06-08至2016-06-15之间</li>
                                <!--
                                <li>剩余数额: RMB0.00</li>
                                <li>回酬分布剩余时间: 剩余0天</li>-->
                                </ul>
                    </div>


                    <div class="pd donate-body-S003044127">
                        <div class="">
                        </div>
                    </div>
                </div>

                <div class="table-pd tongdao0">

                    <div class="pd donate-body-S004474514">
                        <div class="">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<?php if(1==1){?>
				 <!--得列表-->
<div class="row-fluid">
    <div class="span12">
        <div class="portlet box grey">
            <div class="portlet-title">
                <div class="caption"><i class="icon-cloud-download"></i>卖出的M包</div>
                <div class="tools"> <a href="javascript:;" class="collapse"></a></div>
            </div>
            <div class="portlet-body pd-wrap">
                <div class="table-pd tongdao1">
                    <div class="donate-header clearfix">
                        <i title="" data-original-title="" class="icon-reorder hireTable" rel="S003044127" value="pd" data-toggle="tooltip" data-placement="top" align="right">
                        </i>
                        <h4>提供帮助编号：<span>S003044127</span></h4>
                        <ul class="div_list">
                            <li>参加者：M04535811</li>
                            <li>提供帮助数额：RMB 2000.00</li>
                            <li>排队日期：2016-05-29 11:39:59</li>
                            <li>当前状态：<span class="pending"><font color="black">等待匹配</font>  <a href="http://cn.mmobar.com/home/index.php?action=cancelshe&amp;sheid=6184963" onclick="return makesure();"><font color="yellow">取消挂单</font></a></span>
                            </li>
                            <li>预计匹配时间：2016-06-08至2016-06-15之间</li>
                        <!--
                        <li>剩余数额: RMB0.00</li>
                        <li>回酬分布剩余时间: 剩余0天</li>-->
                        </ul>
                    </div>


                    <div class="pd donate-body-S003044127">
                        <div class="">
                        </div>
                    </div>
                </div>

                <div class="table-pd tongdao1">

                    <div class="pd donate-body-S004474514">
                        <div class="">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>


				 <!-- BEGIN IMPORTANT NOTICE-->
				 <!--<div class="row-fluid">
					 <div class="span12">
								 <div class="span3">
									 <div class="news-blocks"  style="height:400px; overflow: hidden;">
										 <h4><i class="icon-globe"></i> <a href="view.php?sid=5955">搶購金幣功能補充公告</a></h4>
										 <div class="news-block-tags"><i class="icon-tags"></i> <strong>ACWEALTH.NET</strong> <i class="icon-calendar"></i>
											 <em>2015-08-08</em>
											 </div>

									 </div>
								 </div>
								 <div class="span3">
									 <div class="news-blocks"  style="height:400px; overflow: hidden;">
										 <h4><i class="icon-globe"></i> <a href="view.php?sid=5954">複投規則公告</a></h4>
										 <div class="news-block-tags"><i class="icon-tags"></i> <strong>ACWEALTH.NET</strong> <i class="icon-calendar"></i>
											 <em>2015-06-07</em>
											 </div>

									 </div>
								 </div>
					 </div>
				 </div>-->
				 <!-- END IMPORTANT NOTICE-->

			 </div>
		 </div>
		 <!-- END PAGE CONTAINER-->


	  </div>
		 <!-- END PAGE -->

		 <!-- END CONTAINER -->
		 <!-- BEGIN FOOTER -->
		 <div class="footer">
			 <div class="footer-inner"> 2015 © MMoBar.com </div>
			 <div class="footer-tools"> <span class="go-top"> <i class="icon-angle-up"></i> </span> </div>
		 </div>
		 <!-- END FOOTER -->

		 <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
		 <!-- BEGIN CORE PLUGINS -->
		 <!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
		 <?php
		  Yii::app ()->clientScript->registerScriptFile ( Yii::app ()->theme->baseUrl . "/public/js/jquery-1.js", CClientScript::POS_END );
		  Yii::app ()->clientScript->registerScriptFile ( Yii::app ()->theme->baseUrl . "/public/js/jquery-migrate-1.js", CClientScript::POS_END );
		  Yii::app ()->clientScript->registerScriptFile ( Yii::app ()->theme->baseUrl . "/public/js/jquery-ui-1.js", CClientScript::POS_END );
		  Yii::app ()->clientScript->registerScriptFile ( Yii::app ()->theme->baseUrl . "/public/js/bootstrap.js", CClientScript::POS_END );
		  Yii::app ()->clientScript->registerScriptFile ( Yii::app ()->theme->baseUrl . "/public/js/jquery_003.js", CClientScript::POS_END );
		  Yii::app ()->clientScript->registerScriptFile ( Yii::app ()->theme->baseUrl . "/public/js/jquery.js", CClientScript::POS_END );
		  Yii::app ()->clientScript->registerScriptFile ( Yii::app ()->theme->baseUrl . "/public/js/jquery_002.js", CClientScript::POS_END );
		  ?>



		 <!--[if lt IE 9]>
		 <script src="media/js/excanvas.min.js"></script>
		 <script src="media/js/respond.min.js"></script>
		 <![endif]-->

		 <!-- END CORE PLUGINS -->


		 <!-- BEGIN PAGE LEVEL SCRIPTS -->
		 <?php
		  Yii::app ()->clientScript->registerScriptFile ( Yii::app ()->theme->baseUrl . "/public/js/app.js", CClientScript::POS_END );
		 ?>
		 <!-- END PAGE LEVEL SCRIPTS -->
		 <script>
			 jQuery(document).ready(function () {
				 App.init(); // initlayout and core plugins
				 //Index.init();
				 //            alert("系統試運行階段，請及時設置密碼保護答案，確保帳戶安全。如有錯誤，請及時留言至公司。");
				 //            Index.initJQVMAP(); // init index page's custom scripts
				 //            Index.initCalendar(); // init index page's custom scripts
				 //            Index.initCharts(); // init index page's custom scripts
				 //            Index.initChat();
				 //            Index.initMiniCharts();
				 //            Index.initDashboardDaterange();
				 //            Index.initIntro();
			 });
		 </script>
		 <script>

			 var OriginalHtml = $('#AccountNickName').html();

			 $('#todo').click(function () {
				 $('#AccountNickName').html("<input name='newnickname' type='text' id='newnickname' value='" + OriginalHtml + "' style='width:80px;' maxlength=10>");
				 $('#newnickname').focus();
				 $('#newnickname').blur(function () {
					 if ($('#newnickname').val() != '') {
						 $.ajax({
							 url: "ajax/ajax_RenewNickName.php",
							 dataType: "html",
							 data: {nickname: $('#newnickname').val(), timestamp: Math.random()},
							 success: function (strValue) {
								 if (strValue == 0) {
									 window.location = 'index.php';
								 } else {
									 alert(strValue);
								 }
							 }
						 })
					 } else {
						 $('#newnickname').focus();
						 //alert('請輸入一個昵稱');
					 }
					 ;
				 });
			 });
		 </script>
		 <!-- END JAVASCRIPTS -->
		 <?php
		 Yii::app ()->clientScript->registerScriptFile ( Yii::app ()->theme->baseUrl . "/public/js/remaining.js", CClientScript::POS_END );
		  ?>
		 <script type="text/javascript">

 var _gNow = new Date();
 jQuery(document).ready(function($){
	var _allsecs = new Array();
	var _allsecs2 = new Array();
	var _i18n = {
		weeks: ['星期', '星期'],
		days: ['天', '天'],
		hours: ['小时', '小时'],
		minutes: ['分', '分'],
		seconds: ['秒', '秒']
	};
	$('.approve_remaining_time').each(function(){
		var _rid = $(this).attr('id');
		var _seconds = parseInt($(this).attr('rel'));
		if(_seconds > 0){
			$(this).html(
				remaining.getString(_seconds, _i18n, false)
			);
		}
		else{
			$(this).html('剩余0天');
		}
		_allsecs[_rid] = _seconds;
		_allsecs2[_rid] = _seconds;
	});

	timer = setInterval(function(){
		var now = new Date();
		 //alert('ok');
		true_elapsed = Math.round((now.getTime() - _gNow.getTime()) / 1000);
		 $('.approve_remaining_time').each(function(){
			var _rid = $(this).attr('id');
			_seconds = _allsecs[_rid];
			//synchronize
			_diff_sec = _allsecs2[_rid] - _seconds;
			if(_diff_sec < true_elapsed){
				_seconds = _allsecs2[_rid] - true_elapsed;
			}
			if(_seconds > 0){
				$(this).html(
					remaining.getString(_seconds, _i18n, false)
				);
				_allsecs[_rid] = --_seconds;
			}
			else{
				$("#too_many_user").hide();
				$("#login_btn").removeAttr("disabled");
				$(this).html('剩余0天');
			}
		});
	}, 1000);
 });
 </script>
 <script type="text/javascript">
 jQuery(document).ready(function($){
	var mdid, pdid, gdid, amount, status;

	$('[data-toggle="tooltip"]').tooltip({
		container : 'body',
	});

	$('.hireTable').click(function(){
		$('.'+$(this).attr('value')+'.donate-body-'+$(this).attr('rel')).slideToggle('normal');
	});

	$('.transactionWrap').hide();
	$('.btn-details').click(function () {
		$(this).parents('.table-donations').siblings('.transactionWrap').stop(true, false).slideUp('normal');
		$(this).parents('.table-donations').next().stop(true, false).slideToggle('normal');
		return false;
	});
 });
 </script>


 <style>
 #layer-img.layer-img-enter, #layer-img.layer-img-leave {
	 will-change: tramsform;
 }
 #layer-img {
	 position: fixed;
	 top: 0;
	 left: 0;
	 width:800px;
	 height:600px;
	 z-index: 999999;
 }
 #layer-img .mask-screen {
	 display: block;
 }
 #msgbox-mask, .mask-screen {
	 display: none;
	 position: fixed;
	 top: 0px;
	 left: 0px;
	 width: 100%;
	 height: 100%;
	 background-color: #000;
	 filter: alpha(opacity=50);
	 opacity: .5;
	 z-index: 256;
 }
 @-webkit-keyframes activity1212-enter {
 0% {
 -webkit-transform:translateX(150%) skewX(0);
 transform:translateX(150%) skewX(0)
 }
 50% {
 -webkit-transform:translateX(0) skewX(0);
 transform:translateX(0) skewX(0)
 }
 55% {
 -webkit-transform:translateX(0) skewX(4deg);
 transform:translateX(0) skewX(4deg)
 }
 80% {
 -webkit-transform:translateX(0) skewX(-2deg);
 transform:translateX(0) skewX(-2deg)
 }
 100% {
 -webkit-transform:translateX(0) skewX(0);
 transform:translateX(0) skewX(0)
 }
 }
 @keyframes activity1212-enter {
 0% {
 -webkit-transform:translateX(150%) skewX(0);
 transform:translateX(150%) skewX(0)
 }
 50% {
 -webkit-transform:translateX(0) skewX(0);
 transform:translateX(0) skewX(0)
 }
 55% {
 -webkit-transform:translateX(0) skewX(4deg);
 transform:translateX(0) skewX(4deg)
 }
 80% {
 -webkit-transform:translateX(0) skewX(-2deg);
 transform:translateX(0) skewX(-2deg)
 }
 100% {
 -webkit-transform:translateX(0) skewX(0);
 transform:translateX(0) skewX(0)
 }
 }
 @-webkit-keyframes activity1212-leave {
 0% {
 -webkit-transform:translateX(0) skewX(0);
 transform:translateX(0) skewX(0)
 }
 50% {
 -webkit-transform:translateX(-5%) skewX(0);
 transform:translateX(-5%) skewX(0)
 }
 60% {
 -webkit-transform:translateX(-5%) skewX(-4deg);
 transform:translateX(-5%) skewX(-4deg)
 }
 100% {
 -webkit-transform:translateX(-150%);
 transform:translateX(-150%)
 }
 }
 @keyframes activity1212-leave {
 0% {
 -webkit-transform:translateX(0) skewX(0);
 transform:translateX(0) skewX(0)
 }
 50% {
 -webkit-transform:translateX(-5%) skewX(0);
 transform:translateX(-5%) skewX(0)
 }
 60% {
 -webkit-transform:translateX(-5%) skewX(-4deg);
 transform:translateX(-5%) skewX(-4deg)
 }
 100% {
 -webkit-transform:translateX(-150%);
 transform:translateX(-150%)
 }
 }
 #layer-img.layer-img-enter .inner {
	-webkit-animation:600ms activity1212-enter cubic-bezier(0.68,

 1.13, 0.63, 0.96) forwards;
	animation:600ms activity1212-enter cubic-bezier(0.68, 1.13, 0.63,

 0.96) forwards;
	-webkit-transform-origin:left bottom;
	-ms-transform-origin:left bottom;
	transform-origin:left bottom
 }
 #layer-img.layer-img-leave .inner {
	-webkit-animation:350ms activity1212-leave linear forwards;
	animation:350ms activity1212-leave linear forwards;
	-webkit-transform-origin:left bottom;
	-ms-transform-origin:left bottom;
	transform-origin:left bottom
 }
 a.book-close{cursor:pointer;display: block;width:18px;height:20px;position: absolute;top:10px;right:10px;font: bold 16px/20px simsun; color:#fff;background:#000;border-radius:100% !important;text-align: center;opacity: 0.7;filter: alpha(opacity=70);line-height:20px;padding-left:2px;}
 .inner{position: fixed; top: 50%; left: 50%; z-index: 999999; width:630px; height:400px; margin:-200px 0px 0px -320px;}

 @media only screen and (max-width:736px) {

 .inner{position: fixed; top: 50%; left:2%; z-index: 999999; width:96%; height:none; margin:-100px auto 0px auto;}
 .inner img{width:100%;margin:0}
 }
 </style>
 <script>
 $(function() {
	 GZIDC.form.verify.addRules({
		 domain_query: {
			 reg: function(domain) {
				 return /^[a-zA-Z0-9\u4E00-\u9FA5]([a-zA-Z0-9\u4E00-\u9FA5\-]*)+$/.test(domain);
			 },
			 txt: '请输入正确的域名, 无需输入后缀'
		 }
	 });
	 // x'mas
	 if (GZIDC.date.diff(new Date(), '2015-12-24 00:00:00') <= 0 && GZIDC.date.diff(new Date(), '2015-12-26 00:00:00') >= 0) {
		 GZIDC.dom.loadScript([GZIDC.publicPath + '/Js/front/snow-xmas.min.js'], function() {
			 GZIDC.xmas.snow();
		 });
	 }
	 // 12.12
	 if (GZIDC.date.diff(new Date(), '2015-12-11 00:00:00') <= 0 && GZIDC.date.diff(new Date(), '2015-12-23 00:00:00') >= 0) {
		 setTimeout(function() {
			 GZIDC.ui.imgLayer({
				 imgSrc: '/Public/DemoModule/Images/index/activity/dibai.jpg',
				 url: './cloud.php'
			 });
		 }, 600);
	 }
 })
 function guanbi(){
	var this_img=document.getElementById("layer-img");
	this_img.style.display="none";
 }
 </script>

 <div style="display: none;" id="layer-img" class="layer-img-enter">
   <div class="mask-screen"></div>
   <div class="inner"><a href="#"><img src="<?php echo Yii::app ()->theme->baseUrl . "/images/dibai.jpg" ;?>" alt=""></a><a class="book-close" onclick="guanbi()">×</a></div>
 </div>
</section>


<section class="content-header">

</section>
