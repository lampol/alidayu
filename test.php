<?php
require_once 'vendor/autoload.php';

//两个平台的 Alidayu是原来的平台
use Alidayu\Alidayu;

//这个是现在在阿里云后台短信发送的
use Aliyun\Aliyun;


//阿里云的平台使用

//$signName=''; //短信签名
//$template=''; //短息模板
//$mobile='';    //接受手机号码
//$key='';  //app_key
//$secret=''; //app_secret
//$param=['code'=>'123456789'];  //参数
//$date='20171102';               //发送日期
//$currentPage                   //当前页
//$pageSize                      //页大小
//
//发送信息
$response = Aliyun::sendMobileMes($signName,$template,$mobile,$key,$secret,$param);
//查询发送的信息
$response =Aliyun::queryMobileMes($mobile,$date,$key,$secret ,$pageSize = 10, $currentPage = 1, $bizId=null);

//$response 返回json数据格式




//阿里大于平台的使用
$config = [
	'key'      =>'',
	'secret'   =>''
];


$ali = new Alidayu($config);

//查询发送的信息

//$mobile 查询手机号码
//$date   发送日期 格式 20171102
//$curPage  当前页
//$size    页大小

$res = $ali->queryMobileMes($mobile,$date,$curPage,$size);


//发送信息

//$mobile 接收短信手机号
//$param 模板里面的参数 ['code'=>'123456'];
//$signName 你的短信签名
//$template SMS_107934024

$res = $ali->sendMobileMes($mobile,$param,$signName,$template);

var_dump($res);

//$res 返回json数据格式
