<?php

/**
 * Created by PhpStorm.
 * Author: yuanzb (yuan_zb@qq.com)
 * DateTime: 16-6-25 下午4:39
 */
class MessagesController extends Controller
{


    public function actionAdd()
    {
      $model = new OpenMessage();
        if ($_POST) {
           $_POST['OpenMessage']['om_content'] = $_POST['om_content'];
           $_POST['OpenMessage']['om_addtime'] = time();
           $model->attributes = $_POST ['OpenMessage'];
            if ($model->save()) {
                Yii::app()->user->setFlash('userinfo','添加成功');
            } else {
                Yii::app()->user->setFlash('userinfo','添加失败');
            }
        }
        $this->render('add',array(
            'model'=>$model,
            'title'=>'添加公告'
        ));
    }

    public function actionEdit()
    {
        $model=OpenMessage::model()->find(Yii::app()->request->getParam('id'));

        $this->render('add',array(
            'model'=>$model,
            'title'=>'编辑公告'
        ));
    }
    /**
     * 列表
     */
    public function actionList(){


        $criteria = new CDbCriteria;
        $criteria->addCondition('om_status = :om_status');
        $criteria->params[':om_status']=0;
        $criteria->addCondition('om_outtime >= :om_outtime');
        $criteria->params[':om_outtime']=date('Y-m-d H:i:s',time());
        $messages=OpenMessage::model()->findAll($criteria);

        $this->render('list',array(
           'messages'=>$messages,
        ));
    }

    /**
     * 删除
     */
    public function actionDel()
    {
        $rlt=UTool::iniFuncRlt();
        $id=Yii::app()->request->getParam('id');
        $re=OpenMessage::model()->deleteByPk($id);
        if($re){
            $rlt['status']=true;
            $rlt['msg']='删除成功';
        }else{
            $rlt['msg']='删除失败';
        }

        echo CJSON::encode($rlt);
    }

}
