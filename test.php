<?php
require_once 'vendor/autoload.php';

use lampol\Alidayu;

//new Alidayu($config);

$config = [
	'key'      =>'24677956',
	'secret'   =>'6e240eea235786124dffa54f019d66d4',
	'signName'  =>'短信签名',
	'template' =>'短信模板ID'
];

//key 24644943
//secret 6e240wwa08578we2423fa54f019d66d4
//signName 你的短信签名
//template SMS_107934024


$ali = new Alidayu($config);

//sendMobile($mobile,$param);
//$mobile 接收短信手机号
//模板里面的参数 "{code:'123456789'}"
$param  = "{code:'123456789'}";
$mobile = '15588888888';

$res = $ali->sendMobile($mobile,$param);

var_dump($res);
