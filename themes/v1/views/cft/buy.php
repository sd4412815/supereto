<?php
/**
 * Created by PhpStorm.
 * Author: yuanzb (yuan_zb@qq.com)
 * DateTime: 16-6-20 下午3:38
 */
$this->pageTitle='原石众筹';

?>


<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="<?php echo Yii::app()->createUrl('index/index') ?>">Home</a>
        <i class="icon-angle-right"></i>
    </li>
    <li>
        <a href="<?php echo Yii::app()->createUrl('cft/buy') ?>">原石众筹</a>
    </li>
</ul>


<section class="content" style="font-size: 12px;">
    <div class="alert" style="background:orange;"><strong>系统提示：</strong> <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;每天只能众筹一次<br>
        <strong>风险提示：</strong> <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;本人正式申明：本人完全清楚了解投资带来的所有的风险，并愿意为superETO项目的市场营销推广贡献自己的力量。
    </div>



    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'user-form',
        'enableAjaxValidation'=>true,
        'enableClientValidation'=>true,
        'focus'=>array($model,'firstName'),
        'htmlOptions' => array (
            'class' => 'form-horizontal',
            'style'=>'margin-top:30px;'
        ))
    ); ?>
        <div class="form-group">
            <label class="control-label col-xs-4" for="">挂单信息<span class="required">&nbsp;</span></label>
            <div class="col-xs-8 col-sm-4">
                <span class="form-show" style="font-size:14px;">
                    <?php if($model->todayStatus==0){ ?>
                        <span class="text-green">恭喜您，现在可以挂单啦！</span>
                    <?php }else{ ?>
                        <span class="text-red">很抱歉，您今天已经挂单啦！</span>
                    <?php } ?>
                </span>
            </div>
        </div>


        <div class="form-group">
            <label class="control-label col-xs-4" for="">众筹金额<span class="text-red h5">*</span></label>
            <div class="col-xs-8 col-sm-4">
                <?php echo $form->dropDownList($model,'cp_cpt_id',$cftType,array(
                    'class'=>'form-control'
                )) ?>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-4" for="">安全密码<span class="required">*</span></label>
            <div class="col-xs-8 col-sm-4">
                <?php echo $form->passwordField($user,'u_safe_pwd',array(
                    'class'=>'form-control',
                    'placeholder'=>'输入安全密码'
                )) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-xs-4">图形验证码<span class="required">*</span></label>
            <div class="col-xs-4 col-sm-2">
                <?php echo $form->textField($model,'captcha',array(
                    'class'=>'form-control',
                    'placeholder'=>'请输入验证码'
                )) ?>
            </div>
            <div class="col-xs-4 col-sm-2">
                <?php
                $this->widget('CCaptcha',array(
                        'showRefreshButton'=>false,
                        'clickableImage'=>true,
                        'imageOptions'=>array(
                                'alt'=>'点击切换验证码',
                                'title'=>'点击切换验证码',
                                'style'=>'cursor:pointer'
                        )
                ));
                ?>
            </div>
        </div>

        <?php if(Yii::app()->user->hasFlash('success')){?>
            <div class="row error col-xs-offset-4">
                <?php echo Yii::app()->user->getFlash('success'); ?>
            </div>
        <?php } ?>
    <?php if(Yii::app()->user->hasFlash('error')){?>
        <div class="row error col-xs-offset-4">
            <?php echo Yii::app()->user->getFlash('error'); ?>
        </div>
    <?php } ?>

     <?php echo $form->errorSummary($model); ?>
     <?php echo $form->errorSummary($user); ?>

    <div class="col-xs-offset-4">
            <button type="submit" id="submit" class="btn btn-info btn-sm">确认众筹</button>
        </div>
    <?php $this->endWidget(); ?>

</section>

<script>
    $(function(){
        $('#User_u_safe_pwd').val('');

    });
    $(function(){
        var is_check='<?php echo $model->todayStatus ?>';
        if(is_check==1){
            $('#CftPackage_cp_type_id').attr("disabled",true);
            $('#submit').attr('disabled',true);
        }else{
            $('#CftPackage_cp_type_id').attr("disabled",false);
            $('#submit').attr('disabled',false);
        }
    })
</script>
