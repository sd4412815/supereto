<?php
/**
 * User: Yuan
 * Date: 2016-6-7
 * Time: 23:33:56
 */
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/bootstrap-responsive.css" );
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/font-awesome.css" );
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/style-metro.css" );
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/style.css" );
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/style1.css" );
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/grey.css" );
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/uniform.css" );
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/jquery.css" );
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/daterangepicker.css" );
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/fullcalendar.css" );
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/jquery_002.css" );
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/news.css" );
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/glyphicons.css" );
 Yii::app ()->clientScript->registerCssFile ( Yii::app ()->theme->baseUrl . "/public/css/halflings.css" );
$this->pageTitle='站内公告';
?>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<section>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>站内公告</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">

</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="page-header-fixed " >
  <div class="page-container">
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <ul class="breadcrumb">
                    <li> <i class="icon-home"></i> <a href="<?php echo Yii::app()->CreateUrl('index/index') ?>">Home</a> <i class="icon-angle-right"></i> </li>
                    <li><a href="">网站公告</a></li>
                </ul>
            </div>
        </div>
      </div>
    </div>
    <script>
	function makesure()
	{
		return(confirm("此操作将取消挂单，门票不予退还，你确定取消吗？"))
	}
</script>
<link rel="shortcut icon" href="" type="image/x-icon">
<style type="text/css">
a{color:black;}
a:hover{color:black;}
.portlet {clear:none;}
.portlet_a {width:49%;float:left;}
.portlet_b {width:49%;float:right;}
.flip-content .tit {font-weight:bold;text-align:center;}
.list-notice {padding:1px 5px;}
.table-condensed th, .table-condensed td {padding:6px 5px 5px}
.tg-link {line-height:30px;background:#f9f9f9;border:1px solid #ddd;border-left:0}
th{text-align: center;height:37px; font-size: 13px;}
td{text-align: center;height:37px; font-size: 13px;width:200px;}
.peidui_btn_div {padding:0px 20px;}

@media (max-width: 768px) {
    .portlet_a {width:100%;float:none;clear:both;}
    .portlet_b {width:100%;float:none;}
    td{width:500%;}
    .flip-scroll th{margin:0}
    .flip-scroll td{margin:0}
    .flip-scroll tbody{overflow-x: hidden;}
}

@media (max-width: 778px) {
     .donations-forward {display:none;}
     .donations-date {width:35%;height:40px;}
     .donations-status {width:20%;height:40px;}
     .donations-number {width:45%;height:40px;font-size:12px;}
     .donations-number span {font-size:12px;}
     .donations-num {font-size:12px;width:30%;text-align:center;}
     .donations-num span {font-size:14px;}
     .donations-num span.rmbflag {display:none;}
     .donations-pay {display:none;width:21%;font-size:12px;}
     .donations-get {width:30%;font-size:12px;}
     .donations-detail {width:40%;}
     .portlet.box .pd-wrap {padding:5px;}
     .transaction-details {padding:5px;}
     .transaction-details table td {padding:3px 3px;}
 }
</style>
        <?php
         Yii::app ()->clientScript->registerScriptFile ( Yii::app ()->theme->baseUrl . "/public/js/jquery-1.js", CClientScript::POS_END );
         Yii::app ()->clientScript->registerScriptFile ( Yii::app ()->theme->baseUrl . "/public/js/jquery-migrate-1.js", CClientScript::POS_END );
         Yii::app ()->clientScript->registerScriptFile ( Yii::app ()->theme->baseUrl . "/public/js/jquery-ui-1.js", CClientScript::POS_END );
         Yii::app ()->clientScript->registerScriptFile ( Yii::app ()->theme->baseUrl . "/public/js/bootstrap.js", CClientScript::POS_END );
         Yii::app ()->clientScript->registerScriptFile ( Yii::app ()->theme->baseUrl . "/public/js/jquery_003.js", CClientScript::POS_END );
         Yii::app ()->clientScript->registerScriptFile ( Yii::app ()->theme->baseUrl . "/public/js/jquery.js", CClientScript::POS_END );
         Yii::app ()->clientScript->registerScriptFile ( Yii::app ()->theme->baseUrl . "/public/js/jquery_002.js", CClientScript::POS_END );
         ?>
         <div class="clear"></div>
           <div class="" style="text-align:center">
             <h2 style="margin-top:50px;"><?php echo $msg['om_title']; ?></h2>
              <pre style="font-size:18px;"><?php echo $msg['om_content']; ?></pre>
           </div>
           <div style="width:90%;  text-align:right;">
             <b style="font-size:18px;"><?php echo substr($msg['om_addtime'],0,10);?> 超级ETO总部宣</b>
           </div>


</body>
</section>
<section class="content-header">

</section>
