<?php
/**
 * User: Yuan
 * Date: 2016-7-3
 * Time: 13:06
 */

$pageTitle='在线客服';
?>
<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="<?php echo Yii::app()->createUrl('index/index') ?>">Home</a>
        <i class="icon-angle-right"></i>
    </li>
    <li>
        <a href="<?php echo Yii::app()->createUrl('customerservice/list') ?>">在线客服</a>
    </li>
</ul>

<section class="content" style="font-size: 12px;">
    <?php foreach ($list as $item) {?>

    <div class="col-sm-4">
        <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
                <h3 class="widget-user-username"><?php echo $item['cs_name'] ?></h3>
                <h5 class="widget-user-desc">QQ：<?php echo $item['cs_qq']?></h5>
            </div>
            <div class="widget-user-image">
                <img class="img-circle" src="<?php echo Yii::app()->theme->baseUrl ?>/public/common/AdminLTE-2.3.3/img/user1-128x128.jpg" alt="User Avatar">
            </div>
            <div class="box-footer">
                <div class="row text-center" style="margin-top: 10px;">
                  <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $item['cs_qq'] ?>&amp;site=qq&amp;menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo $item['cs_qq'] ?>:41" alt="点击这里给我发消息" title="点击这里给我发消息"/></a>
                    <!-- <img  style="CURSOR: pointer" onclick="javascript:window.open('http://wpa.qq.com/msgrd?V=3&amp;Uin=<?php echo $item['cs_qq'] ?>&amp;Site=qq&amp;menu=yes', '_blank', 'height=502, width=644,toolbar=no,scrollbars=no,menubar=no,status=no');"  border="0" SRC=http://wpa.qq.com/pa?p=1:<?php echo $item['cs_qq'] ?>:1 alt="点击这里给我发消息"> -->
                </div>
                <!-- /.row -->
            </div>
        </div>
    </div>
    <?php } ?>


</section>
