<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/7
 * Time: 16:58
 */
class Selllog extends CActiveRecord
{
    public function tableName(){
        return '{{selllog}}';
    }

    public function log($uid,$balance){
        $selllog=new Selllog();
        $selllog->s_uid=$uid;
        $selllog->s_balance=$balance;
        $selllog->s_add_time=date('Y-m-d H:i:s');
        $selllog->save();
    }




    public static function model($className=__CLASS__){
        return parent::model($className);
    }

}