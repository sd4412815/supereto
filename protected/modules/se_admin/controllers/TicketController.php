<?php

/**
 * Created by PhpStorm.
 * Author: yuanzb (yuan_zb@qq.com)
 * DateTime: 16-6-25 下午4:39
 */
class TicketController extends Controller
{
    public function actionList(){
        $ticket=Ticket::model()->findAll();


        $this->render('list',array(
           'ticket'=>$ticket,
        ));
    }

}
