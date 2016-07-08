<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class LoginAdminForm extends CFormModel {
	public $username; // 手机号
	public $password; // 密码
	public $rememberMe = false; // 记住下次自动登录
	private $_identity;
	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules() {
		return array (
				array (
						'username',
						'required',
						'message' => '用户名不能为空', 
						'on'=>'reg,login,reset,mreg,invite'
				),
				array (
						'password',
						'required',
						'message' => '密码不能为空',
						'on'=>'reg,login,resetPWD,mreg',
				),
		);
	}
	
	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels() {
		return array (
				'rememberMe' => '记住登录',
				'username' => (($this->scenario =='reg' || $this->scenario='invite')?'手机号':'账户'),
				// 'u_pwd' => '密码',
				// 'u_pwd2' => '确认密码',
				// 'verifyCode' => '图形验证码',
				// 'smsCode' => '短信验证码',
				// 'agree' => '用户协议' 
		);
	}
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
	 * Authenticates the password.
	 * This is the 'authenticate' validator as declared in rules().
	 */
	public function authenticate($attribute, $params) {
		p($this->hasErrors ());die;
		if (! $this->hasErrors ()) {
			$this->_identity = new AUserIdentity ( $this->username, $this->password );
			p($this->_identity);die;
			// $isBoss = $this->scenario=="boss"?true:false;
			if ( $this->_identity->authenticate () != 0){
				$this->addError ( 'password', '用户名或密码错误.' );
			}
		}
	}
	
// 	public function autoLogin(){
// 		$this->
// 	}

	
	/**
	 * Logs in the user using the given username and password in the model.
	 *
	 * @return boolean whether login is successful
	 */
	public function login($autoLogin=FALSE) {
		$rlt = UTool::iniFuncRlt();
		if ($this->_identity === null) {
			
			$this->_identity = new AUserIdentity ( $this->username, $this->password );
			
			$this->_identity->authenticate ($autoLogin);
			// p($this->_identity);die;
		}
		// print_r(AUserIdentity::ERROR_NONE);die;
		if ($this->_identity->errorCode === AUserIdentity::ERROR_NONE) {
			$duration = $this->rememberMe ? 3600 * 24 * 30 : 0; // 30 days
			Yii::app ()->user->login ( $this->_identity, $duration );
			$user = Adminuser::model()->findByPk(5);
			Yii::app()->user->setState('username',$user['username']);
			// $user['u_login_date']=date('Y-m-d H:i:m');
			// $user['u_error_count'] =0;
			// var_dump(Yii::app()->user->id);die;
			// echo 321;die;
			// if($user->save()){
			// 	$msg = new Message();
			// 	$msg['m_content']='欢迎使用superETO';
			// 	$msg['m_datetime']=date('Y-m-d H:i:s');
			// 	$msg['m_type']=Message::TYPE_LOGIN;
			// 	$msg['m_level']=Message::LEVEL_NORM;
			// 	$msg['m_user_id']=$user['id'];
			// 	$msg['m_src']=UTool::getRequestInfo();
			// 	$msg->save();
			
			// } 
				@Yii::log($user['id'].'-login-'.$user['username'].'-'.Yii::app()->request->userHostAddress.'-'.Yii::app()->request->userHost.'-'.Yii::app()->request->userAgent,CLogger::LEVEL_INFO,'user.login.success');
			$rlt['status']=true;
			$rlt['data']=$user['id'];
			$rlt['msg']='登录成功';
			return  $rlt;
		} 
		$rlt['msg']='登录失败，请重试';
		return $rlt;
	}
	
	public function invite(){
		
		
	}
	
}
