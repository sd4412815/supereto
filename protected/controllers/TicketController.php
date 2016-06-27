<?php

class TicketController extends Controller
{
  public function actionTicket() {
      // $tic = $_POST[''];
      $ticket = new Ticket();
      if(isset($_POST['Ticket'])) {
          $user = new User();
          $user=User::model()->find('id',array('id'=>YII::app()->user->id));
          p($user);die;
          $user->u_safe_pwd = $_POST['Ticket']['u_safe_pwd'];
          $user->scenario = 'Ticket';
        if($user->validate()){
            $ticket->attributes = $_POST['Ticket'];
            $ticket->scenario = 'Ticket';
          if ($ticket->validate()) {
              if ($ticket->save()) {
                $id = $ticket->attributes['id'];
                if($ticket->update()){
                $msg = new  Message();
                $msg['m_datetime'] = date('Y-m-d H:i:s');
                $msg['m_user_id'] = $id;
                $msg['m_level'] = Message::LEVEL_URGENCY;
                $msg['m_content'] = '门票转账成功';
                $msg['m_type'] = Message::TYPE_ACCOUNT;
                $msg['m_src'] = UTool::getRequestInfo();

                  if($msg->save()){
                    Yii::app()->user->setFlash('Ticket', '转账成功');
                  }else{
                    Yii::app()->user->setFlash('Ticket', '转账失败');
                  }
              }else{
                Yii::app()->user->setFlash('infoError',$ticket->getErrors());
              }
          }
        }
      }
  }
      // $ticket = Ticket::model()->find();
      $this->render('Ticket',array('ticket'=>$ticket));
  }

}
