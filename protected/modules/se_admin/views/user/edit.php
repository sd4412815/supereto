<?php
/**
 * User: Yuan
 * Date: 2016-7-3
 * Time: 15:00
 */

$pageTitle='编辑会员信息';
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

    <?php $form = $this->beginWidget('CActiveForm', array(
            'id'=>'user-form',
            'enableAjaxValidation'=>true,
            'enableClientValidation'=>true,
            'focus'=>array($user,'firstName'),
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



    <?php if (Yii::app ()->user->hasFlash ( 'editInfo' )) :	?>
        <div class="alert alert-danger" role="alert"><?php print_r(Yii::app()->user->getFlash('editInfo')) ;?></div>
    <?php endif;?>
    <?php echo $form->errorSummary($user); ?>
    <?php echo $form->errorSummary($info); ?>
    <div class="form-actions">
        <button type="submit" class="btn btn-info col-xs-offset-4">确认</button>
    </div>
    <?php $this->endWidget(); ?>


</section>

