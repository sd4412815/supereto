<?php

/**
 * Created by PhpStorm.
 * Author: yuanzb (yuan_zb@qq.com)
 * DateTime: 16-6-20 下午4:19
 */
class CftPackage extends CActiveRecord
{

    public $todayStatus;

    public function tableName(){
        return '{{cft_package}}';
    }






    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
    
}