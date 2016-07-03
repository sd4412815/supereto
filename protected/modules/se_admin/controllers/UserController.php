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
    
    
    public function actionEdit()
    {
        $id=Yii::app()->request->getParam('id');
        $user=User::model()->find($id);
        $userinfo=UserInfo::model()->find('ui_userid=:uid',array(':uid'=>$user->id));
//        p($user);
//        p($userinfo);die;
        //修改user表

        if(isset($_POST['User'])) {
            $user->attributes = $_POST ['User'];
            $user->scenario = 'su_edit';
            $user->u_join_date = date('Y-m-d H:i:s',time()) ;
            $user->u_login_date = date('Y-m-d H:i:s',time()) ;
            if ($user->validate()) {
                if ($user->save()) {
                    $user->attributes = $_POST ['User'];
                    $user->scenario = 'su_edit';
                    if($user->update()){
                        $userinfo->attributes = $_POST['UserInfo'];
                        $userinfo->scenario = 'su_edit';
                        $userinfo->ui_userid =$id;
                        if ($userinfo->validate()) {
                            if($userinfo->save()){
                                $msg = new  Message();
                                $msg['m_datetime'] = date('Y-m-d H:i:s');
                                $msg['m_user_id'] = $id;
                                $msg['m_level'] = Message::LEVEL_URGENCY;
                                $msg['m_content'] = '管理员编辑信息成功';
                                $msg['m_type'] = Message::TYPE_ACCOUNT;
                                $msg['m_src'] = UTool::getRequestInfo();
                                if($msg->save()){
                                    Yii::app()->user->setFlash('userinfo', '创建成功');
                                }else{
                                    Yii::app()->user->setFlash('infoError',$userinfo->getErrors());
                                }

                            }else{
                                Yii::app()->user->setFlash('infoError',$userinfo->getErrors());
                            }
                            $this->refresh(true);
                        }
                    }else{
                        Yii::app()->user->setFlash('userError',$user->getErrors());
                    }


                } else {
                    Yii::app()->user->setFlash('userError',$user->getErrors());
                }
            }else{
                Yii::app()->user->setFlash('userError',$user->getErrors());
            }
        }
        $userinfo1 = UserInfo::model ()->find(Yii::app ()->user->id);

        $this->render('edit',array('user'=>$user,'info'=>$userinfo));
    }

    /**
     * 删除
     */
    public function actionDel()
    {
        $rlt=UTool::iniFuncRlt();
        $id=Yii::app()->request->getParam('id');
        $re=User::model()->deleteByPk($id);
        if($re){
            $rlt['status']=true;
            $rlt['msg']='删除成功';
        }else{
            $rlt['msg']='删除失败';
        }

        echo CJSON::encode($rlt);
    }
}