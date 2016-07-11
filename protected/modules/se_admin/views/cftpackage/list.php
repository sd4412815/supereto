<?php
/**
 * User: Yuan
 * Date: 2016-6-22
 * Time: 21:39
 */
$this->pageTitle='订单列表';
?>

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="<?php echo $this->createUrl('index/index') ?>">Home</a>
        <i class="icon-angle-right"></i>
    </li>
    <li>
        <a href="<?php echo $this->createUrl('cftpackage/list') ?>">订单列表</a>
    </li>
</ul>

<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">订单列表</h3>
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
                                        <th class="sorting" colspan="2">操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ( $cftpackage as $item) {?>

                                        <tr role="row" class="odd">
                                            <td class=""><?php echo substr(substr($item['cp_add_time'],5 ) ,0, -3)?></td>
                                            <td class=""><?php echo $item['cp_sn'] ?></td>
                                            <td class="sorting_1"><?php echo substr(substr($item['cp_last_time'],5 ) ,0, -3) ?></td>
                                            <td><?php echo $item['cp_status'] ?></td>
                                            <td>
                                                <a href="<?php echo $this->createUrl('Cftpackage/edit',array('id'=>$item['id'])) ?>">
                                                    <i class="fa fa-pencil-square-o"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="#" onclick="del(<?php echo $item['id']?>);">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
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


<script>
    function del(id){
        if(confirm('确定要删除吗？')) {
            $.ajax({
                url: '<?php echo $this->createUrl('Cftpackage/del') ?>',
                type: 'GET',
                dataType: 'JSON',
                data: {
                    'id': id
                },
                success: function (result) {
                    if (result.status) {
                        layer.msg(result.msg);
                        location.reload()
                    }
                },
                error: function (result) {

                }
            })
        }
    }
</script>
