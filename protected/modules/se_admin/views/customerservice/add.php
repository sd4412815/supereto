<?php
/**
 * User: Yuan
 * Date: 2016-6-30
 * Time: 21:42
 */
$this->pageTitle=$title;
?>

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="<?php echo $this->createUrl('index/index') ?>">Home</a>
        <i class="icon-angle-right"></i>
    </li>
    <li>
        <a href="<?php echo $this->createUrl('CustomerService/add') ?>">添加客服</a>
    </li>
</ul>

<section class="content">

    <?php $form = $this->beginWidget('CActiveForm', array(
            'id'=>'user-form',
            'enableAjaxValidation'=>true,
            'enableClientValidation'=>true,
            'focus'=>array($model,'firstName'),
            'htmlOptions' => array (
                'class' => 'form-horizontal',
                'style'=>'margin-top:30px;'
            )
        )
    ); ?>

    <div class="form-group">
        <label class="control-label  col-xs-4" for="cs_name">客服名称<span class="text-red h5">*</span></label>
        <div class="col-xs-8 col-sm-4">
            <?php echo $form->textField($model,'cs_name',array(
                'placeholder'=>'请输入客服名称',
                'class'=>'form-control',
                'id'=>'cs_name'
            )) ?>
        </div>
    </div>


    <div class="form-group">
        <label class="control-label  col-xs-4" for="cs_qq">QQ号码<span class="text-red h5">&nbsp;</span></label>
        <div class="col-xs-8 col-sm-4">
            <?php echo $form->datetimeField($model,'cs_qq',array(
                'placeholder'=>'请输入QQ号码',
                'class'=>'form-control',
                'id'=>'cs_qq'
            )) ?>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label  col-xs-4" for="cs_sort">排序<span class="text-red h5">&nbsp;</span></label>
        <div class="col-xs-8 col-sm-4">
            <?php echo $form->textField($model,'cs_sort',array(
//                'placeholder'=>'请输入支付宝账号',
                'class'=>'form-control',
                'id'=>'cs_sort'
            )) ?>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label  col-xs-4" for="cs_desc">简介<span class="text-red h5">&nbsp;</span></label>
        <div class="col-xs-8 col-sm-4">
            <?php echo $form->textArea($model,'cs_desc',array(
                'placeholder'=>'请输入简单介绍',
                    'class'=>'form-control',
                    'id'=>'cs_desc'
            )) ?>
        </div>


    </div>


    <?php if (Yii::app ()->user->hasFlash ( 'add' )) :	?>
        <div class="alert alert-danger" role="alert"><?php print_r(Yii::app()->user->getFlash('add')) ;?></div>
    <?php endif;?>
    <?php echo $form->errorSummary($model); ?>
    <div class="form-actions">
        <button type="submit" class="btn btn-info col-xs-offset-4">确认</button>
    </div>
    <?php $this->endWidget(); ?>
</section>
