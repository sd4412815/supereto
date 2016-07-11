<?php

class OpenMessageController extends Controller
{
    public $layout = 'main';
    public function actionOpenMessage() {
      if($_GET['id']){
        $id = $_GET['id'];
      }
      $msg = OpenMessage::model()->find('id=:id',array(':id'=>$id));
      $this->render('openmessage',array('msg'=>$msg));
    }

}
