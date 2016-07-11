<?php

/**
 * User: Yuan
 * Date: 2016-6-5
 * Time: 12:08:23
 */
class IndexController extends Controller
{

  public $layout='main';

    public function accessRules() {
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
                    'login',
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
           /* array (
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
            )*/
        );
    }


    public function actionindex()
    {
        if(Yii::app()->user->isGuest){
            $this->redirect(array('index/login'));
        }
      $userinfo = UserInfo::model ()->find('ui_userid=:id',array(':id'=>Yii::app ()->user->id));
      $gonggao = OpenMessage::model()->findAll();
      // p($gonggao);die;
      // $cft = cftPackage::model ()->findAll('cp_u_id=:id',array(':id'=>Yii::app ()->user->id));
      $cft = cftPackage::model ()->findAll(array(
                  'select'=>array('*'),
                  'condition' => 'cp_u_id='.Yii::app ()->user->id.' and cp_status=0',
              )
      );
      $sell = Selllog::model ()->findAll(array(
                  'select'=>array('*'),
                  'condition' => 's_uid='.Yii::app ()->user->id,
              )
      );
      $cfttype=array();
      foreach($cft as $k => $v){
          $cfttype[$k] = CftPackageType::model ()->find('cpt_sort=:cpt',array(':cpt'=>$v->attributes['cp_cpt_id']));
      }
      $this->render ( 'index', array (
          'userinfo' => $userinfo,
          'gonggao'  => $gonggao,
          'cft'  => $cft,
          'cfttype'  => $cfttype,
          'sell'  => $sell
      ));

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
    /**
     * 取消挂单
     */
    public function actionDel() {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $cft = CftPackage::model()->updateAll(array('cp_status'=>-1),'id=:id',array(':id'=>$id));
            if ($cft) {
                echo CJSON::encode(array('val'=>'取消成功'));
            }else{
                echo CJSON::encode(array('val'=>'取消失败'));
            }
        }
    }

}
