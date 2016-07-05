<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class UserInfo extends CActiveRecord {


	public function tableName(){
	    return '{{user_info}}';
	}


    public function rules(){
        return array(
            //安全设置
            array ('ui_email ,ui_alipay,ui_wechat,ui_credit_card,smsCode,ui_bank_account,ui_bank_branch', 'safe'),
            //邮箱验证
            array('ui_email','email','message'=>'请输入正确的邮箱地址','on'=>'EditInfo,su_edit'),
            //支付宝账号
            array ('ui_alipay', 'length', 'max'=>30, 'message'=>'支付宝账号格式错位','min'=>5,'on'=>'EditInfo,su_edit'),
            //微信号
            array ('ui_wechat', 'length', 'max'=>30,'min'=>3, 'message'=>'微信号格式错位','on'=>'EditInfo,su_edit'),
            //淘宝号验证
            array ('ui_taobao','required','message'=>'淘宝账号不能为空','on'=>'RegisterInfo'),
            //银行卡号
            array ('ui_credit_card', 'numerical', 'message'=>'银行卡号格式错位','on'=>'EditInfo,su_edit'),

        );
    }


    /**
     * 验证短信验证码
     * @param $attribute
     * @param $params
     */
    public function checkSmsCode($attribute, $params) {
        if (YII_DEBUG){
            return ;
        }
        if (! isset ( Yii::app ()->session ['mobile_code'] )) {
            $this->addError ( $attribute, '短信验证码错误' );
        } else if (! preg_match ( '/^\d{6}$/', $this->smsCode ) || $this->smsCode != Yii::app ()->session ['mobile_code']) {
            $this->addError ( $attribute, '短信验证码错误' );
        }
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
