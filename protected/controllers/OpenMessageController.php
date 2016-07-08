<?php

class OpenMessageController extends Controller
{
    public $layout = 'main';
    public function actionOpenMessage() {
//      $msg = new OpenMessage();
      $msg = OpenMessage::model()->findAll();
      $this->render('openmessage',array('msg'=>$msg));
    }

}
