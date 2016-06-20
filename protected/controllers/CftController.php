<?php

/**
 * Created by PhpStorm.
 * Author: yuanzb (yuan_zb@qq.com)
 * DateTime: 16-6-20 下午3:36
 */
class CftController extends Controller
{
    /**
     * 买入
     */
    
    public function actionBuy()
    {
        $model=new CftPackage();
        $cftType=CftType::model()->findAll();

        $startTime=date('Y-m-d 00:00:00',time() );
        $endTime=date('Y-m-d 23:59:59',time() );

        $criteria = new CDbCriteria();
        $criteria->addCondition('cp_u_id = :uid');
        $criteria->params[':uid']=Yii::app()->user->id;
   		 if (isset($startTime) && isset($endTime)) {
             $criteria->addCondition('cp_add_time>=:start');
             $criteria->addCondition('cp_add_time<=:end');
             $criteria->params[':start'] = $startTime;
             $criteria->params[':end'] = $endTime;
         }
        $cftpackage=CftPackage::model()->find($criteria);
        if(count($cftpackage)>0){
            $model->todayStatus=1;
        }else{
            $model->todayStatus=1;
        }



        $this->render('buy',array(
            'model'     =>$model,
            'cftType'   =>$cftType
        ));
    }
}