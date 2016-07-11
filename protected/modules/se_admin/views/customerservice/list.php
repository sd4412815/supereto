<?php
/**
 * Created by PhpStorm.
 * Author: yuanzb (yuan_zb@qq.com)
 * DateTime: 16-6-25 下午4:41
 */

$this->pageTitle='客服管理';
?>

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="<?php echo $this->createUrl('index/index') ?>">Home</a>
        <i class="icon-angle-right"></i>
    </li>
    <li>
        <a href="<?php echo $this->createUrl('customerservice/list') ?>">客服管理</a>
    </li>
</ul>

<div class="row">
    <div class="pull-right" style="margin-right: 30px;">
        <a href="<?php echo $this->createUrl('CustomerService/add') ?>" class="btn btn-info">添加客服</a>
        <a href="http://shang.qq.com/v3/index.html" target="_blank" class="btn btn-info">客服申请</a>
    </div>
</div>

<section class="content">
    <div class="row">

        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">客服管理</h3>
                </div>

                <div class="box-body">
                    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example2" class="table table-bordered table-hover dataTable" >
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting">排序</th>
                                        <th class="sorting">客服名称</th>
                                        <th class="sorting">简介</th>
                                        <th class="sorting">QQ号码</th>
                                        <th colspan="2" class="sorting">操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ( $list as $k => $item) {?>

                                        <tr role="row" class="odd">
                                            <td class=""><?php echo $item['cs_sort']?></td>
                                            <td class=""><?php echo $item['cs_name'] ?></td>
                                            <td class="sorting_1"><?php echo $item['cs_desc'] ?></td>
                                            <td><?php echo $item['cs_qq']?></td>
                                            <td>
                                                <a href="<?php echo $this->createUrl('CustomerService/edit',array('id'=>$item['id'])) ?>">
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
        if(confirm('确定删除吗？')) {
            $.ajax({
                url: '<?php echo $this->createUrl('CustomerService/del') ?>',
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