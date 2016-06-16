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
