<?php
/**
 * User: Yuan
 * Date: 2016-6-7
 * Time: 23:28:47
 */
$this->pageTitle = '修改资料';
?>
<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="<?php echo Yii::app()->createUrl('index/index') ?>">Home</a>
        <i class="icon-angle-right"></i>
    </li>
    <li>
        <a href="<?php echo Yii::app()->createUrl('user/EditInfo') ?>">修改资料</a>
    </li>
</ul>


<section class="content" style="font-size: 12px;">

    <div class="text-warning">
        <strong>系统提示：</strong>
        为了您的账户稳定，请尽量使用真实资料；支付宝，微信和银行卡至少要填写一项，开户名和姓名保持一致。
    </div>

    <?php $form = $this->beginWidget('CActiveForm', array(
                    'id'=>'user-form',
//                    'enableAjaxValidation'=>true,
//                    'enableClientValidation'=>true,
                    'focus'=>array($info,'firstName'),
                    'htmlOptions' => array (
                            'class' => 'form-horizontal',
                            'style'=>'margin-top:30px;'
                    )
            )
    ); ?>
        <div class="form-group">
            <label class="control-label col-xs-4" for="">编号<span class="text-red h5">&nbsp;</span></label>
            <div class="col-xs-8 col-sm-4">
                <span class=""><?php echo $info['ui_account_number'] ?></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-xs-4" for="">姓名<span class="text-red h5">&nbsp;</span></label>
            <div class="col-xs-8 col-sm-4">
                <span class="form-show"><?php echo $user['u_name'] ?></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-xs-4" for="">手机号<span class="text-red h5">&nbsp;</span></label>
            <div class="col-xs-8 col-sm-4">
                <span class="form-show"><?php echo $user['u_tel'] ?></span>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label  col-xs-4" for="u_nick_name">昵称<span class="text-red h5">*</span></label>
            <div class="col-xs-8 col-sm-4">
                <?php echo $form->textField($user,'u_nick_name',array(
                        'placeholder'=>'请输入昵称',
                        'class'=>'form-control',
                        'id'=>'u_nick_name'
                )) ?>
            </div>
        </div>


        <div class="form-group">
            <label class="control-label  col-xs-4" for="ui_email">邮箱<span class="text-red h5">&nbsp;</span></label>
            <div class="col-xs-8 col-sm-4">
                <?php echo $form->textField($info,'ui_email',array(
                        'placeholder'=>'请输入邮箱地址',
                        'class'=>'form-control',
                        'id'=>'ui_email'
                )) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label  col-xs-4" for="ui_alipay">支付宝<span class="text-red h5">&nbsp;</span></label>
            <div class="col-xs-8 col-sm-4">
                <?php echo $form->textField($info,'ui_alipay',array(
                        'placeholder'=>'请输入支付宝账号',
                        'class'=>'form-control',
                        'id'=>'ui_alipay'
                )) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label  col-xs-4" for="ui_wechat">微信号<span class="text-red h5">&nbsp;</span></label>
            <div class="col-xs-8 col-sm-4">
                <?php echo $form->textField($info,'ui_wechat',array(
                        'placeholder'=>'请输入微信号',
                        'class'=>'form-control',
                        'id'=>'ui_wechat'
                )) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label  col-xs-4" for="ui_credit_card">银行账号<span class="text-red h5">&nbsp;</span></label>
            <div class="col-xs-8 col-sm-4">
                <?php echo $form->textField($info,'ui_credit_card',array(
                        'placeholder'=>'请输入银行卡号',
                        'class'=>'form-control',
                        'id'=>'ui_credit_card'
                )) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label  col-xs-4" for="ui_bank_account">开户银行<span class="text-red h5">&nbsp;</span></label>
            <div class="col-xs-8 col-sm-4">
                <?php echo $form->textField($info,'ui_bank_account',array(
                        'placeholder'=>'请输入开户银行',
                        'class'=>'form-control',
                        'id'=>'ui_bank_account'
                )) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label  col-xs-4" for="ui_bank_branch">开户支行<span class="text-red h5">&nbsp;</span></label>
            <div class="col-xs-8 col-sm-4">
                <?php echo $form->textField($info,'ui_bank_branch',array(
                        'placeholder'=>'请输入开户支行',
                        'class'=>'form-control',
                        'id'=>'ui_bank_branch'
                )) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label  col-xs-4" for="u_safe_pwd">安全密码<span class="text-red h5">*</span></label>
            <div class="col-xs-8 col-sm-4">
                <?php echo $form->passwordField($user,'u_safe_pwd',array(
                        'placeholder'=>'请输入安全密码',
                        'class'=>'form-control',
                        'id'=>'u_safe_pwd'
                )) ?>
            </div>
        </div>
    

        <div class="form-group">
            <label class="control-label  col-xs-4" for="smsCode">短信验证码<span class="text-red h5">*</span></label>
            <div class="col-xs-4 col-sm-4">
                <?php echo $form->textField($user,'smsCode',array(
                        'placeholder'=>'短信验证码',
                        'class'=>'form-control',
                        'id'=>'smsCode'
                )) ?>
            </div>
            <div class="col-xs-4">
                <a href="javascript:void(0)" onclick="get_mobile_code();" id="get_captcha" class="btn btn-primary btn-sm">获取验证码</a>
            </div>
        </div>
        <?php if (Yii::app ()->user->hasFlash ( 'editInfo' )) :	?>
            <div class="alert alert-danger" role="alert"><?php print_r(Yii::app()->user->getFlash('editInfo')) ;?></div>
        <?php endif;?>
        <?php echo $form->errorSummary($user); ?>
        <?php echo $form->errorSummary($info); ?>
        <div class="form-actions">
            <button type="submit" class="btn btn-info col-xs-offset-4">确认修改</button>
        </div>
    <?php $this->endWidget(); ?>


</section>

<script>

    $(function(){
        $('#u_safe_pwd').val('');

    });

    function check_mobile(mobile){
        var re=/^1\d{10}$/;
        if(re.test(mobile)){
            return true;
        }
        return false;
    }

    function　get_mobile_code(){
        var mobile='<?php echo $user['u_tel']; ?>';
        if(check_mobile(mobile)){
            $.ajax({
                url:'<?php echo Yii::app()->createUrl('user/GetSmsCode') ?>',
                dataType: 'json',
                data:{
                    mobile:mobile
                },
                beforeSend:function(){
                    loadi = layer.load("");
                },
                error:function(){
                    layer.close(loadi);
                    layer.msg('加载失败');
                },
                success:function(result){
                    layer.close(loadi);
                    if(result['status']){
                        layer.msg(result['msg']);
                        var o=document.getElementById('get_captcha');
                        time(0);
                    }else{
                        layer.msg(result['msg']);
                    }
                },
            })
        }else{
            layer.msg('手机号有误');
        }
    }

    var wait=60;
    function time(o){
        if (wait == 0) {
            $('#get_captcha').attr('disabled',false);
            $('#get_captcha').css('background','#e95466');
            $('#get_captcha').html('免费获取验证码');
            wait = 60;
        } else {
            $('#get_captcha').attr('disabled',true);
            $('#get_captcha').css('background','#999');
            $('#get_captcha').html('重新发送('+wait+')');
            wait--;
            setTimeout(function() {time(o)},1000)
        }
    }
</script>
