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
$this->pageTitle='新建账户';
?>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<section class="content">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>新建账户</title>
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
        label {padding-left:1px;padding-right:1px;float: left; position:relative;min-height:1px;width:55px;text-align: right;}
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
                        <ul class="breadcrumb">
                            <li> <i class="icon-home"></i> <a href="<?php echo Yii::app()->CreateUrl('index/index') ?>">Home</a> <i class="icon-angle-right"></i> </li>
                            <li><a href="">新建账户</a></li>
                        </ul>
                    </div>
                </div>
                <!-- END PAGE HEADER-->

                <!-- BEGIN password INFO-->
                <div class="tabbable tabbable-custom tabbable-full-width">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1_1" data-toggle="tab">新建账户</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane row-fluid active" id="tab_1_1">
                            <ul><li>⊙ 本功能仅用于未注册过的手机号码。</li>
                                <li>⊙ 一个手机号码只能注册一次。</li>
                                <li>⊙ 请细致填写账户资料，全国统一管理。</li>
                                <li>⊙ 申诉需验证手机和姓名，请如实填写。</li>
                                <li>⊙ 您必须为年满18周岁，60周岁以下完全民事行为能力的合法公民，不符合请勿注册。</li>
                                <li class="control-label">⊙ 注:<span class="required">*</span>为必填项，如不填无法成功申请。</li>
                            </ul>
                            <div class="row-fluid">
                                <div class="span9">
                                    <div class="portlet box ">
                                        <!--
                                        <div class="portlet-title">
                                            <div class="caption"><i class="icon-user"></i>新帳戶申請登記</div>
                                        </div>-->
                                        <div class="portlet-body ">
                                            <!-- BEGIN FORM-->
                                            <!-- <form action="?action=savenew" method="post" class="form-horizontal" id="joinform"> -->
                                            <?php $form = $this->beginWidget('CActiveForm', array(
                                                    'id'=>'user-form',
                                                    'action'=>$this->CreateUrl('User/Register'),
                                                //  'name' => 'RegisterForm',
                                                    'enableAjaxValidation'=>true,
                                                    'enableClientValidation'=>true,
                                                    'focus'=>array($model,'firstName'),
                                            )); ?>

                                            <div class="form-group" >
                                                <label class="control-label" for="userAccountName" >编号<span class="required">*</span></label>
                                                <div class="col-xs-7" style="display:inline-block;"  >
                                                    <?php
                                                    $range = range(1000,9999);
                                                    $rand = array_rand($range,1);
                                                    echo $form->textField ( $models, 'ui_account_number', array (
                                                            'class'       => 'form-control',
                                                            'readonly'    => 'readonly',
                                                            'id'          => 'userAccountName',
                                                            'value'       => 'M0'.substr(time(),7).$rand,
                                                    ) );
                                                    ?>

                                                </div>
                                                <button type="button" class="btn blue" id="userChangeAccountName" style="font-size:8px;padding:6px 6px;">换号</button>
                                                <div class="help-hint" style="height:15px;"></div>
                                            </div>
                                            <div class="form-group" >
                                                <label class="control-label" for="userNickName" >昵称<span class="required">*</span></label>
                                                <div class="col-xs-9">
                                                    <?php
                                                    echo $form->textField ( $model, 'u_nick_name', array (
                                                            'class'               => 'form-control',
                                                            'id'                  => 'userNickName',
                                                            'placeholder'         => '昵称',
                                                            'data-placement'      => 'bottom',
                                                            'data-original-title' =>'请选择一个您喜欢的昵称',

                                                    ) );
                                                    ?>
                                                </div>
                                                <div class="help-hint" style="height:5px;"></div>
                                                <span class="help-inline" > &nbsp;</span>
                                                <div class="help-hint" style="height:15px;"></div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" >推荐人<span class="required">*</span></label>
                                                <div class="col-xs-9">
                                                    <!-- <input name="userReference" class="span5 m-wrap" id="userReference" placeholder="推荐人编号" value="M04535811" maxlength="12" type="text" style="display:inline-block; width:55%;"> -->
                                                    <?php
                                                    echo $form->textField ( $models, 'ui_referrer', array (
                                                            'class'               => 'form-control',
                                                            'id'                  => 'userReference',
                                                            'placeholder'         => '推荐人编号',
                                                            'value'               => $userinfo['ui_account_number'],
                                                    ) );
                                                    ?>
                                                </div>
                                                <div class="help-hint" style="height:5px;"></div>
                                                <span class="help-inline"> &nbsp;</span>
                                                <div class="help-hint" style="height:15px;"></div>
                                            </div>


                                            <div class="form-group">
                                                <label class="control-label" for="userIDname">姓名<span class="required">*</span></label>
                                                <div class="col-xs-9">
                                                    <!-- <input name="userIDname" class="span5 m-wrap" id="userIDname" placeholder="姓名" maxlength="20" type="text" style="display:inline-block; width:55%;"> -->
                                                    <?php
                                                    echo $form->textField ( $model, 'u_name', array (
                                                            'class'               => 'form-control',
                                                            'id'                  => 'userIDname',
                                                            'placeholder'         => '姓名',
                                                    ) );
                                                    ?>
                                                </div>
                                                <div class="help-hint" style="height:5px;"></div>
                                                <span class="help-inline" > &nbsp;</span>
                                                <div class="help-hint" style="height:15px;"></div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label">手机号<span class="required">*</span></label>
                                                <div class="col-xs-9">
                                                    <?php
                                                    echo $form->textField ( $model, 'u_tel', array (
                                                            'class'               => 'form-control',
                                                            'id'                  => 'userMobile',
                                                            'placeholder'         => '手机号码',
                                                    ) );
                                                    ?>
                                                </div>
                                                <div class="help-hint" style="height:5px;"></div>
                                                <span class="help-inline" > &nbsp;</span>
                                                <div class="help-hint" style="height:15px;"></div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" >email<span class="required">&nbsp;</span></label>
                                                <div class="col-xs-9">
                                                    <?php
                                                    echo $form->emailField ( $models, 'ui_email', array (
                                                            'class'               => 'form-control',
                                                            'id'                  => 'userEmail',
                                                            'placeholder'         => '电子邮箱',
                                                    ));
                                                    ?>
                                                </div>
                                                <div class="help-hint" style="height:5px;"></div>
                                                <span class="help-inline" id="passstrength" > &nbsp;</span>
                                                <div class="help-hint" style="height:15px;"></div>
                                            </div>

                                            <!-- BEGIN PASSWORD -->

                                            <div class="form-group">
                                                <label class="control-label" for="userIDnumber">密码<span class="required">*</span></label>
                                                <div class="col-xs-9">
                                                    <?php
                                                    echo $form->passwordField ( $model, 'u_pwd', array (//TODO 密码没写
                                                            'class'               => 'form-control',
                                                            'id'                  => 'logpassword',
                                                            'placeholder'         => '6-18位数字与字母',
                                                    ) );
                                                    ?>

                                                </div>
                                                <div class="help-hint" style="height:5px;"></div>
                                                <span class="help-inline" id="passstrength" > &nbsp;</span>
                                                <div class="help-hint" style="height:15px;"></div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="userIDnumber">确认<span class="required">*</span>
                                                </label>
                                                <div class="col-xs-9">
                                                    <?php
                                                    echo $form->passwordField ( $model, 'confirm_pwd', array (//TODO 密码没写
                                                            'class'               => 'form-control',
                                                            'id'                  => 'vlogpassword',
                                                            'placeholder'         => '6-18位数字与字母',
                                                    ) );
                                                    ?>
                                                </div>
                                                <div class="help-hint" style="height:5px;"></div>
                                                <span class="help-inline" id="passstrength1" > &nbsp;</span>
                                                <div class="help-hint" style="height:15px;"></div>
                                            </div>



                                            <div class="form-group">
                                                <label class="control-label" >安全码<span class="required">*</span></label>
                                                <div class="col-xs-9">
                                                    <?php
                                                    echo $form->passwordField ( $model, 'u_safe_pwd', array (//TODO 安全码没写
                                                            'class'               => 'form-control',
                                                            'id'                  => 'permitpassword',
                                                            'placeholder'         => '6-12位的数字字母',
                                                    ));
                                                    ?>

                                                </div>
                                                <div class="help-hint" style="height:5px;"></div>
                                                <span class="help-inline" id="passstrength2"> &nbsp;</span>
                                                <div class="help-hint" style="height:15px;"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="old_pwd" class="control-label">确认
                                                    <span class="required">*</span>
                                                </label>
                                                <div class="col-xs-9">
                                                    <?php
                                                    echo $form->passwordField ( $model, 'confirm_safe_pwd', array (//TODO 安全码没写
                                                            'class'               => 'form-control',
                                                            'id'                  => 'vpermitpassword',
                                                            'placeholder'         => '6-12位的数字字母',
                                                    ) );
                                                    ?>
                                                </div>
                                                <div class="help-hint" style="height:5px;"></div>
                                                <span class="help-inline" id="passstrength3"> &nbsp;</span>
                                                <div class="help-hint" style="height:15px;"></div>
                                            </div>
                                            <!-- END PASSWORD -->

                                            <!--<div class="control-group">
                                                <label class="control-label">密码保护问题<span class="required">*</span></label>
                                                <div class="controls input-icon">
                                                    <select name="userpp" id="userpp">
                                                        <option value="0">请选择密码保护提示</option>
                                                    <option value="1">您的出生地是哪里</option><option value="2">您的高中班主任姓名是什么</option><option value="3">您爱人出生日期是什么时候</option><option value="4">您父亲的职业是什么</option><option value="5">您最喜欢的一部电影片名是什么</option><option value="6">您爱人的职业是什么</option><option value="7">您最喜欢听的歌曲名字是什么</option><option value="8">您最喜欢的运动项目名称是什么</option><option value="9">您爱人最喜欢吃什么</option><option value="10">您读过的初中校名是什么</option>                                                            </select>
                                                    <span class="help-inline"> </span> </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">密码保护答案<span class="required">*</span></label>
                                                <div class="controls input-icon">
                                                    <input name="userpa" type="text" class="span5 m-wrap" id="userpa" placeholder="密码保护答案" maxlength="30"/>
                                                    <span class="help-inline"> </span> </div>
                                                <div class="help-hint"></div>
                                            </div>-->


                                            <!-- <div class="control-group">
                                                <label class="control-label" style="width:120px; text-align:right;">图形验证码<span class="required">*</span></label>
                                                <div class="controls input-icon" style="display:inline-block;width:800px;"> -->
                                            <!-- <input name="IMGCode" class="span3 m-wrap" id="IMGCode" placeholder="图形验证码" maxlength="6" type="text" style="display:inline-block; width:55%;">  -->
                                            <?php
                                            // echo $form->textField ( $model, 'u_tel', array (
                                            //     'name'                => 'u_tel',
                                            //     'class'               => 'span3 m-wrap',
                                            //     'id'                  => 'IMGCode',
                                            //     'placeholder'         => '图形验证码',
                                            //     'maxlength'           => "6",
                                            //     'style'               => 'display:inline-block; width:55%;'
                                            // ) );
                                            ?>
                                            <!--&nbsp;<img style="cursor:pointer;height:34px;" title="刷新验证码" id="refresh2" src="<?php //echo Yii::app ()->theme->baseUrl . "/images/status.gif" ;?>" onclick="document.getElementById('refresh2').src='/include/captcha.inc.php?t='+Math.random()" border="0" >
                                                            <span class="help-inline" style="display:inline-block;"> </span>
                                                        </div>
                                                        <div class="help-hint" style="height:20px;"></div>
                                                    </div> -->

                                            <div class="form-group">
                                                <label class="control-label" >短信码<span class="required">*</span></label>
                                                <div class="col-xs-6">
                                                    <?php
                                                    echo $form->textField ( $model, 'smsCode', array (
                                                            'class'               => 'form-control',
                                                            'id'                  => 'SMSCode',
                                                            'placeholder'         => '验证码',
                                                    ) );
                                                    ?>
                                                    <span class="help-inline" style="display:inline-block;"> </span>

                                                </div>
                                                <input class="btn red" id="btnSendSMS" value="验证码" style="padding:6px 6px;" type="button">
                                                <div class="help-hint" style="height:5px;"></div>
                                                <div class="help-hint" style="height:15px;"></div>
                                            </div>

                                            <div class="form-actions">
                                                <button type="submit" class="btn blue" id="joinformsubbtn"  >提交申请(Submit)</button>
                                            </div>

                                            <?php if(Yii::app()->user->hasFlash('userinfo')){?>
                                                <div id='userInfoError' class="" style="display:none">
                                                    <?php echo Yii::app()->user->getFlash('userinfo') ?>
                                                </div>
                                            <?php } ?>
                                            <?php $this->endWidget(); ?>
                                            <!-- END FORM-->
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

    <script type="text/javascript">
        $(function(){
            var msg = $('#userInfoError').html();
            if (msg) {
                layer.msg(msg);
            }
        });
    </script>
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
            if ($('#userNickName').val() != '') {
                $(this).parents('.controls').next().html("");
            };
        });
        // $('#userReference').blur(function () {//TODO 没有这个地址
        //     if ($('#userReference').val() != '') {
        //         htmlobj = $.ajax({
        //             url: "ajax_user.php?type=2&number="+$('#userReference').val(),
        //             async:false
        //         });
        //         $(this).parents('.controls').next().html(htmlobj.responseText);
        //     }else {
        //         $(this).parents('.controls').next().html("请输入推荐人编号");
        //     };
        // });
        $('#userIDname').blur(function () {
            if ($('#userIDname').val() == '') {
                $(this).parents('.controls').next().html("请输入您的姓名");
            };
            if ($('#userIDname').val() != '') {
                $(this).parents('.controls').next().html("");
            };
        });

        $('#userMobile').blur(function () {
            if ($('#userMobile').val() != '') {
                if($('#userMobile').val().length==11 && /^1[3,4,5,7,8]\d{9}$/.test($('#userMobile').val()) ) {
                    htmlobj = $.ajax({
                        url:"<?php echo Yii::app()->CreateUrl('User/AjaxCheckMobile') ?>?mobile="+$('#userMobile').val(),
                        success:function(r){
                        },
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
            if ($('#logpassword').val() != '') {
                $(this).parents('.controls').next().html("");
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
            if ($('#permitpassword').val() != '') {
                $(this).parents('.controls').next().html("");
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
