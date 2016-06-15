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
$this->pageTitle='推荐清单';
?>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<section>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>推荐清单</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">

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
th{text-align: center;}
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
        <!--<div class="copyrights">acwealth.net</div>-->

        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar nav-collapse collapse">
                <!-- BEGIN SIDEBAR MENU -->
                <ul class="page-sidebar-menu">
                    <li>
                        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                        <div class="sidebar-toggler hidden-phone"></div>
                        <!--  BEGIN SIDEBAR TOGGLER BUTTON -->
                    </li>
                    <li>
                        <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                        <div style="height: 15px;"></div>
                        <!-- END RESPONSIVE QUICK SEARCH FORM -->
                    </li>
                <!--  END SIDEBAR MENU -->
            </div>
            <!-- END SIDEBAR -->
        <!-- BEGIN PAGE -->
        <div class="page-content">
            <!-- BEGIN PAGE CONTAINER-->
            <div class="container-fluid">
                <!-- BEGIN PAGE HEADER-->
                <div class="row-fluid">
                    <div class="span12">
                        <h3 class="page-title"> 推荐清单 <small>Create Account</small> </h3>
                        <ul class="breadcrumb">
                            <li> <i class="icon-home"></i> <a href="">Home</a> <i class="icon-angle-right"></i> </li>
                            <li><a href="">推荐清单</a></li>
                        </ul>
                    </div>
                </div>
                <!-- END PAGE HEADER-->

                <!-- BEGIN password INFO-->
                <div class="tabbable tabbable-custom tabbable-full-width" >
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab_1_1" data-toggle="tab">推荐清单</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane row-fluid active" id="tab_1_1" >
                                <div class="row-fluid">
                                    <div class="span9" style="width:100%;">
                                        <div class="portlet box ">
                                          <div class="span12">
  <div class="portlet box grey" >
    <div class="portlet-title">
      <div class="caption"><i class="icon-list"></i> 推荐清单</div>
    </div>
    <div class="portlet-body flip-scroll" >
      <table class="table table-hover table-bordered flip-content  table-full-width" id="sample_2">
        <thead>
          <tr>
            <th>序号</th>
            <th>会员编号</th>
            <th>昵称</th>
            <th>姓名</th>
            <th>手机号</th>
            <th>成功M包量</th>
            <th>团队</th>
            <th>注册时间</th>
            <th><i class="icon-hand-down"></i> 其它操作</th>
          </tr>
        </thead>
        <?php foreach ($recommend as $k => $rec) :?>
        <tbody>
          <tr>
            <td><?php echo $rec['id']; ?></td>
            <td><?php echo $rec['rl_account_number']; ?></td>
            <td><?php echo $rec['rl_nick_name']; ?></td>
            <td><?php echo $rec['rl_name']; ?></td>
            <td><?php echo $rec['rl_tel']; ?></td>
            <td><?php echo $rec['rl_help_money']; ?></td>
            <td><?php echo $rec['rl_team_number']; ?></td>
            <td><?php echo $rec['rl_join_date']; ?></td>
            <td><i class="icon-hand-up"></i> 暂无</td>
          </tr>
        </tbody>
        <?php endforeach;?>
      </table>

      <div class="pagelist"></div>

    </div>
  </div>
</div>
                                        </div>
                                    </div>
                                </div>

                                <!--end span9-->
                            </div>
                        </div>
                </div>
                <!-- END form INFO-->

            </div>
        </div>
        <!-- END PAGE CONTAINER-->

     </div>
        <!-- END PAGE -->

        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="footer">
            <div class="footer-inner"> 2015 © superETO.com </div>
            <div class="footer-tools"> <span class="go-top"> <i class="icon-angle-up"></i> </span> </div>
        </div>
        <!-- END FOOTER -->
        <?php
         Yii::app ()->clientScript->registerScriptFile ( Yii::app ()->theme->baseUrl . "/public/js/jquery-1.js", CClientScript::POS_END );
         Yii::app ()->clientScript->registerScriptFile ( Yii::app ()->theme->baseUrl . "/public/js/jquery-migrate-1.js", CClientScript::POS_END );
         Yii::app ()->clientScript->registerScriptFile ( Yii::app ()->theme->baseUrl . "/public/js/jquery-ui-1.js", CClientScript::POS_END );
         Yii::app ()->clientScript->registerScriptFile ( Yii::app ()->theme->baseUrl . "/public/js/bootstrap.js", CClientScript::POS_END );
         Yii::app ()->clientScript->registerScriptFile ( Yii::app ()->theme->baseUrl . "/public/js/jquery_003.js", CClientScript::POS_END );
         Yii::app ()->clientScript->registerScriptFile ( Yii::app ()->theme->baseUrl . "/public/js/jquery.js", CClientScript::POS_END );
         Yii::app ()->clientScript->registerScriptFile ( Yii::app ()->theme->baseUrl . "/public/js/jquery_002.js", CClientScript::POS_END );
         ?>
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
</script><script type="text/javascript">

            $('#userChangeAccountName').click(function () {
                if ($('#userAccountName').val() != '') {
                    htmlobj = $.ajax({
                        url: "ajax_user.php?type=1&number="+$('#userAccountName').val(),
                        async:false
                    });
                    $('#userAccountName').val(htmlobj.responseText);
                };
            });
            $('#userNickName').blur(function () {
                if ($('#userNickName').val() == '') {
                    $(this).parents('.controls').next().html("请输入昵称");
                };
            });
            $('#userReference').blur(function () {
                if ($('#userReference').val() != '') {
                    htmlobj = $.ajax({
                        url: "ajax_user.php?type=2&number="+$('#userReference').val(),
                        async:false
                    });
                    $(this).parents('.controls').next().html(htmlobj.responseText);
                }else {
                    $(this).parents('.controls').next().html("请输入推荐人编号");
                };
            });
            $('#userIDname').blur(function () {
                if ($('#userIDname').val() == '') {
                    $(this).parents('.controls').next().html("请输入您的姓名");
                };
            });
            $('#userMobile').blur(function () {
                if ($('#userMobile').val() != '') {
                    if($('#userMobile').val().length==11 && /^1[3,4,5,7,8]\d{9}$/.test($('#userMobile').val()) ) {
                        htmlobj = $.ajax({
                            url: "ajax_user.php?type=3&number="+$('#userMobile').val(),
                            async:false
                        });
                        $(this).parents('.controls').next().html(htmlobj.responseText);
                    }else {
                        $(this).parents('.controls').next().html("请输入正确的11位手机号码");
                    };
                }else {
                    $(this).parents('.controls').next().html("请输入您的手机号码");
                };
            });
            $('#logpassword').blur(function () {
                if ($('#logpassword').val() == '') {
                    $(this).parents('.controls').next().html("请输入登录密码");
                };
            });
            $('#vlogpassword').blur(function () {
                if ($('#vlogpassword').val() == '') {
                    $(this).parents('.controls').next().html("请再次输入登录密码");
                }else {
                    if($('#vlogpassword').val() != $('#logpassword').val()) {
                        $(this).parents('.controls').next().html("两次登录密码输入不一致");
                    }else {
                        $(this).parents('.controls').next().html("");
                    };
                };
            });
            $('#permitpassword').blur(function () {
                if ($('#permitpassword').val() == '') {
                    $(this).parents('.controls').next().html("请输入安全密码");
                };
            });
            $('#vpermitpassword').blur(function () {
                if ($('#vpermitpassword').val() == '') {
                    $(this).parents('.controls').next().html("请再次输入安全密码");
                }else {
                    if($('#vpermitpassword').val() != $('#permitpassword').val()) {
                        $(this).parents('.controls').next().html("两次安全密码输入不一致");
                    }else {
                        $(this).parents('.controls').next().html("");
                    };
                };
            });
            /*$('#userpa').blur(function () {
                if ($('#userpa').val() == '') {
                    $(this).parents('.controls').next().html("请输入密码保护答案");
                };
            });*/

            var clock = '';
            var nums = 60;
            $('#btnSendSMS').click(function () {
                if ($('#userMobile').val() != '' && $('#IMGCode').val() != '' ) { //
                    if($('#userMobile').val().length==11 && /^1[3,5,7,8]\d{9}$/.test($('#userMobile').val()) ) {
                        htmlobj = $.ajax({
                            url: "ajax_user.php?type=5&IMGCode="+$('#IMGCode').val()+"&number="+$('#userMobile').val(),
                            async:false
                        });
                        $(this).parents('.controls').next().html(htmlobj.responseText);
                        if(htmlobj.responseText=="发送成功，请关注手机短信！") {
                            $('#btnSendSMS').val(nums+'秒后可重新获取');
                            $("#btnSendSMS").attr("disabled",true);
                            $("#btnSendSMS").removeClass().addClass("btn grey");
                            clock = setInterval(doLoop, 1000); //一秒执行一次
                        }
                    }else {
                        $('#userMobile').focus();
                        $('#userMobile').parents('.controls').next().html("请输入正确的11位手机号码");
                    };
                }else {
                    if($('#userMobile').val() == '') {
                        $('#userMobile').focus();
                        $('#userMobile').parents('.controls').next().html("请输入您的手机号码");
                    }else if($('#IMGCode').val() == '') {
                        $('#IMGCode').focus();
                        $('#IMGCode').parents('.controls').next().html("请输入图形验证码");
                    }
                };
            });


            function doLoop()
            {
                nums--;
                if(nums > 0){
                    $("#btnSendSMS").val(nums+'秒后可重新获取');
                }else{
                    clearInterval(clock); //清除js定时器
                    $("#btnSendSMS").attr("disabled",false); //将按钮置为不可点击
                    $("#btnSendSMS").removeClass().addClass("btn red");
                    $("#btnSendSMS").val('点击发送验证码');
                    nums = 60; //重置时间
                }
            }

            $('#joinform').submit(function () {
                //alert("开始检查");

                if ($('#userAccountName').val() == '') {
                    $('#userAccountName').focus();
                    $('#userAccountName').parents('.controls').next().html("请输入新会员编号");
                    return false;
                }else if ($('#userNickName').val() == '') {
                    $('#userNickName').focus();
                    $('#userNickName').parents('.controls').next().html("请输入昵称");
                    return false;
                }else if ($('#userReference').val() == '') {
                    $('#userReference').focus();
                    $('#userReference').parents('.controls').next().html("请输入推荐人会员编号");
                    return false;
                }else if ($('#userIDname').val() == '') {
                    $('#userIDname').focus();
                    $('#userIDname').parents('.controls').next().html("请输入姓名");
                    return false;
                }else if ($('#userMobile').val() == '') {
                    $('#userMobile').focus();
                    $('#userMobile').parents('.controls').next().html("请输入手机号码");
                    return false;
                }else if ($('#userMobile').val().length!=11 || !(/^1[3,5,7,8]\d{9}$/.test($('#userMobile').val())) ) {
                    $('#userMobile').focus();
                    $('#userMobile').parents('.controls').next().html("请输入正确的11位手机号码");
                    return false;
                }else if ($('#logpassword').val() == '') {
                    $('#logpassword').focus();
                    $('#logpassword').parents('.controls').next().html("请输入登录密码");
                    return false;
                }else if ($('#vlogpassword').val() == '') {
                    $('#vlogpassword').focus();
                    $('#vlogpassword').parents('.controls').next().html("请再次输入登录密码");
                    return false;
                }else if ($('#logpassword').val() != $('#vlogpassword').val()) {
                    $('#vlogpassword').focus();
                    $('#vlogpassword').parents('.controls').next().html("两次输入的登录密码不一致");
                    return false;
                }else if ($('#permitpassword').val() == '') {
                    $('#permitpassword').focus();
                    $('#permitpassword').parents('.controls').next().html("请输入安全密码");
                    return false;
                }else if ($('#vpermitpassword').val() == '') {
                    $('#vpermitpassword').focus();
                    $('#vpermitpassword').parents('.controls').next().html("请再次输入安全密码");
                    return false;
                }else if ($('#permitpassword').val() != $('#vpermitpassword').val()) {
                    $('#vpermitpassword').focus();
                    $('#vpermitpassword').parents('.controls').next().html("两次输入的安全密码不一致");
                    return false;
                }else if ($('#IMGCode').val() == '') {
                    $('#IMGCode').focus();
                    $('#IMGCode').parents('.controls').next().html("请输入图形验证码");
                    return false;
                }else if ($('#SMSCode').val() == '') {
                    $('#SMSCode').focus();
                    $('#SMSCode').parents('.controls').next().html("请输入短信验证码");
                    return false;
                };/**/
            });


</script>



</body>
</section>
<section class="content-header">

</section>
