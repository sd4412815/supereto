<?php
/**
 * Created by PhpStorm.
 * Author: yuanzb (yuan_zb@qq.com)
 * DateTime: 16-6-20 下午3:38
 */
$this->pageTitle='购买ETO理财包';

?>


<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="<?php echo Yii::app()->createUrl('index/index') ?>">Home</a>
        <i class="icon-angle-right"></i>
    </li>
    <li>
        <a href="<?php echo Yii::app()->createUrl('cft/buy') ?>">买入ETO包</a>
    </li>
</ul>


<section class="content" style="font-size: 12px;">
    <div class="alert alert-error"><strong>系统提示：</strong> <br>
        一、每天只能挂一单<br>
        <strong>风险提示：</strong> <br>
        本人正式申明：我已完全了解所有投资可能的风险，我觉得参与BBG爱心互助平台，愿意对自己认可的BBG爱心互助投资，并愿意为项目的市场营销推广贡献力量。
    </div>
    
    

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'user-form',
        'enableAjaxValidation'=>true,
        'enableClientValidation'=>true,
        'focus'=>array($model,'firstName'),
        'htmlOptions' => array (
            'class' => 'form-horizontal',
            'style'=>'margin-top:30px;'
        ))
    ); ?>
        <div class="form-group">
            <label class="control-label col-xs-4" for="">挂单信息<span class="required">&nbsp;</span></label>
            <div class="col-xs-8 col-sm-4">
                <span class="form-show" style="font-size:14px;">
                    <?php if($model->todayStatus==0){ ?>
                    <font color="green">恭喜您，现在可以挂单啦！</font>
                    <?php }else{ ?>
                        <font color="red">很抱歉，您今天已经挂单啦！</font>
                    <?php } ?>
                </span>
            </div>
        </div>
    
    
        <div class="form-group">
            <label class="control-label col-xs-4" for="">选择M包<span class="required">*</span></label>
            <div class="col-xs-8 col-sm-4">
                <?php echo $form->dropDownList() ?>
                <select name="mpackage_jibie" id="mpackage_jibie" class="span3 m-wrap">
                    <option value="1000">RMB：1000元理财包</option>
                    <option value="2000">RMB：2000元理财包</option>
                    <option value="5000">RMB：5000元理财包</option>
                    <option value="10000">RMB：10000元理财包</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-4" for="">安全密码<span class="required">*</span></label>
            <div class="col-xs-8 col-sm-4">
                <input name="pass22" type="password" class="span3 m-wrap" id="pass22" placeholder="输入安全密码" value="" maxlength="12" oncontextmenu="return false" onpaste="return false" onkeyup="value = value.replace(/[^\w\.\/]/ig, '')" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII=&quot;);" autocomplete="off">
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label col-xs-4">图形验证码<span class="required">*</span></label>
            <div class="col-xs-8 col-sm-4">
                <input name="IMGCode" type="text" class="span3 m-wrap" id="IMGCode" placeholder="图形验证码" value="" maxlength="6" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII=&quot;);" autocomplete="off"> &nbsp;<img style="cursor:pointer;height:34px;" title="刷新验证码" id="refresh2" border="0" src="captcha.php" onclick="document.getElementById('refresh2').src='captcha.php?t='+Math.random()">
            </div>
        </div>
        
        
        <div class="form-actions">
            <button type="submit" class="btn blue" id="joinformsubbtn">确认买入(Submit)</button>
        </div>
    <?php $this->endWidget(); ?>





</section>



