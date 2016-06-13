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

		if (isset($_POST['User'])) {

            $model->attributes = $_POST['User'];
            $model->scenario='EditPwd';
            
            $valid = $model->validate();
            if($valid){
//                $model->save();
                echo '过啦';
            }else{
                echo '没过';
            }
		}

        $user=User::model()->find(Yii::app()->user->id);

	    $this->render('EditPwd',array(
				'model'     =>$model,
                'user'      =>$user
		));
	}

    /**
     * 修改资料
     */
	public function actionEditInfo()
	{

      $this->render('edit_info');
	}

    /**
     * 新建用户（注册）
     */
    public function actionRegister()
    {
        $this->render('register');
    }

    /**
     * 推荐清单
     */
    public function actionrecommend_list()
    {
        $this->render('recommend_list');
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
                    // echo CJSON::encode($rltCheck);
                    Yii::app ()->user->setFlash ( 'resetError', $rltCheck ['msg'] );
                    // Yii::app()->end();
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
                        // $this->redirect(array('user/resetCheck'));
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
    public function actionget_mobile_code()
    {
        $mobile=$_GET['mobile'];
        $mobile='15642091931';

        $sms=USms::sendEditPwd($mobile,Yii::app()->session['send_code']);

        echo json_encode($sms);

    }





}
