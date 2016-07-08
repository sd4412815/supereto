<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class AUserIdentity extends CUserIdentity
{
	private $_id;
	private $_nick_name;
	
	
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate($autoLogin=FALSE)
	{

		$user_telephone =trim($this->username);
        $user = Adminuser::model()->getUserByLoginName($user_telephone);
        // var_dump($user);die;
        // p($this->password);die;
		if (!isset($user)){
			$this->errorCode = self::ERROR_USERNAME_INVALID;
		}else if($user->validatePassword($this->password) || $autoLogin){
			// echo "123";die;
			$this->_id = $user->id;

			$this->username = $user['username'];
			switch ($user['state']) {
				case 1:
					$this->_nick_name = '超级管理员';
					break;
				case 2:
					$this->_nick_name = '普通管理员';
					break;
				case 3:
					$this->_nick_name = '特权管理员';
					break;
				
				default:
					# code...
					break;
			}
			// $this->_nick_name = $user->u_name;
			$this->errorCode=self::ERROR_NONE;
		}else{
			$this->_id = $user->id;
			$this->errorCode = self::ERROR_PASSWORD_INVALID;

		}

		return $this->errorCode;
	}
	
	/**
	 * 返回用户ID
	 */
	public function getId()
	{
		return $this->_id;
	}
	
	public function  getName()
	{
		return  $this->_nick_name;
	}
	
	public function getUserName()
	{
		return $this->username;
	}
	
}