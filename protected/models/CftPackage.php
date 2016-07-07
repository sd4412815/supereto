<?php

/**
 * Created by PhpStorm.
 * Author: yuanzb (yuan_zb@qq.com)
 * DateTime: 16-6-20 下午4:19
 */
class CftPackage extends CActiveRecord
{

    public $todayStatus;
    public $u_safe_pwd;
    public $captcha;
    public $u_tel;
    public $_identity;


    public function tableName(){
        return '{{cft_package}}';
    }

    public function rules()
    {
        return array(
            //安全设置
            array ('captcha,u_safe_pwd ,cp_type_id','safe'),

//            array('u_safe_pwd','checkSafePwd','on'=>'buy'),
//            array ('u_safe_pwd','required','message'=>'安全码不能为空','on'=>'buy'),
            //验证图形验证码
            array ('captcha','captcha','allowEmpty' => ! CCaptcha::checkRequirements (),'message' => '图形验证码过期，请点击刷新','on' => 'buy'),
        );

    }



    public function Rebate($uid,$oid){
        $rebatelog=new Rebate();
        $info=UserInfo::model()->find('ui_userid=:uid',array(':uid'=>$uid));
        $order=$this->find('id=:id',array(':id'=>$oid));
        $order_type=CftPackageType::model()->find('id=:id',array(':id'=>$order->cp_cpt_id));
        //3代
        $info3=UserInfo::model()->find('ui_userid=:uid3',array(':uid3'=>$info->ui_referrer));
        if($info->ui_referrer!=$uid) {

            if ($info3->ui_referrer != 0) {
                $criteria = new CDbCriteria;
                $criteria->addCondition('cp_u_id = :id');
                $criteria->params[':id'] = $info3->ui_userid;
                $criteria->addCondition('cp_type = 0');
                $order3 = $this->find($criteria);
                if ($order3) {
                    $order_type3 = CftPackageType::model()->find('id=:id', array(':id' => $order3->cp_cpt_id));
                    if ($order_type->cpt_price > $order_type3->cpt_price) {
                        $balance3 = $order_type3->cpt_price * 0.05;
                    } else {
                        $balance3 = $order_type->cpt_price * 0.05;
                    }
                    $info3->ui_static_balance = $info3->ui_static_balance + $balance3;
                    $info3->save();
                    $rebatelog->rebatelog($info3->ui_userid,$info->ui_userid,'5',$order_type3->cpt_price,$order_type->cpt_price,$balance3);
                }

                //2代
                $info2 = UserInfo::model()->find('ui_userid=:uid3', array(':uid3' => $info3->ui_referrer));
                if ($info2->ui_referrer != 0) {
                    $criteria = new CDbCriteria;
                    $criteria->addCondition('cp_u_id = :id');
                    $criteria->params[':id'] = $info2->ui_userid;
                    $criteria->addCondition('cp_type = 0');
                    $order2 = $this->find($criteria);
                    if ($order2) {
                        $order_type2 = CftPackageType::model()->find('id=:id', array(':id' => $order2->cp_cpt_id));
                        if ($order_type->cpt_price > $order_type2->cpt_price) {
                            $balance2 = $order_type2->cpt_price * 0.03;
                        } else {
                            $balance2 = $order_type->cpt_price * 0.03;
                        }
                        $info2->ui_static_balance = $info2->ui_static_balance + $balance2;
                        $info2->save();
                        $rebatelog->rebatelog($info2->ui_userid,$info->ui_userid,'5',$order_type2->cpt_price,$order_type->cpt_price,$balance2);
                    }

                    //1代
                    $info1 = UserInfo::model()->find('ui_userid=:uid3', array(':uid3' => $info2->ui_referrer));
                    if ($info1->ui_referrer != 0) {
                        $criteria = new CDbCriteria;
                        $criteria->addCondition('cp_u_id = :id');
                        $criteria->params[':id'] = $info1->ui_userid;
                        $criteria->addCondition('cp_type = 0');
                        $order1 = $this->find($criteria);
                        if ($order1) {
                            $order_type1 = CftPackageType::model()->find('id=:id', array(':id' => $order1->cp_cpt_id));
                            if ($order_type->cpt_price > $order_type1->cpt_price) {
                                $balance1 = $order_type1->cpt_price * 0.01;
                            } else {
                                $balance1 = $order_type->cpt_price * 0.01;
                            }
                            $info1->ui_static_balance = $info1->ui_static_balance + $balance1;
                            $info1->save();
                            $rebatelog->rebatelog($info1->ui_userid,$info->ui_userid,'5',$order_type1->cpt_price,$order_type->cpt_price,$balance1);
                        }
                    }
                }
            }
        }


    }




    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
    
}