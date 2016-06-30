<?php
/**
 * User: Yuan
 * Date: 2016-6-7
 * Time: 23:33:56
 */
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/bootstrap-responsive.css" );
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/font-awesome.css" );
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/style-metro.css" );
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/style-responsive.css" );
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/style.css" );
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/style1.css" );
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/grey.css" );
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/uniform.css" );
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/uniform.default.css" );
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/jquery.css" );
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/daterangepicker.css" );
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/fullcalendar.css" );
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/jquery_002.css" );
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/news.css" );
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/97zzw.css" );
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/glyphicons.css" );
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/halflings.css" );
$this->pageTitle='佣金清单';
?>
	<style type="text/css">
    a{color:black;}
    a:hover{color:black;}
    th{text-align: center;}
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
			 form.trade_form{margin-top:5px}
			 .transaction-details table td {padding:3px 3px;}
		}
	</style>
</head>
<body class="page-header-fixed ">

    <div class="page-container">
      <div class="container-fluid">
          <div class="row-fluid">
              <div class="span12">
                  <ul class="breadcrumb">
                      <li> <i class="icon-home"></i> <a href="<?php echo Yii::app()->CreateUrl('index/index') ?>">Home</a> <i class="icon-angle-right"></i> </li>
                      <li><a href="">佣金清单</a></li>
                  </ul>
              </div>
          </div>
<div class="container-fluid">
<div class="row-fluid">
	<div class="span12">
		<div class="portlet box grey">
			<div class="portlet-title">
				<div class="caption"><i class="icon-list"></i> 佣金清单</div>
			</div>
			<div class="portlet-body flip-scroll">
        <?php
        if(!empty($recommend)){
        foreach ($recommend as $k => $rec) :?>
        <?php $user = User::model()->find('id=:uid',array(':uid'=>$rec['ui_userid'])); ?>
        <?php $com = Commission::model()->find('c_sort=:sort',array(':sort'=>3));?>
        <table class="table table-bordered flip-content  table-full-width" id="sample_2">
            <tr>
              <th>序号</th>
              <th>额度状态</th>
              <th>冻结状态</th>
              <th>会员编号</th>
              <th>直推</th>
              <th>管理</th>
              <th>当期余额</th>
              <th>来源详情</th>
            </tr>
            <tr>
              <td><?php echo $k+1; ?></td>
              <td><?php echo $com['c_quota_status']; ?></td>
              <td><?php echo $com['c_frozen_status']; ?></td>
              <td><?php echo $rec['ui_account_number']; ?></td>
              <td><?php echo $count_user; ?></td>
              <td><?php echo $count_user; ?></td>
              <td><?php echo $count_user ?></td>
              <td><?php echo $count_user ?></td>
            </tr>
        </table>
          <?php endforeach;?>
        <?php   }else{ ?>
          <table class="table table-bordered flip-content  table-full-width" id="sample_2">
              <tr>
                <th>序号</th>
                <th>会员编号</th>
                <th>昵称</th>
                <th>姓名</th>
                <th>手机号</th>
                <th>成功M包量</th>
                <th>团队</th>
                <th>注册时间</th>
              </tr>
          </table>
          <?php }?>
				<div class="pagelist"></div>
			</div>
		</div>
	</div>

</div>
</div>
</div>
</div>



<div class="footer">
	<div class="footer-inner"> 2016 © superETO.com </div>
	<div class="footer-tools"> <span class="go-top"> <i class="icon-angle-up"></i> </span> </div>
</div>
<script src="./佣金清单 - BBG步步高_files/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="./佣金清单 - BBG步步高_files/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="./佣金清单 - BBG步步高_files/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="./佣金清单 - BBG步步高_files/bootstrap.min.js" type="text/javascript"></script>
<!--[if lt IE 9]>
<script src="media/js/excanvas.min.js"></script>
<script src="media/js/respond.min.js"></script>
<![endif]-->
<script src="./佣金清单 - BBG步步高_files/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="./佣金清单 - BBG步步高_files/jquery.blockui.min.js" type="text/javascript"></script>
<script src="./佣金清单 - BBG步步高_files/jquery.uniform.min.js" type="text/javascript"></script>
<script src="./佣金清单 - BBG步步高_files/app.js" type="text/javascript"></script>
<script>
jQuery(document).ready(function () {
	App.init();
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
		}
		;
	});
});
</script>
<script type="text/javascript" src="./佣金清单 - BBG步步高_files/remaining.js"></script>
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
</body></html>
