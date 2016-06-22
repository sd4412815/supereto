<?php

/**
 * User: Yuan
 * Date: 2016-6-22
 * Time: 21:37
 */
class cftpackageController extends Controller
{
    public $layout='main';


    public function actionList()
    {

        $this->render('list');
    }
}