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
        $list=CustomerService::model()->findAll();


        $this->render('list',array(
            'list'=>$list,
        ));
    }
}