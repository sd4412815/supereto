<?php

/**
 * Created by PhpStorm.
 * Author: yuanzb (yuan_zb@qq.com)
 * DateTime: 16-6-25 下午4:39
 */
class MessagesController extends Controller
{
    public function actionList(){
        $messages=OpenMessage::model()->findAll();


        $this->render('list',array(
           'messages'=>$messages,
        ));
    }
    
}