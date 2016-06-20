<?php

/**
 * Created by PhpStorm.
 * Author: yuanzb (yuan_zb@qq.com)
 * DateTime: 16-6-20 下午3:58
 */
class CftType extends CActiveRecord
{
    public function tableName(){
        return '{{cft_package_type}}';
    }
    
    
    public static function model($className=__CLASS__){
        return parent::model($className);

    }
}