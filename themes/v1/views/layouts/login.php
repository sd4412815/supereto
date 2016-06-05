<?php /* @var $this Controller */ ?>
<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php

    Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/common/bootstrap-3.3.5-dist/css/bootstrap.min.css" );
    Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/common/AdminLTE-2.3.3/css/AdminLTE.css" );
    Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/style.css" );
    Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/login_style.css" );

//    Yii::app ()->clientScript->registerCoreScript ( Yii::app ()->theme->baseUrl . "/public/js/jquery-1.12.4.min.js", CClientScript::POS_END );
    Yii::app ()->clientScript->registerScriptFile ( Yii::app ()->theme->baseUrl . "/public/common/bootstrap-3.3.5-dist/js/bootstrap.min.js", CClientScript::POS_END );
    Yii::app ()->clientScript->registerScriptFile ( Yii::app ()->theme->baseUrl . "/public/common/AdminLTE-2.3.3/js/app.min.js", CClientScript::POS_END );
    Yii::app ()->clientScript->registerScriptFile ( Yii::app ()->theme->baseUrl . "/public/common/layer-v2.3/layer.js", CClientScript::POS_END );

    ?>
</head>
<body>
<div>
        <?php echo $content;?>
</div>
</body>
</html>
