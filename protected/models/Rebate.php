<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/7
 * Time: 11:17
 */
class Rebate extends CActiveRecord
{
    public  function tableName(){
        return '{{rebate}}';
    }

    public function rebatelog($uid,$fromid,$rebate,$uprice,$fromprice,$price){
        $rebatelog=new Rebate();
        $rebatelog->b_uid=$uid;
        $rebatelog->b_from_id=$fromid;
        $rebatelog->b_rebate=$rebate;
        $rebatelog->b_u_price=$uprice;
        $rebatelog->b_price=$price;
        $rebatelog->b_from_price=$fromprice;
        $rebatelog->b_add_time=date('Y-m-d H:i:s');
        $rebatelog->save();
    }

    public static function model($className=__CLASS__){
        return parent::model($className);
    }
    
}