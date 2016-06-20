<?php

/**
 * This is the model class for table "{{User}}".
 *
 * The followings are the available columns in table '{{User}}':
 * @property integer $id
 * @property string $u_tel
 * @property string $u_pwd
 * @property string $u_name
 * @property integer $u_score
 * @property integer $u_car_brand
 * @property integer $u_car_type
 */
class User extends CActiveRecord {

    private $_identity;
    public $old_pwd;            //原密码
	public $confirm_pwd;        //确认密码
	public $captcha;            //图形验证码
	public $smsCode;            //短信验证码
    public $confirm_safe_pwd;   //安全密码——确认密码


    /**
	 *
	 * @return string the associated database table name
	 */
	public function tableName(){
		return '{{user}}';
	}

	/**
	 *
	 * @return array validation rules for model attributes.
	 */
	public function rules() {
		return array (
            //安全设置
            array ('old_pwd,u_name,u_nick_name,u_tel,u_safe_pwd ,u_pwd,
                    confirm_pwd,captcha,smsCode,u_safe_pwd,confirm_safe_pwd',
                    'safe'
            ),
            //验证旧密码
            array ('old_pwd','authenticate_old','on'=>'EditPwd'),
            array ('old_pwd','required','message'=>'原密码不能为空','on'=>'EditPwd'),
            //验证安全密码
            array('u_safe_pwd','checkSafePwd','on'=>'EditInfo'),
            array ('u_safe_pwd','required','message'=>'安全码不能为空','on'=>'EditInfo,Register'),
            array ('u_safe_pwd', 'length','min'=>6, 'max'=>16,'message'=>'安全密码位数不正确','on'=>'EditInfo,Register'),
            array ('confirm_safe_pwd','required','message'=>'安全码确认不能为空','on'=>'Register'),
            array ("confirm_safe_pwd","compare","compareAttribute"=>"u_safe_pwd","message"=>"两次安全码不一致",'on'=>'Register'),
            //验证密码和确认密码
            array ("confirm_pwd","compare","compareAttribute"=>"u_pwd","message"=>"两次密码不一致",'on'=>'EditPwd,Register'),
            array ("u_pwd","required","message"=>"新密码不能为空",'on'=>'EditPwd,Register'),
            array ("confirm_pwd","required","message"=>"确认密码不能为空",'on'=>'EditPwd,Register'),
            array ('u_pwd', 'length','min'=>6, 'max'=>16,'on'=>'EditPwdRegister'),
            array ('confirm_pwd', 'length','min'=>6, 'max'=>16,'on'=>'EditPwd,Register'),
            array ("u_pwd","validatePassword",'on'=>'EditPwd'),
            //手机号不能为空
            array ('u_tel','required','message'=>'手机号不能为空'),
            array ('u_tel', 'length', 'max'=>11,'min'=>11,'on'=>'EditPwd,EditInfo,Register'),
			//验证图形验证码
            array ('captcha','captcha','allowEmpty' => ! CCaptcha::checkRequirements (),'message' => '图形验证码过期，请点击刷新','on' => 'reset,EditPwd'),
            //验证手机验证码
            array ('smsCode','required','message'=>'手机验证码不能为空','on'=>'EditPwd,EditInfo'),
            array ('smsCode','match','pattern' => '/^\d{6}$/','message' => '短信验证码错误','on' => 'reg,EditPwd,EditInfo'),
            array ('smsCode','checkSmsCode','message' => '短信验证码错误','on' => 'reg,EditPwd,EditInfo'),
            array ('smsCode','length','min'=>6,'max' => 6,'tooLong' => '短信验证码错误','tooShort' => '短信验证码错误','on' => 'reg,EditPwd,EditInfo'),

            array ('u_nick_name','required','message'=>'昵称不能为空','on'=>'Register'),
            array ('u_name','required','message'=>'名字不能为空','on'=>'Register'),

        );
	}

	/**
	 *
	 * @return array relational rules.
	 */
	public function relations() {
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array (
				'messages' => array (
						self::HAS_MANY,
						'Message',
						'm_user_id'
				),
		)
		;
	}

	/**
	 *
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels() {
		return array (
				'id' => 'ID',
				'u_tel' => '手机号',
				'u_pwd' => '密码',
				'u_name' => '昵称',
				'u_score' => '积分',
				'u_nick_name' => '昵称',
				'u_age' => '年龄',
				'u_sex' => '性别',
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
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 *         based on the search/filter conditions.
	 */
	public function search() {
		// @todo Please modify the following code to remove attributes that should not be searched.
		$criteria = new CDbCriteria ();

		$criteria->compare ( 'id', $this->id );
		$criteria->compare ( 'u_tel', $this->u_tel, true );
		$criteria->compare ( 'u_pwd', $this->u_pwd, true );
		$criteria->compare ( 'u_name', $this->u_name, true );
		$criteria->compare ( 'u_score', $this->u_score );

		return new CActiveDataProvider ( $this, array (
				'criteria' => $criteria
		) );
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
    /**
     * 验证 旧密码是否正确
     * This is the 'authenticate' validator as declared in rules().
     */
    public function authenticate_old($attribute, $params) {
        if (! $this->hasErrors ()) {
            $this->_identity = new UserIdentity ( $this->u_tel, $this->old_pwd );
            // $isBoss = $this->scenario=="boss"?true:false;
            if ( $this->_identity->authenticate () != 0){
                $this->addError ( 'password', '密码错误,请重试！' );
            }
        }
    }

    /**
     * 验证密码是否正确
     * This is the 'authenticate' validator as declared in rules().
     */
    public function authenticate($attribute, $params) {
        if (! $this->hasErrors ()) {
            $this->_identity = new UserIdentity ( $this->u_tel, $this->u_pwd );
            if ( $this->_identity->authenticate () != 0){
                $this->addError ( 'password', '密码错误,请重试！' );
            }
        }
    }

	/**
	 * 验证密码
	 *
	 * @param unknown $password
	 * @return boolean
	 */
	public function validatePassword($password) {
		return CPasswordHelper::verifyPassword ( $password, $this->u_pwd );
	}

	/**
	 * 用户注册
	 *
	 * @param LoginForm $loginForm
	 * @return array
	 */
	public function reg($loginForm,$autoLogin=TRUE) {
		$rlt = UTool::iniFuncRlt ();
		$model = $loginForm;
		$user_model = new User ();
		$user_model ['u_tel'] = $model->u_tel;
		$user_model ['u_pwd'] = CPasswordHelper::hashPassword ( $model->u_pwd );
		$user_model ['u_name'] = '';
		$user_model ['u_member_id'] = '';
		$user_model ['u_score'] = 0;
		$user_model ['u_join_date'] = date ( 'Y-m-d H:i:s' );
		$user_model ['u_login_date'] = $user_model ['u_join_date'];
		$user_model ['u_type'] = 0; // 默认车主
		$user_model ['u_sex'] = 2; // 默认未知
		$user_model ['u_state'] = 0; // 默认正常
		$user_model ['u_age'] = 254; // 默认未知
		$user_model ['u_nick_name'] = '' . substr ( $model->u_tel, - 4, 4 );
		$user_model ['u_error_count'] = 0;

		if (! $user_model->validate ()) {
			$rlt ['msg'] .= $model->getErrors () . ';';
			// Yii::log ( '用户注册信息不符合规范',CLogger::LEVEL_INFO, 'mngr.user.reg.validate' );
		} elseif ($user_model->save ()) {
			$msg = new Message ();
			$msg ['m_content'] = '欢迎您注册我洗车，在线预约，养护爱车不用愁，省钱又省时';
			$msg ['m_datetime'] = date ( 'Y-m-d H:i:s' );
			$msg ['m_user_id'] = $user_model ['id'];
			$msg ['m_type'] = Message::TYPE_ACCOUNT;
			$msg['m_src']=UTool::getRequestInfo();
			$msg['m_level']=Message::LEVEL_NORM;
			$msg->save ();

			// 用户注册成功
			// 自动为用户增加车主角色
			$auth = Assignments::model ()->findByAttributes ( array (
					'itemname' => 'car_user',
					'userid' => $user_model ['id']
			) );
			if (! isset ( $auth )) {
				$auth = new Assignments ();
			}

			$auth->itemname = 'car_user';
			$auth->userid = $user_model ['id'];
			if (! $auth->save ()) {
				if (! $user_model->save ()) {
					Yii::log ( '初始化用户权限失败 userId:' . $user_model ['id'], CLogger::LEVEL_ERROR, 'mngr.user.reg.addAssignment' );
				}
				$rlt ['msg'] .= '初始化用户权限失败;';
			}

			if ($autoLogin) {
				$loginForm->setScenario ( 'login' );
				$r= $loginForm->login();
				if ($r['status']) {

				} else {
					Yii::log ( '用户登录失败次数增加 userId:' . $user_model ['id'], CLogger::LEVEL_WARNING, 'mngr.user.reg.login' );
				} // end if

			}
			$rlt ['status'] = true;
			$rlt ['data'] = $user_model;

		} else {
			// 用户注册失败
			$rlt ['msg'] = '保存用户注册信息失败;';
			Yii::log ( '用户注册失败' . CJSON::encode ( $user_model ), CLogger::LEVEL_WARNING, 'mngr.user.reg.save' );
		} // end if save

		return $rlt;
	}




	/**
	 * 根据用户名/手机号/ID查找用户信息
	 *
	 * @param string $loginStr
	 * @return NULL Ambigous mixed, NULL, multitype:CActiveRecord , multitype:unknown Ambigous <CActiveRecord, NULL> , unknown, multitype:unknown Ambigous <unknown, NULL> , multitype:, multitype:unknown >
	 */
	public function getUserByLoginName($loginStr) {
		$loginName = trim ( $loginStr );
		if ($loginName==0 || ! preg_match ( '/^\w{1,20}$/', $loginName )) {
			return null;
		}


		$criteria = new CDbCriteria ();
		if (! preg_match ( '/^1\d{10}&/', $loginName )) {
			$criteria->addCondition ( 'u_tel=:tel' );
			$criteria->params [':tel'] = $loginName;
		}
		$criteria->addCondition ( 'u_name=:name', 'OR' );
		$criteria->params [':name'] = $loginName;
		if (is_int ( ( int ) $loginName )) {
			$criteria->addCondition ( 'u_member_id=:uid', 'OR' );
			$criteria->params [':uid'] = $loginName;
		}

		$criteria->addCondition ( 'u_state=0', 'AND' );

		$user = User::model ()->find ( $criteria );

		return $user;
	}

	/**
	 *
	 * @param int $num
	 * @param int $cityId
	 * @return array
	 */
	public function getTopUsers($num, $cityId) {
		$criteria = new CDbCriteria ();
		// $criteria->select = 's_name, s_sex, s_age, s_wash_shop_id, id, s_user_id';
		$criteria->order = 'u_score  DESC';
		$criteria->condition = 'u_type=0';
		// $criteria->addCondition(':qqqq=');
		$criteria->limit = $num;

		$items = $this->findAll ( $criteria );
		return $items;
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
