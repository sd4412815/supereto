<?php
/**
 * Created by PhpStorm.
 * Author: yuanzb (yuan_zb@qq.com)
 * DateTime: 16-6-22 下午2:21
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
$this->pageTitle='公司红利';
?>
<style media="screen">
  .sorting{ text-align:center;}
  .sortinn{ text-align:center;}
  .yincang{display:none;}
  .xianshi{display:block;}
</style>

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="<?php echo Yii::app()->createUrl('index/index') ?>">Home</a>
        <i class="icon-angle-right"></i>
    </li>
    <li>
        <a href="<?php echo Yii::app()->createUrl('cft/sell') ?>">公司红利</a>
    </li>
</ul>


<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">公司红利</h3>
                </div>

                <div class="box-body">
                    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example2" class="table table-bordered table-hover dataTable" >
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting" style="text-align:center;">序号</th>
                                        <th class="sorting">账户编号</th>
                                        <th class="sorting">可提金额</th>
                                        <th class="sorting">操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php //foreach ( $cftpackage as $k => $item) {?>

                                        <tr role="row" class="odd">
                                            <td class="sortinn">1</td>
                                            <td class="sortinn"><?php echo $userinfo['ui_account_number'] ?></td>
                                            <td class="sortinn"><?php echo $userinfo['ui_static_balance'] ?></td>
                                            <td class="sortinn"><button class="btn btn-info" id="tiqu" onclick="sell()">提取</button></td>
                                        </tr>
                                    <?php //} ?>

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


    <div class="tabbable tabbable-custom tabbable-full-width">
      <div id="div_1" class="tab-content yincang"><div id="div_2" style="float:right" onclick="sells()">关闭</div>
        <div class="tab-pane row-fluid active" id="tab_1_1">
          <div class="alert" style="background:orange"><strong>系统提示：</strong> <br>一、公司红利提取为100的整倍数。</div>
          <div class="portlet box ">
            <div class="portlet-body ">

                  <div class="form-group" >
                      <label class="control-label" for="userNickName" >提取类型<span class="required">*</span></label>
                      <div class="col-xs-9">

                          <input type="text" class="form-control" value="公司红利" id="moneyflag" readonly="readonly">
<!--                          --><?php
//                          echo $form->textField ( $userinfo, '', array (
//                                  'class'               => 'form-control',
//                                  'id'                  => 'moneyflag',
//                                  'value'               => '公司红利',
//                                  'readonly'            => 'readonly'
//                          ) );
//                          ?>
                      </div>
                      <div class="help-hint" style="height:5px;"></div>
                      <span class="help-inline" > &nbsp;</span>
                      <div class="help-hint" style="height:15px;"></div>
                  </div>
                <?php $form = $this->beginWidget('CActiveForm', array(
                        'id'=>'commenform',
                        'enableAjaxValidation'=>true,
                        'enableClientValidation'=>true,
                        'focus'=>array($userinfo,'firstName'),
                )); ?>
                  <div class="form-group" >
                      <label class="control-label" for="userNickName" >提取金额<span class="required">*</span></label>
                      <div class="col-xs-9">
                          <?php
                          echo $form->textField ( $userinfo, 'ui_static_balance', array (
                                  'class'               => 'form-control',
                                  'id'                  => 'helpcount',
                                  'placeholder'         => '只可以填写100的倍数',
                          ) );
                          ?>
                      </div>
                      <div class="help-hint" style="height:5px;"></div>
                      <span class="help-inline" > &nbsp;</span>
                      <div class="help-hint" style="height:15px;"></div>
                  </div>
                <div class="form-group" >
                    <label class="control-label" for="userNickName" >安全密码<span class="required">*</span></label>
                    <div class="col-xs-9">
                        <?php
                        echo $form->passwordField ( $user, 'u_safe_pwd', array (
                                'class'               => 'form-control',
                                'id'                  => 'pass22',
                                'placeholder'         => '填写您的安全密码',
                        ) );
                        ?>
                    </div>
                    <div class="help-hint" style="height:5px;"></div>
                    <span class="help-inline" > &nbsp;</span>
                    <div class="help-hint" style="height:15px;"></div>
                </div>
                <div class="form-actions">
                  <button type="submit" class="btn blue" id="joinformsubbtn">确认申请(Submit)</button>
                </div>
              <?php $this->endWidget(); ?>
            </div>
          </div>
        </div>
      </div>
    <div class="footer">
    	<div class="footer-inner"> 2016 © superETO.com </div>
    	<div class="footer-tools"> <span class="go-top"> <i class="icon-angle-up"></i> </span> </div>
    </div>
</section>

<script type="text/javascript">
    function sell(){
      $('#div_1').addClass('xianshi')
    }
    function sells(){
      $('#div_1').removeClass('xianshi')
    }

</script>
