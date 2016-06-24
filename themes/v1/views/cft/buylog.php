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
                                            <th class="sorting">买入日期</th>
                                            <th class="sorting">Browser</th>
                                            <th class="sorting">Platform(s)</th>
                                            <th class="sorting">Engine version</th>
                                            <th class="sorting">CSS grade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr role="row" class="odd">
                                            <td class="">Misc</td>
                                            <td class="">IE Mobile</td>
                                            <td class="sorting_1">Windows Mobile 6</td>
                                            <td>-</td>
                                            <td>C</td>
                                        </tr>
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


