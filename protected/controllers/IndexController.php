<?php

/**
 * User: Yuan
 * Date: 2016-6-5
 * Time: 12:08:23
 */
class IndexController extends Controller
{

    public function accessRules() {
        return array (
            array (
                'allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array (
                    'login',
                    'mngr',
                    'APIs',
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
                    'list',
                    'staffEvent',
                    'staffMngr',
                    'StaffWSUpdate',
                    'timeList',
                    'getTimelist',
                    'getStaffList',
                    'OrderUpdate',
                    'realTimeList',
                    'getRealTimeList',
                    'card',
                    'CardRequest',
                    'NewRequestCard',
                    'Guarantee',
                    'GuaranteeView',
                    'News',
                    'comment',
                    'service',
                    'serviceBuyList',
                    'serviceList',
                    'msgList',
                    'serviceSet',
                    'inviteUser'
                ),
                'roles' => array (
                    'boss'
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
    }


    public function actionindex()
    {
        Yii::app()->user->id=1;
        $upload = new ShopForm ();

        $boss = UTool::getBoss ();
        $shop = UTool::getShop ();
        $this->layout = 'admin_boss';
        if ($shop ['ws_state'] == 2) {

            $count = OrderTemp::model ()->countByAttributes ( array (
                'ot_wash_shop_id' => $shop ['id']
            ) );

            if ($count < 1) {
                $shop->deleteOrderTempTable ( $shop ['id'], 0 );
                $shop->deleteOrderTempTable ( $shop ['id'], 1 );
                $shop->deleteOrderTempTable ( $shop ['id'], 2 );
                $shop->generateOrderTempTable ( $shop ['id'], 0 );
                $shop->generateOrderTempTable ( $shop ['id'], 1 );
                $shop->generateOrderTempTable ( $shop ['id'], 2 );
            }

            $_view = '_profile_wellcome';
        } else if ($shop ['ws_state'] == 1) {
            $_view = '_profile';
        } else {
            $_view = "_profile";
        }
        $this->render ( 'index', array (
                'shop' => $shop,
                'boss' => $boss,
                '_view' => $_view
            )
        );

    }


    public function actionlogin()
    {
//        print_r(123);die;
        // UTool::setCsrfValidator ();
       /* if (Yii::app ()->request->isAjaxRequest || Yii::app ()->request->isPostRequest) {
        } else {
            $urls = array (
                'urlReferrer' => Yii::app ()->request->urlReferrer,
                'urlCurrent' => Yii::app ()->request->url,
                'urlReturn' => Yii::app ()->user->returnUrl
            );
            Yii::log ( CJSON::encode ( $urls ), CLogger::LEVEL_INFO, 'mngr.' . $this->getId () . '.' . $this->getAction ()->getId ()  . 'src');
            Yii::app ()->session ['urlReferer'] = Yii::app ()->request->urlReferrer;
        }
        $this->layout = 'main_simple';

        if (! Yii::app ()->user->isGuest) {
            if (Yii::app ()->user->checkAccess ( 'boss' )) {
                $this->redirect ( array (
                    'Profile'
                ) );
                Yii::app ()->end ();
            }else{
                $this->redirect(Yii::app()->baseUrl);
            }
        }*/
        $this->layout='login';
        $model = new LoginForm ();
        $model->setScenario ( 'login' );

        if (isset ( $_POST ['ajax'] ) && $_POST ['ajax'] === 'login-form') {
            echo CActiveForm::validate ( $model );
            Yii::app ()->end ();
        }

        if (isset ( $_POST ['LoginForm'] )) {
            // // 校验令牌
            // if (! UTool::checkCsrf ()) {
            // throw new CHttpException ( 500, '请求异常，请稍后重试' );
            // Yii::app ()->end ();
            // }
            $model->attributes = $_POST ['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate ()) {
                $rltCheck = UTool::checkRepeatAction ( 5 );
                if ($rltCheck ['status']) {
                    // echo CJSON::encode ( $rltCheck );
                    Yii::app ()->user->setFlash ( 'loginError', $rltCheck ['msg'] );
                    // Yii::app ()->end ();
                } else
                {
                    $result = $model->login ();
                    if (!$result['status']){
                        Yii::app ()->user->setFlash ( 'loginError',$result['msg']);
                    }else if (!Yii::app ()->user->checkAccess ( 'boss' )){
                        Yii::app ()->user->setFlash ( 'loginError','不是有效的商家账号');
                    }else{
                        if (isset(Yii::app()->session['urlReferer'])){
                            $this->redirect(Yii::app()->session['urlReferer'],TRUE);
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
        // display the login form
        $this->render ( 'login', array (
            'model' => $model
        ) );
    }


}