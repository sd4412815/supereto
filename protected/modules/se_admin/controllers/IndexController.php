<?php

/**
 * User: Yuan
 * Date: 2016-6-12
 * Time: 23:15
 */
class IndexController extends Controller
{
    public $layout='main';
    
    public function actionIndex()
    {
        if(!Yii::app()->session['admin']){
            $this->redirect(array('index/login'));
        }
        $this->render('index');
    }


    /**
     * 会员登陆
     */
    public function actionlogin()
    {

        $this->layout='login';
        $model = new LoginAdminForm ();
        $model->setScenario ( 'login' );
        if (isset ( $_POST ['ajax'] ) && $_POST ['ajax'] === 'login-form') {
            Yii::app ()->end ();
        }

        if (isset ( $_POST['LoginAdminForm'] )) {
            $model->attributes = $_POST ['LoginAdminForm'];
            if ($model->validate ()) {
                $rltCheck = UTool::checkRepeatAction (3);
                
                if ($rltCheck ['status']) {
                    Yii::app ()->user->setFlash ( 'loginError', $rltCheck ['msg'] );
                } else
                {

                    $result = $model->login ();
                    Yii::app()->session['admin']=true;
                    if (!$result['status']){
                        Yii::app ()->user->setFlash ( 'loginError',$result['msg']);
                    }else{
                        if (isset(Yii::app()->session['urlReferer'])){
                            $this->redirect('index',TRUE);
                            unset(Yii::app()->session['urlReferer']);
                        }else{
                            $this->redirect(Yii::app()->user->getReturnUrl(),TRUE);
                        }
                        Yii::app ()->end ();
                    }

                }
            } else {
                Yii::app ()->user->setFlash ( 'loginError', '输入未通过验证' );
            } // end if validate
        }

        $this->render ( 'login', array ('model' => $model));
    }


    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        Yii::app ()->user->logout ();
        Yii::app()->session->clear();
        Yii::app()->session->destroy();
        $this->redirect ('login');
    }

    
}