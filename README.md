# this is send mobile code by alidayu  and aliyun

# 兼容了两个平台的发送短信 一个是alidayu 另一个是现在新的在阿里云服务器后台的短信发送

## 阿里大于的使用
```

use Alidayu\Alidayu;
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

```

## 阿里云平台的使用  

> 注意 PHP目前仅支持5.5以上版本

```
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

```
