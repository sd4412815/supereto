<?php
/**
 * Created by PhpStorm.
 * Author: yuanzb (yuan_zb@qq.com)
 * DateTime: 16-6-25 下午4:41
 */

$this->pageTitle='公告管理';
?>

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="<?php echo $this->createUrl('index/index') ?>">Home</a>
        <i class="icon-angle-right"></i>
    </li>
    <li>
        <a href="<?php echo $this->createUrl('messages/list') ?>">公告管理</a>
    </li>
</ul>

<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">公告管理</h3>
                </div>

                <div class="box-body">
                    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example2" class="table table-bordered table-hover dataTable" >
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting">发布日期</th>
                                        <th class="sorting">标题</th>
                                        <th class="sorting">结束日期</th>
                                        <th class="sorting">类型</th>
                                        <th colspan="2" class="sorting">操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ( $messages as $item) {?>

                                        <tr role="row" class="odd">
                                            <td class=""><?php echo substr(substr($item['om_addtime'],5 ) ,0, -3)?></td>
                                            <td class=""><?php echo $item['om_title'] ?></td>
                                            <td class="sorting_1"><?php echo substr(substr($item['om_outtime'],5 ) ,0, -3) ?></td>
                                            <td>
                                                <?php
                                                    if($item['om_type']==1){
                                                        echo '系统公告';
                                                    }else if($item['om_type']==2){
                                                        echo '网站公告';
                                                    }else if($item['om_type']==3){
                                                        echo '买入公告';
                                                    }

                                                ?>
                                            </td>
                                            <td>
                                                <a href="">
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
        $.ajax({
            url:'<?php echo $this->createUrl('messages/del') ?>',
            type:'GET',
            dataType:'JSON',
            data:{
                'id':id
            },
            success:function (result){
                if(result.status){
                    layer.msg(result.msg);
                    location.reload()
                }
            },
            error:function (result){

            }
        })
    }
</script>