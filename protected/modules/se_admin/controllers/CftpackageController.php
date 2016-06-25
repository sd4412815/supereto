<?php

/**
 * User: Yuan
 * Date: 2016-6-22
 * Time: 21:37
 */
class CftpackageController extends Controller
{
    public $layout='main';


    public function actionList()
    {
        $criteria = new CDbCriteria;
        
        $criteria->addCondition('cp_type = :cp_type');
        $criteria->params[':cp_type']=0;
        $criteria->order='cp_last_time DESC';
        $cftpackage=CftPackage::model()->findAll($criteria);

        $this->render('list',array(
            'cftpackage'=>$cftpackage,
        ));
    }
}