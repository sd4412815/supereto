<?php
/**
 * Created by PhpStorm.
 * Author: yuanzb (yuan_zb@qq.com)
 * DateTime: 16-6-22 下午2:20
 */
$this->pageTitle='卖出记录';
?>

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="<?php echo Yii::app()->createUrl('index/index') ?>">Home</a>
        <i class="icon-angle-right"></i>
    </li>
    <li>
        <a href="<?php echo Yii::app()->createUrl('cft/selllog') ?>">卖出记录</a>
    </li>
</ul>



<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">卖出的M包记录</h3>
                </div>

                <div class="box-body">
                    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example2" class="table table-bordered table-hover dataTable" >
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting">编号</th>
                                        <th class="sorting">日期</th>
                                        <th class="sorting">金额</th>
                                        <th class="sorting">预计收款时间</th>
                                        <th class="sorting">状态</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ( $selllog as $item) {?>

                                        <tr role="row" class="odd">
                                            <td class=""><?php echo $item['s_account'] ?></td>
                                            <td class=""><?php echo $item['s_add_time'] ?></td>
                                            <td class=""><?php echo $item['s_balance'] ?></td>
                                            <td class="sorting_1"><?php //echo strtotime(strtotime($item['s_add_time']),'+3 days') ?></td>
                                            <td>
                                                <?php
                                                    if($item['s_status'] == 1){
                                                        echo '申请中';
                                                    }elseif($item['s_status'] ==2){
                                                        echo '提取成功';
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                    <?php } ?>

                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>

</section>
