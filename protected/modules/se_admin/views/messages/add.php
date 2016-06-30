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
        <a href="<?php echo $this->createUrl('messages/add') ?>">添加公告</a>
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
        <label class="control-label  col-xs-4" for="om_title">标题<span class="text-red h5">*</span></label>
        <div class="col-xs-8 col-sm-4">
            <?php echo $form->textField($model,'om_title',array(
                'placeholder'=>'请输入标题',
                'class'=>'form-control',
                'id'=>'om_title'
            )) ?>
        </div>
    </div>


    <div class="form-group">
        <label class="control-label  col-xs-4" for="om_outtime">结束时间<span class="text-red h5">&nbsp;</span></label>
        <div class="col-xs-8 col-sm-4">
            <?php echo $form->datetimeField($model,'om_outtime',array(
//                'placeholder'=>'请输入邮箱地址',
                'class'=>'form-control',
                'id'=>'om_outtime'
            )) ?>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label  col-xs-4" for="om_type">类型<span class="text-red h5">&nbsp;</span></label>
        <div class="col-xs-8 col-sm-4">
            <?php echo $form->textField($model,'om_type',array(
//                'placeholder'=>'请输入支付宝账号',
                'class'=>'form-control',
                'id'=>'om_type'
            )) ?>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label  col-xs-4" for="om_content">内容<span class="text-red h5">&nbsp;</span></label>
        <div class="col-xs-8 col-sm-4">
            <?php
            $this->widget('ext.ueditor.UeditorWidget',
                    array(
//                            'model'=>$model,//model
//                            'attribute'=>'om_content',//attribute
                            'id'=>'Post_content',//页面中输入框（或其他初始化容器）的ID
                            'name'=>'editor',//指定ueditor实例的名称,个页面有多个ueditor实例时使用
                    )
            );
            ?>
        </div>


    </div>


    </div>
<!--    --><?php //if (Yii::app ()->user->hasFlash ( 'editInfo' )) :	?>
<!--        <div class="alert alert-danger" role="alert">--><?php //print_r(Yii::app()->user->getFlash('editInfo')) ;?><!--</div>-->
<!--    --><?php //endif;?>
<!--    --><?php //echo $form->errorSummary($user); ?>
<!--    --><?php //echo $form->errorSummary($info); ?>
    <div class="form-actions">
        <button type="submit" class="btn btn-info col-xs-offset-4">确认修改</button>
    </div>
    <?php $this->endWidget(); ?>
</section>
