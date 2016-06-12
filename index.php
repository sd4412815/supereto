<?php
// change the following paths if necessary
$yii=dirname(__FILE__).'/yii/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';
$function=dirname(__FILE__).'/protected/function.php';

// 在生产模式下删除以下的行
// defined('YII_DEBUG') or define('YII_DEBUG',true);
// 指定每个日志信息中应显示多少级别的调用堆栈
// defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

define('YII_DEBUG',TRUE);
defined('YII_TRACE_LEVEL');
// include_once('emoji.php');

require_once($yii);
require_once($function);

$attributes = array(
		'ak' => 'atV54I5hflatOH00IebtxSwR',
		'geotable_id' => '66526',
		'sn' => 'not use now',
);

$app = Yii::createWebApplication($config);

Yii::app()->theme = 'v1';
$app->run();
?>
