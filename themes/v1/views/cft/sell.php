<?php
/**
 * Created by PhpStorm.
 * Author: yuanzb (yuan_zb@qq.com)
 * DateTime: 16-6-22 下午2:21
 */

$this->pageTitle='卖出M理财包';
?>

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="<?php echo Yii::app()->createUrl('index/index') ?>">Home</a>
        <i class="icon-angle-right"></i>
    </li>
    <li>
        <a href="<?php echo Yii::app()->createUrl('cft/sell') ?>">卖出M理财包</a>
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
                                        <th class="sorting">序号</th>
                                        <th class="sorting">单号</th>
                                        <th class="sorting">类型</th>
                                        <th class="sorting">买入时间</th>
                                        <th class="sorting">操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ( $cftpackage as $k => $item) {?>

                                        <tr role="row" class="odd">
                                            <td class=""><?php echo $k+1 ?></td>
                                            <td class=""><?php echo $item['cp_sn'] ?></td>
                                            <td class="">
                                                <?php
                                                    $type=CftPackageType::model()->find($item->cp_cpt_id);
                                                    echo $type->cpt_name;
                                                ?>
                                            </td>
                                            <td class="sorting_1"><?php echo $item['cp_last_time'] ?></td>
                                            <td>
                                                <button class="btn btn-info" onclick="sell(<?php echo $item['id'] ?> )">卖出</button>
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

<script type="text/javascript">
    function sell(id){
        $.ajax({
            url:'<?php echo $this->createUrl('Cft/sellbyid') ?>',
            type:'GET',
            dataType:'JSON',
            data:{
                id:id
            },
            success:function(result){
                if(result.status){
                    layer.msg(result.msg);
//                    document.load();
                    window.location.reload();
                }else{
                    layer.msg(result.msg);
                }
            }
        })
    }
</script>