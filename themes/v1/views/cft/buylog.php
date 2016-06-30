<?php
/**
 * Created by PhpStorm.
 * Author: yuanzb (yuan_zb@qq.com)
 * DateTime: 16-6-22 下午2:19
 */
$this->pageTitle='买入记录';

?>
<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="<?php echo Yii::app()->createUrl('index/index') ?>">Home</a>
        <i class="icon-angle-right"></i>
    </li>
    <li>
        <a href="<?php echo Yii::app()->createUrl('cft/buylog') ?>">买入记录</a>
    </li>
</ul>

<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">买入的M包记录</h3>
                </div>

                <div class="box-body">
                    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example2" class="table table-bordered table-hover dataTable" >
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting">日期</th>
                                            <th class="sorting">单号</th>
                                            <th class="sorting">收款时间</th>
                                            <th class="sorting">状态</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ( $cftpackage as $item) {?>
                                            
                                        <tr role="row" class="odd">
                                            <td class=""><?php echo substr(substr($item['cp_add_time'],5 ) ,0, -3)?></td>
                                            <td class=""><?php echo $item['cp_sn'] ?></td>
                                            <td class="sorting_1"><?php echo substr(substr($item['cp_last_time'],5 ) ,0, -3) ?></td>
                                            <td>
                                                <?php if($item['cp_status'] == 0){
                                                    echo '正常';
                                                }?>
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


