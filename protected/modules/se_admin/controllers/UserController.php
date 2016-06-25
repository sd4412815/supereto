<?php

/**
 * Created by PhpStorm.
 * Author: yuanzb (yuan_zb@qq.com)
 * DateTime: 16-6-25 下午4:30
 */
class UserController extends Controller
{
    public function actionList(){

        $user=User::model()->findAll();


        $this->render('list',array(
            'user'=>$user,
        ));
    }
}