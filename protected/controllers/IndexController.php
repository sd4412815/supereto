<?php

/**
 * User: Yuan
 * Date: 2016-6-5
 * Time: 12:08:23
 */
class IndexController extends Controller
{

/*    public function accessRules() {
        return array (
            array (
                'allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array (
                    'login',
                    'reg',
                    'captcha',
                    'reset'
                ),
                'users' => array (
                    '*'
                )
            ),
            array (
                'allow',
                'actions' => array (
                    'index',
                ),
                'roles' => array (
                    '?'
                )
            )
            // 'message'=>'非授权访问',
        ,
            array (
                'allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array (),

                'users' => array (
                    '@'
                )
            ),
            array (
                'allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array (
                    'admin',
                    'delete'
                ),
                'users' => array (
                    'admin'
                )
            ),
            array (
                'deny', // deny all users
                'users' => array (
                    '*'
                )
            )
        );
    }*/

    public function actionindex()
    {

        $this->layout = 'admin_main';

        $this->render ( 'index');
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
            if (Yii::app ()->user->checkAccess ( 'boss' )) {
                $this->redirect ( array ('Profile'));
                Yii::app ()->end ();
            }else{
                $this->redirect(Yii::app()->baseUrl);
            }
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
                            $this->redirect($this->actionindex(),TRUE);
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
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app ()->errorHandler->error) {
            if (Yii::app ()->request->isAjaxRequest)
                echo $error ['message'];
            else
                echo json_encode($error);

        }
    }

}