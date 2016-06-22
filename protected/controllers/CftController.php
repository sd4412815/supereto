<?php

/**
 * Created by PhpStorm.
 * Author: yuanzb (yuan_zb@qq.com)
 * DateTime: 16-6-20 下午3:36
 */
class CftController extends Controller
{
    public $layout='main';
    public function actions(){
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array (
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
                'height'    =>'34',
                'width'     =>'80',
                'minLength' => 4, // 最短为4位
                'maxLength' => 4,  // 是长为4位
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array (
                'class' => 'CViewAction'
            )
        );
    }
    /**
     * 买入
     */
    
    public function actionBuy()
    {
        $model=new CftPackage();
        $user=User::model()->find(Yii::app()->user->id);
        $cftType=CftType::model()->findAll();
        $cftType=UTool::objToArray($cftType);
        $cftType = array_column($cftType, 'cpt_name', 'id');

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
            $model->todayStatus=0;
        }


        if(isset($_POST['CftPackage'])){
            if(count($cftpackage)>0){
                Yii::app ()->user->setFlash ( 'error', '您今天已经挂过单啦！');
                Yii::app()->end();
            }
            $model->attributes=$_POST['CftPackage'];
            $model->scenario='buy';
            $model->u_tel=$user->u_tel;
            if($model->validate()){
                $model->cp_type=0;
                $model->cp_cpt_id=$_POST['CftPackage']['cp_cpt_id'];
                $model->cp_u_id=Yii::app ()->user->id ;
                $model->cp_add_time=date('Y-m-d H:i:s',time());
                $model->cp_last_time=date('Y-m-d H:i:s',time());
                $model->cp_status=0;

                if($model->save()){
                    $msg =new  Message();
                    $msg['m_datetime']=date('Y-m-d H:i:s');
                    $msg['m_user_id'] = Yii::app ()->user->id ;
                    $msg['m_level']= Message::LEVEL_URGENCY;
                    $msg['m_content']='您成功的购买了ETO理财包';
                    $msg['m_type']=Message::TYPE_ACCOUNT;
                    $msg['m_src']=UTool::getRequestInfo();
                    $msg->save();
                    Yii::app ()->user->setFlash ( 'success', '您成功的购买了ETO理财包' );
                }else{
                    Yii::app ()->user->setFlash ( 'error', $model->getErrors());
                }
            }else{
                Yii::app ()->user->setFlash ( 'error', $model->getErrors());
            }
        }




        $this->render('buy',array(
            'model'     =>$model,
            'cftType'   =>$cftType
        ));
    }

    /**
     * 卖出
     */
    public function actionSell()
    {


        $this->render('sell',array(
            
        ));
    }
    /**
     * 买入记录
     */
    public function actionBuyLog()
    {

        $criteria = new CDbCriteria;
        $criteria->addCondition('cp_u_id = :cp_u_id');
        $criteria->params[':cp_u_id']=Yii::app()->user->id;
        $criteria->addCondition('cp_type = :cp_type');
        $criteria->params[':cp_type']=0;
        $criteria->order='cp_last_time DESC';
        $cftpackage=CftPackage::model()->findAll($criteria);


        $this->render('buylog',array(
            'cftpackage'=>$cftpackage,
        ));
    }

    /**
     * 卖出记录
     */
    public function actionSellLog()
    {
        $criteria = new CDbCriteria;
        $criteria->addCondition('cp_u_id = :cp_u_id');
        $criteria->params[':cp_u_id']=Yii::app()->user->id;
        $criteria->addCondition('cp_type = :cp_type');
        $criteria->params[':cp_type']=1;
        $criteria->order='cp_last_time DESC';
        $cftpackage=CftPackage::model()->findAll($criteria);


        $this->render('selllog',array(
            'cftpackage'=>$cftpackage,
        ));
    }
}