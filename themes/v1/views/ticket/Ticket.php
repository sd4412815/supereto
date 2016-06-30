<?php
/**
 * User: Yuan
 * Date: 2016-6-7
 * Time: 23:33:56
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
$this->pageTitle='站内公告';
?>

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
			 form.trade_form{margin-top:5px}
			 .transaction-details table td {padding:3px 3px;}
		}
	</style>
</head>
<body class="page-header-fixed ">
<div class="page-container">
	<div class="page-content">
		<div class="container-fluid">
			<div class="tabbable tabbable-custom tabbable-full-width">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#tab_1_1" data-toggle="tab">门票转账</a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane row-fluid active" id="tab_1_1">
				<div class="alert" style="background:#3c8dbc"><strong>系统提示：</strong> 门票余额转账最低10个，必须为10的整数倍。</div>
				<div class="portlet box ">
					<div class="portlet-body ">
            <?php $form = $this->beginWidget('CActiveForm', array(
                    'id'=>'user-form',
                    'action'=>$this->CreateUrl('ticket/Ticket'),
                    'enableAjaxValidation'=>true,
                    'enableClientValidation'=>true,
                    'focus'=>array($ticket,'firstName'),
            )); ?>


              <div class="form-group" >
                  <label class="control-label" for="userNickName" >接收人<span class="required">*</span></label>
                  <div class="col-xs-9">
                      <?php
                      echo $form->textField ( $ticket, 't_account_number', array (
                              'class'               => 'form-control',
                              'id'                  => '',
                              'placeholder'         => '接收人编号',
                              'data-placement'      => 'bottom',
                              'data-original-title' => '请选择一个您喜欢的昵称',
                      ) );
                      ?>
                  </div>
                  <div class="help-hint" style="height:5px;"></div>
                  <span class="help-inline" > &nbsp;</span>
                  <div class="help-hint" style="height:15px;"></div>
              </div>

              <div class="form-group">
                  <label class="control-label" for="userIDname">门票数<span class="required">*</span></label>
                  <div class="col-xs-9">
                      <?php
                      echo $form->textField ( $ticket, 't_ticket_number', array (
                              'class'               => 'form-control',
                              'id'                  => 'transfer_count',
                              'placeholder'         => '门票数量',
                      ) );
                      ?>
                  </div>
                  <div class="help-hint" style="height:5px;"></div>
                  <span class="help-inline" > &nbsp;</span>
                  <div class="help-hint" style="height:15px;"></div>
              </div>

              <div class="form-group">
                  <label class="control-label" >安全码<span class="required">*</span></label>
                  <div class="col-xs-9">
                      <?php
                      echo $form->passwordField ( $ticket, 'u_safe_pwd', array (
                              'class'               => 'form-control',
                              'id'                  => 'pass22',
                              'placeholder'         => '输入安全密码',
                      ));
                      ?>
                  </div>
                  <div class="help-hint" style="height:5px;"></div>
                  <span class="help-inline" id="passstrength2"> &nbsp;</span>
                  <div class="help-hint" style="height:15px;"></div>
              </div>
                    <?php
                    echo $form->hiddenField ( $ticket, 't_account_id', array (
                                'value'         =>  Yii::app()->user->id,
                    ));
                    ?>


							<div class="form-actions">
								<button type="submit" class="btn blue" id="joinformsubbtn">确认转账</button>
							</div>
              <?php if(Yii::app()->user->hasFlash('success')){?>
                  <div id='userInfoError' style="display:none;">
                      <?php print_r(Yii::app()->user->getFlash('success')); ?>
                  </div>
              <?php } ?>
						<?php $this->endWidget(); ?>
					</div>
				</div>

			</div>
		</div>
</div>
		</div>
	</div>
</div>
<script>
$(function(){
    var msg = $('#userInfoError').html();
    if (msg) {
        layer.msg(msg);
    }
});
</script>
<div class="footer">
	<div class="footer-inner"> 2016 © supereto.com </div>
	<div class="footer-tools"> <span class="go-top"> <i class="icon-angle-up"></i> </span> </div>
</div>
<?php
 Yii::app ()->clientScript->registerScriptFile ( Yii::app ()->theme->baseUrl . "/public/js/jquery-1.js", CClientScript::POS_END );
 Yii::app ()->clientScript->registerScriptFile ( Yii::app ()->theme->baseUrl . "/public/js/jquery-migrate-1.js", CClientScript::POS_END );
 Yii::app ()->clientScript->registerScriptFile ( Yii::app ()->theme->baseUrl . "/public/js/jquery-ui-1.js", CClientScript::POS_END );
 Yii::app ()->clientScript->registerScriptFile ( Yii::app ()->theme->baseUrl . "/public/js/bootstrap.js", CClientScript::POS_END );
 Yii::app ()->clientScript->registerScriptFile ( Yii::app ()->theme->baseUrl . "/public/js/jquery_003.js", CClientScript::POS_END );
 Yii::app ()->clientScript->registerScriptFile ( Yii::app ()->theme->baseUrl . "/public/js/jquery.js", CClientScript::POS_END );
 Yii::app ()->clientScript->registerScriptFile ( Yii::app ()->theme->baseUrl . "/public/js/jquery_002.js", CClientScript::POS_END );
 Yii::app ()->clientScript->registerScriptFile ( Yii::app ()->theme->baseUrl . "/public/js/app.js", CClientScript::POS_END );
 ?>
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
<?php Yii::app ()->clientScript->registerScriptFile ( Yii::app ()->theme->baseUrl . "/public/js/remaining.js", CClientScript::POS_END );?>
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
</script><script type="text/javascript">
$('#user_receive').blur(function () {
	if ($('#user_receive').val() != '') {
		htmlobj = $.ajax({
			url: "ajax_user.php?type=2&number="+$('#user_receive').val(),
			async:false
		});
		$(this).parents('.controls').next().html(htmlobj.responseText);
	}else {
		$(this).parents('.controls').next().html("请输入接收会员编号");
	};
});

$('#commenform').submit(function () {
	//alert("开始检查");
	if ($('#user_receive').val() == '') {
		$('#user_receive').focus();
		$('#user_receive').parents('.controls').next().html("请输入接收会员编号");
		return false;
	}else if ($('#transfer_count').val() == '') {
		$('#transfer_count').focus();
		$('#transfer_count').parents('.controls').next().html("请输入转账金额");
		return false;/**/
	}else if ($('#pass22').val() == '') {
		$('#pass22').focus();
		$('#pass22').parents('.controls').next().html("请输入安全密码");
		return false;
	};
});
function validate(e)
{
    var vaildate = "^(([0-9]+\.[0-9]*[1-9][0-9]*)|([0-9]*[1-9][0-9]*\.[0-9]+)|([0-9]*[1-9][0-9]*))$";
    var result = e.value.match(vaildate);
    if(!result) {
        e.value="0";
        //alert("金额格式有误");
    } else {
       OnChange();
    }
}
function OnChange()
{
	var outMoney = document.getElementById('transfer_count');
	var money = outMoney.value;
	var nnn = (Math.floor(money/1))*1;
	outMoney.value = nnn;
}
</script>

</body></html>
