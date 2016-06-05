<?php
/**
 * User: Yuan
 * Date: 2016-6-5
 * Time: 12:48:45
 */

$this->pageTitle = '登录';
?>



<section class="login-form-wrap">
    <h1>SuperETO</h1>
    <?php $form = $this->beginWidget ( 'CActiveForm', array (
    'id' => 'login-form',
    'focus' => array (
        $model,
        'u_tel',
    ),
    'enableAjaxValidation' => true,
    'enableClientValidation' => true,
    'clientOptions' => array (
        'validateOnSubmit' => true,
        'validateOnChange' => true,
        'afterValidate' => 'js:function(form, data, hasError){
                        if(hasError){
	                        $("#btn_submit").attr("disabled","disabled");
                            return false;
                        }else{
                            layer.load("登录中...");
                            return true;
                        }

                    }',
        'afterValidateAttribute' => 'js:function(form, attribute, data, hasError){
                    if(hasError){
	                    $("#btn_submit").attr("disabled","disabled");
                    }else{
                        $("#btn_submit").removeAttr("disabled");
                    }
                }'
    ),
    'htmlOptions' => array (
        'enctype' => 'multipart/form-data',
        'class' => 'login-form'
    )
) );
?>
        <label>
            <?php
                echo $form->textField ( $model, 'u_tel', array (
                    'placeholder' => '手机号',
//                    'class' => 'form-control'
                ) );
            ?>
            <?php echo $form->error ( $model, 'u_tel');?>
<!--            <input type="email" name="email" required placeholder="Email">-->
        </label>
        <label>
            <?php
                echo $form->passwordField ( $model, 'u_pwd', array (
                    'placeholder' => '密码只包含数字、字母、下划线',
//                    'class' => 'form-control'
                    'required'=>''
                ) );
            ?>
            <?php echo $form->error ( $model, 'u_pwd');?>
<!--            <input type="password" name="password" required placeholder="Password">-->
        </label>
            <?php
                echo CHtml::submitButton ( '登录', array (
                    //'class' => 'btn col-sm-offset-4 col-sm-4 col-xs-4 ',
                    'id' => 'btn_submit'
                ) );
            ?>
<!--        <input type="submit" value="Login">-->
        <?php $this->endWidget(); ?>
    <h5><a href="#">Forgot password</a></h5>
</section>





