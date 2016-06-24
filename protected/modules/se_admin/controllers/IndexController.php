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
        $this->render('index');
    }


    /**
     * 会员登陆
     */
    public function actionlogin()
    {
        $this->layout='login';
        if (Yii::app ()->request->isAjaxRequest || Yii::app ()->request->isPostRequest) {
        } else {
            $urls = array (
                'urlReferrer' => Yii::app ()->request->urlReferrer,
                'urlCurrent' => Yii::app ()->request->url,
                'urlReturn' => Yii::app ()->user->returnUrl
            );
            Yii::log ( CJSON::encode ( $urls ), CLogger::LEVEL_INFO, 'mngr.' . $this->getId () . '.' . $this->getAction ()->getId ()  . 'src');
            Yii::app ()->session ['urlReferer'] = Yii::app ()->request->urlReferrer;
        }

        if (! Yii::app ()->user->isGuest) {
            $this->redirect(Yii::app()->baseUrl);
        }
        $model = new LoginForm ();
        $model->setScenario ( 'login' );

        if (isset ( $_POST ['ajax'] ) && $_POST ['ajax'] === 'login-form') {
            echo CActiveForm::validate ( $model );
            Yii::app ()->end ();
        }

        if (isset ( $_POST['LoginForm'] )) {

            $model->attributes = $_POST ['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate ()) {
                $rltCheck = UTool::checkRepeatAction (3);
                if ($rltCheck ['status']) {
                    Yii::app ()->user->setFlash ( 'loginError', $rltCheck ['msg'] );
                } else
                {
                    $result = $model->login ();
                    if (!$result['status']){
                        Yii::app ()->user->setFlash ( 'loginError',$result['msg']);
                    }else{
                        if (isset(Yii::app()->session['urlReferer'])){
                            $this->redirect('index',TRUE);
//                            $this->redirect(Yii::app()->session['urlReferer'],TRUE);
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