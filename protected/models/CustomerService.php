<?php
/**
 * User: Yuan
 * Date: 2016-7-1
 * Time: 20:15
 */
class CustomerService extends CActiveRecord{

    public function tableName(){
        return '{{customer_service}}';
    }

    /**
     *
     * @return array validation rules for model attributes.
     */
    public function rules() {
        return array (
            //安全设置
            array ('cs_name,cs_qq,cs_desc,cs_sort','safe'),
            //验证旧密码
            array ('cs_qq','numerical','message'=>'QQ必须为数字'),
            array ('cs_qq','unique','message'=>'QQ号码以存在','on'=>'add'),
        );
    }



    public static function model($className = __CLASS__) {
        return parent::model ( $className );
    }
}