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
		// public function UserInfo(){
		// 	$sql = 'select * from yy_user_info where userid = '.Yii::app ()->user->id;
		// 		 $result = yii::app()->db->createCommand($sql);
		// 		 $query = $result->queryAll();
		// 		 print_r($query);die;
		// 		 return array (
		// 						 $query [0],
		// 		);
		// }

    public function rules(){
        return array(
            //安全设置
            array ('ui_email ,ui_alipay,ui_wechat,ui_credit_card,smsCode,ui_bank_account,ui_bank_branch', 'safe'),
            //邮箱验证
            array('ui_email','email','message'=>'请输入正确的邮箱地址','on'=>'EditInfo'),
            //支付宝账号
            

        );
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
