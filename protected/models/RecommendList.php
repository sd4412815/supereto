<?php

/**
 * Created by PhpStorm.
 * Author: yuanzb (yuan_zb@qq.com)
 * DateTime: 16-6-16 上午9:20
 */
class RecommendList extends CActiveRecord
{
    public function tableName(){
        return '{{recommend_list}}';
    }




    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     *
     * @param string $className
     *        	active record class name.
     * @return User the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model ( $className );
    }
}