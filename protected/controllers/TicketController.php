<?php

class TicketController extends Controller
{

    public $layout='main';
  /**
   * 门票转账
   */
  public function actionTicket() {
      $ticket = new Ticket();

      $userinfo = UserInfo::model()->find('ui_userid=:id',array(':id'=>Yii::app()->user->id));

      if(isset($_POST['Ticket'])) {
          $infoaccount = UserInfo::model()->find('ui_account_number=:id',array(':id'=>$_POST['Ticket']['t_account_number']));
        if(isset($infoaccount)&& $userinfo['ui_ticket_balance']>=$_POST['Ticket']['t_ticket_number']){
          $user = User::model()->find('id=:id',array(':id'=>Yii::app()->user->id));
          $user->u_safe_pwd=$_POST['Ticket']['u_safe_pwd'];
          $user->scenario = 'Ticket';
          if ($user->validate()) {
            $action = $_POST['Ticket'];
            $action ['t_ticket_time']=date('Y-m-d H:i:s',time());
            $ticket->attributes = $action;
            $ticket->scenario = 'Ticket';
            $id = $user->attributes['id'];
            // p($ticket->attributes);die;
              if ($ticket->validate()) {
                if($ticket->save()){
                  $info['ui_ticket_balance'] = $_POST['Ticket']['t_ticket_number'];
                  $userinfo['ui_ticket_balance'] = $userinfo['ui_ticket_balance']-$info['ui_ticket_balance'];
                  $infoaccount['ui_ticket_balance']= $infoaccount['ui_ticket_balance']+$info['ui_ticket_balance'];
                  if($userinfo->save()){
                    $infoaccount->save();
                    $msg = new  Message();
                    $msg['m_datetime'] = date('Y-m-d H:i:s');
                    $msg['m_user_id'] = $id;
                    $msg['m_level'] = Message::LEVEL_URGENCY;
                    $msg['m_content'] = '门票转账成功';
                    $msg['m_type'] = Message::TYPE_ACCOUNT;
                    $msg['m_src'] = UTool::getRequestInfo();
                      if($msg->save()){
                        Yii::app ()->user->setFlash ( 'success', '转账成功' );
                      }else{
                        Yii::app ()->user->setFlash ( 'success', '转账失败' );
                      }
                  }else{
                    Yii::app ()->user->setFlash ( 'success', '信息输入不正确' );
                  }

              }else{
                Yii::app()->user->setFlash('success',$ticket->getErrors());
              }
          }else{
            Yii::app ()->user->setFlash ( 'success', '信息输入不正确' );
          }
        }else{
          Yii::app ()->user->setFlash ( 'success', '安全码验证错误' );
      }
    }else{
      Yii::app ()->user->setFlash ( 'success', '目标人不存在-或者-没有那么多门票' );
    }
  }
      // $ticket = Ticket::model()->find();
      $this->render('Ticket',array('ticket'=>$ticket));
  }
    /**
     * 佣金清单
     */
    public function actioncommission()
    {
        $recommend = UserInfo::model ()->findAll('ui_referrer=:uid',array(':uid'=>Yii::app ()->user->id));
        $cftpackage=CftPackage::model()->findAll('cp_u_id=:uid',array(':uid'=>Yii::app()->user->id));
        // $cftpackagetype=CftPackageType::model()->findAll('cpt_price',array('id'=>$cftpackage->cp_u_id));
        $user=UserInfo::model()->findall('ui_referrer=:re',array(':re'=>Yii::app()->user->id));
        $count_user=count($user);
        $this->render('commission',array(
            'recommend'=>$recommend,
            'count_user'=>$count_user
        ));
    }


}
