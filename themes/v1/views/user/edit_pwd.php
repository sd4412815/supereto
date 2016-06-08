<?php
/**
 * User: Yuan
 * Date: 2016-6-7
 * Time: 23:28:47
 */

$this->pageTitle='修改密码';
?>

<div class="row">
  <?php $form=$this->beginWidget('CActiveForm',array(
    'id'=>'edit_pwd',
    'class'=>'form'
  )) ?>
  <div class="from">
    <label for="old_pwd">原密码</label>
    <?php $form->passwordField($model,'password',array(
      'placeholder'=>'请输入原密码',
      'class'=>'form-control',
      'id'=>'old_pwd'
    )) ?>
  </div>

  <div class="from">
    <label for="new_pwd">新密码</label>
    <?php $form->passwordField($model,'new_pwd',array(
      'placeholder'=>'请输入新密码',
      'class'=>'form-control',
      'id'=>'new_pwd'
    )) ?>
  </div>

  <div class="from">
    <label for="confirm_pwd">新密码</label>
    <?php $form->passwordField($model,'confirm_pwd',array(
      'placeholder'=>'请输入确认密码',
      'class'=>'form-control',
      'id'=>'confirm_pwd'
    )) ?>
  </div>

  <?php $this->endWidget(); ?>
</div>
