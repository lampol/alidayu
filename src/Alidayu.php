<?php
//===========================
//
//===========================
namespace lampol;


class Alidayu{

	protected $tc='';
	protected $fsr='';
	//初始化	


	public function __construct($options){

		require_once('TopSdk.php');
		$this->tc = new \TopClient;
		$this->tc->appkey = $options['key'];
		$this->tc->secretKey = $options['secret'];
		$this->fsr= new \AlibabaAliqinFcSmsNumSendRequest;
		$this->fsr->setSmsType( "normal" );	
		$this->fsr->setSmsFreeSignName($options['signName']);
		$this->fsr->setSmsTemplateCode($options['template']);
	}
	//开始发送
	public function sendMobile($mobile,$param,$extend=''){

		$this->fsr ->setExtend($extend);
		$this->fsr ->setSmsParam($param);
		$this->fsr ->setRecNum($mobile);
		$res = $this->tc->execute( $this->fsr );
		return $res;
	}

}
