<?php

class OpenMessageController extends Controller
{
    public $layout = 'main';
    public function actionOpenMessage() {
        if(Yii::app()->user->isGuest || Yii::app()->session['adming']){
            Yii::app ()->user->logout ();
            Yii::app()->session->clear();
            Yii::app()->session->destroy();
            $this->redirect ('index/login');
        }
      if($_GET['id']){
        $id = $_GET['id'];
      }
      $msg = OpenMessage::model()->find('id=:id',array(':id'=>$id));
      $this->render('openmessage',array('msg'=>$msg));
    }

}
