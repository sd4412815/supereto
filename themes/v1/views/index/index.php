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
 // Yii::app ()->clientScript->registerScriptFile ( Yii::app ()->theme->baseUrl . "/public/js/jquery.js", CClientScript::POS_END );
$this->pageTitle = '我的账户';
?>
<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="<?php echo Yii::app()->createUrl('index/index') ?>">Home</a>
        <i class="icon-angle-right"></i>
    </li>
    <li>
        <a href="<?php echo Yii::app()->createUrl('index/index') ?>">我的主页</a>
    </li>
</ul>

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
 .xian{
   display: block;
 }
 .yin{
   display: none;
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

 <link rel="shortcut icon" href="" type="image/x-icon">
 <style type="text/css">
 .portlet {clear:none;}
 .portlet_a {width:49%;float:left;}
 .portlet_b {width:49%;float:right;}
 .flip-content .tit {font-weight:bold;text-align:center;}
 .list-notice {padding:1px 5px;}
 .table-condensed th, .table-condensed td {padding:6px 5px 5px}
 .tg-link {line-height:30px;background:#f9f9f9;border:1px solid #ddd;border-top:0;}
 .fl{width:49%;float:left;}
 .fr{width:49%;float:right;}
 .peidui_btn_div {padding:0px 20px;}
 .bgimg{
background-image:url('images/login/login_Middle2.jpg');
background-repeat: repeat;
height:635px;
width:100%;
overflow:hidden;
}
 @media (max-width: 767px) {
	 .portlet_a {width:100%;float:none;clear:both;}
	 .portlet_b {width:100%;float:none;}
   .fl{width:100%;float:none;clear:both;}
   .fr{width:100%;float:none;}
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

								 </div>
							 </div>
							 <div class="portlet box grey portlet_b">
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
				 <div class="row-fluid">
                    <div class="span12">
                        <div class="portlet big-btn-box">
                            <div class="big-btn-box-a" style="width:49%;" >
                                <a class="btn  btn-bigbig" style="background:#BED8F1" id="pdBtn" href="mpackage_buy.php"><i class="icon-cloud-upload"></i> 原石众筹</a>
                            </div>
                            <div class="big-btn-box-b" style="width:49%">
                                <a class="btn yellow btn-bigbig" id="gdBtn" href="mpackage_sell.php"><i class="icon-cloud-download"></i> 公司红利</a>
                            </div>
                        </div>
                    </div>
                </div>
<?php if(!empty($cfttype)){?>
<!--舍列表-->
<div class="row-fluid portlet_c fl" >
    <div class="span12" >

        <div class="portlet box grey" >
            <div class="portlet-title" >
                <div class="caption"><i class="icon-cloud-upload"></i>原石众筹</div>
                <div class="tools"> <a href="javascript:;" class="collapse"></a></div>
            </div>
            <?php foreach ( $cft as $k=>$item) {?>
            <?php foreach ( $cfttype as $k=>$v) {?>
            <?php }?>
            <div class="portlet-body pd-wrap">
                <div class="tongdao0" style="background-image:url(<?php echo Yii::app ()->theme->baseUrl . "/images/image04.png" ;?>); background-repeat:no-repeat;" >
                    <div class="donate-header clearfix">
                            <h4>原石众筹编号：<span><?php echo $item['cp_sn']; ?></span></h4>
                                <ul class="div_list">
                                    <li>参加者：<?php echo $userinfo['ui_account_number']; ?></li>
                                    <li>淘宝号：<?php echo $userinfo['ui_taobao']; ?></li>
                                    <li>众筹金额：<?php echo $v['cpt_name']; ?></li>
                                    <li>排队日期：<?php echo $item['cp_add_time']; ?></li>
                                    <li>当前状态：<span class="pending">
                                    <?php if ((strtotime($item['cp_last_time'])+43200-time())<0) {  ?>
                                    <div id="endd<?php echo $item['id'];?>" style="display:inline">
                                      <font>已到期</font>
                                    </div>
                                    <?php }else{ ?>
                                      <font class="timeout">打款倒计时</font>
                                      <span id="start<?php echo $item['id'];?>" class="yin">
                                        <font  id="s<?php echo $item['id'];?>"></font>小时
                                        <font  id="f<?php echo $item['id'];?>"></font>分
                                        <font  id="m<?php echo $item['id'];?>"></font>秒
                                      </span>
                                      <button id="look" style="width:70px; hight:20px;background:#00a2cd;" type="button" onclick="time<?php echo $item['id'];?>();" name="button">点击查看</button>
                                      <?php }?>
                                      <a href="http://www.taobao.com" style="color:black; border:2px solid #e95466;">去打款</a><a href="" onclick="return makesure();"> <font color="blue" style="border:1px solid blue;">取消挂单</font></a></span>
                                      </li>
                                    <li>预计收款时间：<?php echo substr($item['cp_last_time'],0,10);?> 日 10:00:00--16:00:00之间</li>
                                </ul>
                    </div>
                    <div class="pd donate-body-S003044127">
                        <div class="">
                        </div>
                    </div>
                </div>
                <div class="table-pd tongdao0" style="background:#fff; border:0px;">

                    <div class="pd ">
                        <div class="">

                        </div>
                    </div>
                </div>
            </div>
            <script>
                function time<?php echo $item['id'];?>(){
                  $('#look').addClass('yin');
                  var timestamp = Date.parse(new Date())/1000;
                  // console.log(<?php //echo (strtotime($item['cp_last_time'])+86400);?>);
                  var wait<?php echo $item['id'];?>=<?php echo (strtotime($item['cp_last_time'])+43200);?>-timestamp;
                  if (wait<?php echo $item['id'];?> < 0) {
                      $('#endd<?php echo $item['id'];?>').removeClass('yin');
                  }else{
                      $('#start<?php echo $item['id'];?>').removeClass('yin');
                  }
                  $('#s<?php echo $item['id'];?>').html(parseInt(wait<?php echo $item['id'];?>/3600));
                  $('#f<?php echo $item['id'];?>').html(parseInt(wait<?php echo $item['id'];?>/60%60));
                  $('#m<?php echo $item['id'];?>').html(parseInt(wait<?php echo $item['id'];?>%60));
                    setTimeout(function() {time<?php echo $item['id'];?>()},1000)
                }
            </script>
              <?php }?>

        </div>
    </div>
</div>
<?php }else{
  echo '';
} ?>
<?php if(!empty($cfttype)){?>
				 <!--得列表-->
<div class="row-fluid portlet_d fr"  >
    <div class="span12 portlet_b" >
        <div class="portlet box grey" >
            <div class="portlet-title">
                <div class="caption"><i class="icon-cloud-download"></i>公司红利</div>
                <div class="tools"> <a href="javascript:;" class="collapse"></a></div>
            </div>
            <?php foreach ( $cft as $k=>$item) {?>
            <div class="portlet-body pd-wrap">
                <div class="" style="background-image:url(<?php echo Yii::app ()->theme->baseUrl . "/images/image05.png" ;?>); background-repeat:no-repeat;">
                    <div class="donate-header clearfix">
                        </i>
                        <h4>公司红利编号：<span><?php echo $item['cp_sn']; ?></span></h4>
                            <ul class="div_list">
                                <li>参加者：<?php echo $userinfo['ui_account_number']; ?></li>
                                <li>淘宝号：<?php echo $userinfo['ui_taobao']; ?></li>
                                <li>排队日期：<?php echo $item['cp_add_time']; ?></li>
                                <li>当前状态：<span class="pending"><?php if ((strtotime($item['cp_last_time'])+43200-time())<0) {  ?>
                                <div id="endds<?php echo $item['id'];?>" style="display:inline">
                                  <font>已到期</font>
                                </div>
                                <?php }else{ ?>
                                  <font class="timeout">收款倒计时</font>
                                  <span id="starts<?php echo $item['id'];?>" class="yin">
                                    <font  id="ss<?php echo $item['id'];?>"></font>小时
                                    <font  id="ff<?php echo $item['id'];?>"></font>分
                                    <font  id="mm<?php echo $item['id'];?>"></font>秒
                                  </span>
                                  <button id="looks"style="width:70px; hight:20px;background:#e95466;" type="button" onclick="times<?php echo $item['id'];?>();" name="button">点击查看</button>
                                  <?php }?></li>
                                  <br>
                                  <br>
                            </ul>
                    </div>
                    <div class=" ">
                        <div class="">
                        </div>
                    </div>
                </div>

                <div class="table-pd tongdao1" style="background:#fff;border:0px;">

                    <div class="pd donate-body-S004474514">
                        <div class="">

                        </div>
                    </div>
                </div>
            </div>
            <script>
                function times<?php echo $item['id'];?>(){
                  $('#looks').addClass('yin');
                  var timestamp = Date.parse(new Date())/1000;
                  // console.log(<?php //echo (strtotime($item['cp_last_time'])+86400);?>);
                  var wait<?php echo $item['id'];?>=<?php echo (strtotime($item['cp_last_time'])+43200);?>-timestamp;
                  if (wait<?php echo $item['id'];?> < 0) {
                      $('#endds<?php echo $item['id'];?>').removeClass('yin');
                  }else{
                      $('#starts<?php echo $item['id'];?>').removeClass('yin');
                  }
                  $('#ss<?php echo $item['id'];?>').html(parseInt(wait<?php echo $item['id'];?>/3600));
                  $('#ff<?php echo $item['id'];?>').html(parseInt(wait<?php echo $item['id'];?>/60%60));
                  $('#mm<?php echo $item['id'];?>').html(parseInt(wait<?php echo $item['id'];?>%60));
                    setTimeout(function() {times<?php echo $item['id'];?>()},1000)
                }
            </script>
              <?php } ?>
        </div>
    </div>
</div>
<?php }else{ echo ''; } ?>
	 </div>
 </div>
</div>
		 <div class="footer">
			 <div class="footer-inner"> 2016 © superETO.com </div>
			 <div class="footer-tools"> <span class="go-top"> <i class="icon-angle-up"></i> </span> </div>
		 </div>


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


 <div style="display: none;" id="layer-img" class="layer-img-enter">
   <div class="mask-screen"></div>
   <div class="inner"><a href="#"><img src="<?php echo Yii::app ()->theme->baseUrl . "/images/dibai.jpg" ;?>" alt=""></a><a class="book-close" onclick="guanbi()">×</a></div>
 </div>
</section>


<section class="content-header">

</section>
