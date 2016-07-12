<?php
class USms{
	
	/**
	 * 发送短信验证码
	 * @param string $mobile
	 * @param string $content
	 * @return Ambigous <string, multitype:>
	 */
	private static function sendSms($mobile, $post_send_code, $real_send_code, $content){
		$send_code = $post_send_code;
		$mobile_code = $real_send_code;
		
		$rlt = UTool::iniFuncRlt();

		$sendRlt = USms::_sendSms($mobile, $content);
		if ( $sendRlt['status'] ) {
			Yii::app ()->session ['mobile'] = $mobile;
			Yii::app ()->session ['mobile_code'] = $mobile_code;
			$rlt = $sendRlt;	
		}else {
			$rlt = $sendRlt;
		}
		
		return $rlt;
		
	}
	
	/**
	 * 发送短信验证码
	 * @param string $mobile
	 * @param string $content
	 * @return Ambigous <string, multitype:>
	 */
	private static function _sendSms($mobile, $content){
//		Yii::log($content,CLogger::LEVEL_INFO,'mngr.sms.msg.'.$mobile);
		$rlt = UTool::iniFuncRlt();
		/*if (YII_DEBUG){
			Yii::app ()->session ['mobile_code'] = '222222';
			$rlt['status']=true;
			$rlt['msg']='调试，222222';
			return $rlt;
            Yii::app()->end();
		}*/
		$target = "http://106.ihuyi.cn/webservice/sms.php?method=Submit";
		$post_data = "account=cf_FXGJ&password=" . md5 ( 'weizhi24' ) . "&mobile=" . $mobile . "&content=" . rawurlencode ( $content );
		// $post_data = "account=cf_xiche&password=123456&mobile=".$mobile."&content=".rawurlencode("您的验证码是：4290。请不要把验证码泄露给其他人。如非本人操作，可不用理会！");
		// 密码可以使用明文密码或使用32位MD5加密
	
		$sendRlt = UTool::curlPost ( $target, $post_data );
		$gets = UTool::xml_to_array ( $sendRlt );
		if ($gets ['SubmitResult'] ['code'] == 2) {
			$rlt ['status'] = true;
			$rlt ['msg'] = '验证码已发送';
		} else {
			$rlt ['msg'] ='短信验证服务器忙，请稍后再试'.$gets ['SubmitResult'] ['code'].$mobile;
		}
		Yii::log(json_encode($gets,JSON_UNESCAPED_UNICODE),CLogger::LEVEL_INFO,'mngr.sms.rlt.'.$mobile);
		$rlt['status']=true;
	
		return $rlt;
	
	}
	
	/**
	 * 检查发送验证码前
	 * @param string $mobile
	 * @param string $send_code
	 * @return string|Ambigous <string, boolean>
	 */
	public static function check($mobile, $send_code){
		$rlt = UTool::iniFuncRlt ();
		$isTel = preg_match('/^1\d{10}$/', $mobile);

		if (!Yii::app ()->request->isPostRequest||empty ( Yii::app ()->session ['send_code'] )|| !$isTel) {
			$rlt ['msg'] = '请输入有效手机号！';
			return  $rlt ;
		}
		
		if (! preg_match ( '/^1\d{10}$/', $mobile )) {
			$rlt ['msg'] = '手机号码格式不正确';
			return  $rlt ;
		}
		
		if (empty ( Yii::app ()->session ['send_code'] ) or $send_code != Yii::app ()->session ['send_code']) {
			// 防用户恶意请求
			$rlt ['msg'] = '请求超时，请刷新页面后重试';
			return  $rlt ;
		}
		
		$rlt['status']=true;
		return $rlt;
	}
	
	
	public static  function  sendInviteSmsReg($mobile,$bossId, $shopName, $shortUrl, $isNewReg=TRUE){
		$rlt = UTool::iniFuncRlt();

        if ($isNewReg){
        $content = '尊敬的车主，您已成功注册“我洗车”'.$shopName.'会员'.$shortUrl.'，默认密码手机尾号后4位，欢迎登录';
        }else{
            $content = '尊敬的车主，您已成功加入“我洗车”'.$shopName.'会员'.$shortUrl.'，欢迎登录';
        }

		$sendRlt = USms::_sendSms($mobile, $content);

		$msg = new Message();
		$msg['m_datetime']=date('Y-m-d H:i:s');
		$msg['m_user_id'] = $bossId;
		$msg['m_status']=0;
		$msg['m_level'] = Message::LEVEL_NORM;
		$msg['m_type']=Message::TYPE_ACCOUNT;
		$msg['m_src']=UTool::getRequestInfo();
		$msg['m_content'] = $content;
		if($msg->save()){
			// 			Yii::log(CJSON::encode($msg),CLogger::LEVEL_INFO,'mngr.usms.sendSmsOrder');
		}else{
			Yii::log(CJSON::encode($msg),CLogger::LEVEL_INFO,'mngr.usms.sendInviteSmsReg');
		}
		return $sendRlt;
		
	}
	
	/**
	 * 注册手机验证码
	 * @param string $mobile
	 * @param string $send_code
	 * @return Ambigous <string, multitype:>
	 */
	public static function  sendSmsReg($mobile,$send_code){
		$rlt = UTool::iniFuncRlt ();
		
		$mobile_code = UTool::randomkeys ( 6 );
		
		$content = '您的验证码是 ：'.$mobile_code.'。请不要把验证码泄露给其他人。';
//		$content = '您的验证码是 ：'.$mobile_code.'。请不要把验证码泄露给其他人，如非本人操作，请忽略本短信。';
		$sendRlt =  USms::sendSms($mobile, $send_code, $mobile_code, $content);
		if ($sendRlt['status']) {
			$rlt['status']=true;
			$rlt ['msg'] = '验证码已发送';
			$rlt['data']=$mobile_code;
		} else {
			$rlt  =$sendRlt;
		}
		
		return $rlt;

	}

    public static function sendEditPwd($mobile,$send_code){
        $rlt = UTool::iniFuncRlt ();

        $mobile_code = UTool::randomkeys ( 6 );

        $content = '您正在进行修改密码操作，验证码是 ：'.$mobile_code.'。请不要把验证码泄露给其他人，如非本人操作，请忽略本短信。';

        $sendRlt =  USms::sendSms($mobile, $send_code, $mobile_code, $content);
        if ($sendRlt['status']) {
            $rlt['status']=true;
            $rlt ['msg'] = '验证码已发送';
            $rlt['data']=$mobile_code;
        } else {
            $rlt  =$sendRlt;
        }

        return $rlt;

    }
	
	
	
	
}

?>