<?php

/**
 * User: Yuan
 * Date: 2016-6-30
 * Time: 21:02
 */
class CustomerServiceController extends Controller
{

    /**
     * 添加客服
     */
    public function actionAdd()
    {
        $model=new CustomerService();

        if(isset($_POST['CustomerService'])){
            $model->attributes=$_POST['CustomerService'];
            $model->scenario='add';
            if($model->validate()){
                if($model->save()){
                    Yii::app()->user->setFlash('add','添加成功');
                }else{
                    Yii::app ()->user->setFlash ( 'add', '客服添加失败' );
                }
            }else{
                Yii::app ()->user->setFlash ( 'add', '客服添加失败' );
            }
        }
        $this->render('add',array(
            'model' =>$model,
            'title' =>'添加客服'
        ));
    }

    /**
     * 添加客服
     */
    public function actionEdit()
    {
        $model=CustomerService::model()->find(Yii::app()->request->getParam('id'));

        if(isset($_POST['CustomerService'])){
            $model->attributes=$_POST['CustomerService'];
            if($model->validate()){
                if($model->save()){
                    Yii::app()->user->setFlash('add','修改成功');
                }else{
                    Yii::app ()->user->setFlash ( 'add', '客服修改失败' );
                }
            }else{
                Yii::app ()->user->setFlash ( 'add', '客服修改失败' );
            }
        }
        $this->render('add',array(
            'model' =>$model,
            'title' =>'修改客服信息'
        ));
    }
    
    public function actionList()
    {

        $list=CustomerService::model()->findAll();

        $this->render('list',array(
            'list'=>$list,
        ));
    }

    /**
     * 删除
     */
    public function actionDel()
    {
        $rlt=UTool::iniFuncRlt();
        $id=Yii::app()->request->getParam('id');
        $re=CustomerService::model()->deleteByPk($id);
        if($re){
            $rlt['status']=true;
            $rlt['msg']='删除成功';
        }else{
            $rlt['msg']='删除失败';
        }

        echo CJSON::encode($rlt);
    }
}