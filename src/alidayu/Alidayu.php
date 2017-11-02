<?php
//===========================
//
//===========================
namespace Alidayu;


class Alidayu{

	protected $tc='';
	//初始化	


	public function __construct($options){

		require_once('TopSdk.php');
		$this->tc = new \TopClient;
		$this->tc->appkey = $options['key'];
		$this->tc->secretKey = $options['secret'];
	}
	//开始发送
	public function sendMobileMes($mobile,$param,$signName,$template,$extend=''){
                $req= new \AlibabaAliqinFcSmsNumSendRequest;
		$req ->setExtend($extend);
		$req ->setSmsType( "normal" );
		$req ->setSmsFreeSignName($signName);
		$req ->setSmsParam(json_encode($param));
		$req ->setRecNum((string)$mobile);
		$req ->setSmsTemplateCode($template);
		$res = $this->tc->execute( $req );
		return json_encode($res,JSON_UNESCAPED_UNICODE);
	}
	//查询发送的信息
	public function queryMobileMes($mobile,$date,$cur,$size,$bizid=''){
		$req = new \AlibabaAliqinFcSmsNumQueryRequest;
		$req->setBizId($bizid);
		$req->setRecNum((string)$mobile);
		$req->setQueryDate((string)$date);
		$req->setCurrentPage((string)$cur);
		$req->setPageSize((string)$size);
		$res = $this->tc->execute($req);
		return json_encode($res,JSON_UNESCAPED_UNICODE);
	}

}
