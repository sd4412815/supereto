<?php

/**
 * Created by PhpStorm.
 * Author: yuanzb (yuan_zb@qq.com)
 * DateTime: 16-6-20 下午4:19
 */
class CftPackage extends CActiveRecord
{

    public $todayStatus;
    public $u_safe_pwd;
    public $captcha;
    public $u_tel;
    public $_identity;


    public function tableName(){
        return '{{cft_package}}';
    }

    public function rules()
    {
        return array(
            //安全设置
            array ('captcha,u_safe_pwd ,cp_type_id','safe'),

            array('u_safe_pwd','checkSafePwd','on'=>'buy'),
            array ('u_safe_pwd','required','message'=>'安全码不能为空','on'=>'buy'),
            //验证图形验证码
            array ('captcha','captcha','allowEmpty' => ! CCaptcha::checkRequirements (),'message' => '图形验证码过期，请点击刷新','on' => 'buy'),
        );

    }


    public function checkSafePwd($attribute,$params){
        if (! $this->hasErrors ()) {
            $this->_identity = new UserIdentity ( $this->u_tel, $this->u_safe_pwd);
            // $isBoss = $this->scenario=="boss"?true:false;
            if ( $this->_identity->authenticate () != 0){
                $this->addError ( 'password', '安全密码错误,请重试！' );
            }
        }
    }



    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
    
}