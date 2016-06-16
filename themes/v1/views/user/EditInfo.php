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
                    'enableAjaxValidation'=>true,
                    'enableClientValidation'=>true,
                    'focus'=>array($info,'firstName'),
                    'htmlOptions' => array (
                            'class' => 'form-horizontal',
                            'style'=>'margin-top:30px;'
                    )
            )
    ); ?>
        <div class="form-group">
            <label class="control-label col-xs-4" for="">编号<span class="required">&nbsp;</span></label>
            <div class="col-xs-8 col-sm-4">
                <span class=""><?php echo $info['ui_account_number'] ?></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-xs-4" for="">姓名<span class="required">&nbsp;</span></label>
            <div class="col-xs-8 col-sm-4">
                <span class="form-show"><?php echo $user['u_name'] ?></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-xs-4" for="">手机号<span class="required">&nbsp;</span></label>
            <div class="col-xs-8 col-sm-4">
                <span class="form-show"><?php echo $user['u_tel'] ?></span>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label  col-xs-4" for="u_nick_name">昵称<span class="required">*</span></label>
            <div class="col-xs-8 col-sm-4">
                <?php echo $form->textField($user,'u_nick_name',array(
                        'placeholder'=>'请输入昵称',
                        'class'=>'form-control',
                        'id'=>'u_nick_name'
                )) ?>
            </div>
        </div>


        <div class="form-group">
            <label class="control-label  col-xs-4" for="ui_email">邮箱<span class="required">&nbsp;</span></label>
            <div class="col-xs-8 col-sm-4">
                <?php echo $form->textField($info,'ui_email',array(
                        'placeholder'=>'请输入邮箱地址',
                        'class'=>'form-control',
                        'id'=>'ui_email'
                )) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label  col-xs-4" for="ui_alipay">支付宝<span class="required">&nbsp;</span></label>
            <div class="col-xs-8 col-sm-4">
                <?php echo $form->textField($info,'ui_alipay',array(
                        'placeholder'=>'请输入支付宝账号',
                        'class'=>'form-control',
                        'id'=>'ui_alipay'
                )) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label  col-xs-4" for="ui_wechat">微信号<span class="required">&nbsp;</span></label>
            <div class="col-xs-8 col-sm-4">
                <?php echo $form->textField($info,'ui_wechat',array(
                        'placeholder'=>'请输入微信号',
                        'class'=>'form-control',
                        'id'=>'ui_wechat'
                )) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label  col-xs-4" for="ui_credit_card">银行账号<span class="required">&nbsp;</span></label>
            <div class="col-xs-8 col-sm-4">
                <?php echo $form->textField($info,'ui_credit_card',array(
                        'placeholder'=>'请输入银行卡号',
                        'class'=>'form-control',
                        'id'=>'ui_credit_card'
                )) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label  col-xs-4" for="ui_bank_account">开户银行<span class="required">&nbsp;</span></label>
            <div class="col-xs-8 col-sm-4">
                <?php echo $form->textField($info,'ui_bank_account',array(
                        'placeholder'=>'请输入开户银行',
                        'class'=>'form-control',
                        'id'=>'ui_bank_account'
                )) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label  col-xs-4" for="ui_bank_branch">开户支行<span class="required">&nbsp;</span></label>
            <div class="col-xs-8 col-sm-4">
                <?php echo $form->textField($info,'ui_bank_branch',array(
                        'placeholder'=>'请输入开户支行',
                        'class'=>'form-control',
                        'id'=>'ui_bank_branch'
                )) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label  col-xs-4" for="u_safe_pwd">安全密码<span class="required">*</span></label>
            <div class="col-xs-8 col-sm-4">
                <?php echo $form->passwordField($user,'u_safe_pwd',array(
                        'placeholder'=>'请输入安全密码',
                        'class'=>'form-control',
                        'id'=>'u_safe_pwd'
                )) ?>
            </div>
        </div>
    

        <div class="form-group">
            <label class="control-label  col-xs-4" for="smsCode">短信验证码<span class="required">*</span></label>
            <div class="col-xs-8 col-sm-4">
                <?php echo $form->passwordField($user,'smsCode',array(
                        'placeholder'=>'请输入短信验证码',
                        'class'=>'form-control',
                        'id'=>'smsCode'
                )) ?>
            </div>

        </div>
        <?php if (Yii::app ()->user->hasFlash ( 'editInfo' )) :	?>
            <div class="alert alert-danger" role="alert"><?php echo Yii::app()->user->getFlash('editInfo');?></div>
        <?php endif;?>
        <?php echo $form->errorSummary($user); ?>
        <?php echo $form->errorSummary($info); ?>
        <div class="form-actions">
            <button type="submit" class="btn btn-info col-xs-offset-4">确认修改</button>
        </div>
    <?php $this->endWidget(); ?>


</section>
