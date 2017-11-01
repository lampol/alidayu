<?php
require_once 'vendor/autoload.php';

use lampol\Alidayu;

use Aliyun\SmsDemo;


//set_time_limit(0);
//header('Content-Type: text/plain; charset=utf-8');
$response = SmsDemo::sendSms(
    "短信签名", // 短信签名
    "SMS_107930036", // 短信模板编号
    "短信接收者", // 短信接收者
    "LTAIpQtHkUE", //key
    "sTi0GSZCvXMITYibnxOfe5", //secret
    Array(  // 短信模板中字段的值
        "code"=>"12345",
    )
);
echo "发送短信(sendSms)接口返回的结果:\n";
print_r($response);




exit;



















//new Alidayu($config);

$config = [
	'key'      =>'LTAIpQtHkQsHxdUE',
	'secret'   =>'sTi0GqCKe5cSJXZCvXMITYibnxOfe5',
	'signName'  =>'付叶慧',
	'template' =>'SMS_107930036'
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
