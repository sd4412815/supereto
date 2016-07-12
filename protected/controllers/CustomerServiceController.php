<?php

/**
 * User: Yuan
 * Date: 2016-7-3
 * Time: 13:04
 */
class CustomerServiceController extends Controller
{

    public $layout='main';

    public function actionList()
    {
        if(Yii::app()->user->isGuest || Yii::app()->session['adming']){
            Yii::app ()->user->logout ();
            Yii::app()->session->clear();
            Yii::app()->session->destroy();
            $this->redirect ('index/login');
        }
        $list=CustomerService::model()->findAll();


        $this->render('list',array(
            'list'=>$list,
        ));
    }
}