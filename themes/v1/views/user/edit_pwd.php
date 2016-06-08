<?php
/**
 * User: Yuan
 * Date: 2016-6-7
 * Time: 23:28:47
 */

$this->pageTitle='修改密码';
?>

<div class="row text-center">
  <?php //$form=$this->beginWidget('CActiveForm',array(
    //'id'=>'edit_pwd',
    //'class'=>'form'
  //)) ?>
  
 <?php $form = $this->beginWidget('CActiveForm', array(
      'id'=>'user-form',
      'enableAjaxValidation'=>true,
      'enableClientValidation'=>true,
      'focus'=>array($model,'firstName'),
  )); ?>

  <div class="from">
    <label for="old_pwd">原密码</label>
    <?php echo $form->passwordField($model,'u_pwd',array(
      'placeholder'=>'请输入原密码',
      'class'=>'input',
      'id'=>'old_pwd'
    )) ?>
  </div>

  <div class="from">
    <label for="new_pwd">新密码</label>
    <?php echo $form->passwordField($model,'new_pwd',array(
      'placeholder'=>'请输入新密码',
      'class'=>'input',
      'id'=>'new_pwd'
    )) ?>
  </div>

  <div class="from">
    <label for="confirm_pwd">确认密码</label>
    <?php echo $form->passwordField($model,'confirm_pwd',array(
      'placeholder'=>'请输入确认密码',
      'class'=>'input',
      'id'=>'confirm_pwd'
    )) ?>
  </div>

  <input type="submit" class='btn btn-warning' value='确认修改'>

  <?php $this->endWidget(); ?>
</div>
