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
						'maxLength' => 6  // 是长为4位
								),
				// page action renders "static" pages stored under 'protected/views/site/pages'
				// They can be accessed via: index.php?r=site/page&view=FileName
				'page' => array (
						'class' => 'CViewAction'
				)
		);
	}
	public $layout = 'admin_main';

	/**
	 * 修改密码
	 */
	public function actionedit_pwd()
	{

		$model = new User;
		if ($_POST['User']) {

			if ($_POST['User']['new_pwd']!=$_POST['User']['confirm_pwd']) {
				Yii::app()->user->serFlash('edit_pwdError','两次密码不一致');
				Yii::app()->end();
			}

		}
	    $this->render('edit_pwd',array(
				'model'=>$model
		));
	}

    /**
     * 修改资料
     */
	public function actionedit_info()
	{
        $this->render('edit_info');
	}

    /**
     * 新建用户（注册）
     */
    public function actionregister()
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



}
