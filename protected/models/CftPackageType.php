<?php

/**
 * Created by PhpStorm.
 * Author: yuanzb (yuan_zb@qq.com)
 * DateTime: 16-6-20 下午4:19
 */
class CftPackageType extends CActiveRecord
{

    public $todayStatus;
    public $u_safe_pwd;
    public $captcha;
    public $u_tel;
    public $_identity;


    public function tableName(){
        return '{{cft_package_type}}';
    }



    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
    
}