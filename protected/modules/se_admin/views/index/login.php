<?php
/**
 * User: Yuan
 * Date: 2016-6-5
 * Time: 12:48:45
 */
$this->pageTitle = 'supereto--登录';
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
                    'id'=>'LoginForm_u_tel'
                ) );
            ?>
            <?php echo $form->error ( $model, 'u_tel');?>
        </label>
        <label>
            <?php
                echo $form->passwordField ( $model, 'u_pwd', array (
                    'placeholder' => '密码只包含数字、字母、下划线',
                    'required'=>''
                ) );
            ?>
            <?php echo $form->error ( $model, 'u_pwd');?>
        </label>
            <?php if (Yii::app()->user->hasFlash('loginError')):?>
                <div style="color: #ff6140;"><?php echo Yii::app()->user->getFlash('loginError');?></div>
            <?php endif;?>
            <?php
                echo CHtml::submitButton ( '登录', array (
                    'id' => 'btn_submit'
                ) );
            ?>
        <?php $this->endWidget(); ?>
    <h5><a href="#">Forgot password</a></h5>
</section>
<script>
    /*$('#btn_submit').click(function(){
        layer.load(1);
        setTimeout(function(){
            layer.closeAll('loading');
        }, 2000);
    });*/
</script>




