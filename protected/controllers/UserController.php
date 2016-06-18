<?php
class UserController extends Controller {
	/**
	 * Declares class-based actions.
	 */
	public function actions() {
		return array (
				// captcha action renders the CAPTCHA image displayed on the contact page
				'captcha' => array (
						'class' => 'CCaptchaAction',
						'backColor' => 0xFFFFFF,
                        'height'    =>'34',
                        'width'     =>'80',
						'minLength' => 4, // 最短为4位
						'maxLength' => 4,  // 是长为4位
								),
				// page action renders "static" pages stored under 'protected/views/site/pages'
				// They can be accessed via: index.php?r=site/page&view=FileName
				'page' => array (
						'class' => 'CViewAction'
				)
		);
	}
	public $layout = 'main';

	/**
	 * 修改密码
	 */
	public function actionEditPwd()
	{
		$model = new User;
        Yii::app()->session['send_code']='yuanzb';//短信安全码
        $user=User::model()->find(Yii::app()->user->id);

        if (isset($_POST['User'])) {
            $model->attributes = $_POST ['User'];
            $model->scenario='EditPwd';

            if($model->validate()){
                $user->id=$user->id;

                $user->u_pwd = CPasswordHelper::hashPassword ( $model->u_pwd );
                $user->u_score = 0;
                $user->u_login_date = date ( 'Y-m-d H:i:s' );
                if($user->update()){

                    $msg =new  Message();
                    $msg['m_datetime']=date('Y-m-d H:i:s');
                    $msg['m_user_id'] = Yii::app ()->user->id ;
                    $msg['m_level']= Message::LEVEL_URGENCY;
                    $msg['m_content']='您更新了个人资料';
                    $msg['m_type']=Message::TYPE_ACCOUNT;
                    $msg['m_src']=UTool::getRequestInfo();
                    $msg->save();
                    Yii::app ()->user->setFlash ( 'userInfo', '个人信息更新成功' );
                }else {
                    Yii::app ()->user->setFlash ( 'userInfo', '个人信息更新失败' );
                }
                $this->refresh(true);
            }
		}

	    $this->render('EditPwd',array(
				'model'     =>$model,
                'user'      =>$user
		));
	}


    /**
     * ajax 验证手机号
     */
    public function actionAjaxCheckMobile()
    {
        $rlt=UTool::iniFuncRlt();
        $u_tel=$_GET['mobile'];
        $model=new User;
        $user = User::model ()->find($u_tel);
        if(!empty($user)){
            $rlt['status']=false;
        }else{
            $rlt['status']=true;
        }
        echo json_decode($rlt['status']);
    }
    /**
     * 修改资料
     */
	public function actionEditInfo()
	{
        $info=UserInfo::model()->find('ui_userid=:uid',array(':uid'=>YII::app()->user->id));
        if(!$info){
            $info=new UserInfo();
        }
        $user=User::model()->find(Yii::app()->user->id);

        //修改user表
        if(isset($_POST['User'])) {
            $user->attributes = $_POST ['User'];
            p($user);
            if ($user->validate()) {
                $user->u_nick_name = $_POST ['User']['u_nick_name'];
                if ($user->update()) {
                    //修改userinfo表
                    if (isset($_POST['UserInfo'])) {
                        $info->attributes = $_POST ['UserInfo'];
                        $info->scenario = 'EditInfo';
                        if ($user->validate()) {
                            if ($user->save()) {
                                $msg = new  Message();
                                $msg['m_datetime'] = date('Y-m-d H:i:s');
                                $msg['m_user_id'] = Yii::app()->user->id;
                                $msg['m_level'] = Message::LEVEL_URGENCY;
                                $msg['m_content'] = '您更新了个人资料';
                                $msg['m_type'] = Message::TYPE_ACCOUNT;
                                $msg['m_src'] = UTool::getRequestInfo();
                                $msg->save();
                                Yii::app()->user->setFlash('editInfo', '个人信息更新成功');
                            }else{
                                Yii::app()->user->setFlash('editInfo', '个人信息更新失败');
                            }
                        }
                    }
                } else {
                    Yii::app()->user->setFlash('editInfo', '个人信息更新失败');
                }
            }
        }


        $this->render('EditInfo',array(
            'user'  =>$user,
            'info'  =>$info,
        ));
	}

    /**
     * 新建用户（注册）
     */
    public function actionRegister()
    {
        $model=new User;
        $models=new UserInfo;
        if (!empty($_POST)) {
            $model->attributes=$_POST;
            if ($model->validate()) {
                p($model);die;
                User::model()->reg($model);
            }

        }
        $userinfo = UserInfo::model ()->find(Yii::app ()->user->id);
        $user = User::model ()->find(Yii::app ()->user->id);
        $this->render('register',array('model'=>$model,'models'=>$models,'userinfo'=>$userinfo,'user'=>$user));

    }

    /**
     * 推荐清单
     */
    public function actionRecommendList()
    {
        $model=new RecommendList;
        $recommend = RecommendList::model ()->findAll(Yii::app ()->user->id);
        $this->render('recommend_list',array('model'=>$model,'recommend'=>$recommend));
    }

    /**
     * 找回密码
     */
    public function actionReset($atype="找回密码") {

        unset(Yii::app()->session['resetStep']);
        unset(Yii::app()->session['resetUserId']);
        unset(Yii::app()->session['resetUserTel']);
        $model = new LoginForm ();
        $model->setScenario ( 'reset' );

        // if it is ajax validation request
        if (isset ( $_POST ['ajax'] ) && $_POST ['ajax'] === 'login-form') {
            echo CActiveForm::validate ( $model );
            Yii::app ()->end ();
        }

        // collect user input data
        if (isset ( $_POST ['LoginForm'] )) {
            // 校验令牌
            if (FALSE && ! UTool::checkCsrf ()) {
                throw new CHttpException ( 403, '错误请求' );
                Yii::app ()->end ();
            }

            $model->attributes = $_POST ['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate () ) {

                $rltCheck = UTool::checkRepeatAction ( 0 );
                if ($rltCheck ['status']) {
                    Yii::app ()->user->setFlash ( 'resetError', $rltCheck ['msg'] );
                } else {
                    $user_model = User::model ()->getUserByLoginName ( $model->u_tel );

                    if (! isset ( $user_model )) {
                        Yii::app ()->user->setFlash ( 'resetError', '该用户不存在' );
                    } else {
                        Yii::app ()->session ['resetUserId'] = $user_model ['id'];
                        Yii::app ()->session ['resetUserTel'] = $model ['u_tel'];
                        Yii::app ()->session ['resetStep'] = 'resetCheck';
                        Yii::app ()->session ['resetCheckOn'] = true;
                        $model->setScenario ( 'resetCheck' );

                        $this->render ( 'resetCheck', array (
                            'model' => $model ,
                            'atype'=>$atype,
                        ) );
                        Yii::app ()->end ();
                    } // end if user_model
                } // end if checkRepeat
            } else {
                Yii::app ()->user->setFlash ( 'resetError', '输入未通过验证' );
            } // end if validation
        }
        // display the login form
        $this->render ( 'reset', array (
            'model' => $model ,
            'atype'=>$atype,
        ) );
    }


    /**
     * 获取手机验证码
     */
    public function actionGetSmsCode()
    {
        $mobile=$_GET['mobile'];
        $sms=USms::sendEditPwd($mobile,Yii::app()->session['send_code']);
        echo json_encode($sms);
    }


    /**
     * 获取用户编号
     */
    public function actionGetNewAccountNumber()
    {
        $num=UTool::randomkeys(8);
        $num='ETO'.$num;
        $res=UserInfo::model()->find('ui_account_number=:num',array(':num'=>$num));

        if($res){
            self::actionGetNewAccountNumber();
        }else{
            echo CJSON::encode($num);
        }
    }





}
