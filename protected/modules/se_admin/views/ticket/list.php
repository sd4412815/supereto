<?php
/**
 * Created by PhpStorm.
 * Author: yuanzb (yuan_zb@qq.com)
 * DateTime: 16-6-25 下午4:41
 */

$this->pageTitle='门票管理';
?>

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="<?php echo $this->createUrl('index/index') ?>">Home</a>
        <i class="icon-angle-right"></i>
    </li>
    <li>
        <a href="<?php echo $this->createUrl('messages/list') ?>">门票管理</a>
    </li>
</ul>

<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">门票管理</h3>
                </div>

                <div class="box-body">
                    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example2" class="table table-bordered table-hover dataTable" >
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting">序号</th>
                                        <th class="sorting">接受人编号</th>
                                        <th class="sorting">转账人编号</th>
                                        <th class="sorting">门票数量</th>
                                        <th class="sorting">转账时间</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ( $ticket as $k=>$item) {?>
                                        <tr role="row" class="odd">
                                            <td class=""><?php echo $k+1?></td>
                                            <td class=""><?php echo $item['t_account_number']?></td>
                                            <td class=""><?php echo $item['t_account_number']?></td>
                                            <td class=""><?php echo $item['t_ticket_number']?></td>
                                            <td class=""><?php echo $item['t_transfer_time']?></td>
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
