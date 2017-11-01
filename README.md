# this is send mobile code by alidayu

## HOW TO USE
```
use lampol\Alidayu;

//new Alidayu($config);

$config = [
        'key'      =>'24677943',
        'secret'   =>'6e240eea085786124edfa54f019d66d4',
        'signName'  =>'刘波',
        'template' =>'SMS_107900024'
];

//key 24677943
//secret 6e240eea08578we2423fa54f019d66d4
//signName 你的短信签名
//template SMS_107900024


$ali = new Alidayu($config);

//sendMobile($mobile,$param);
//$mobile 接收短信手机号
//模板里面的参数 "{code:'123456789'}"
$param  = "{code:'123456789'}";
$mobile = '15588608866';

$res = $ali->sendMobile($mobile,$param);

var_dump($res);

成功返回数据
$res=object(SimpleXMLElement)#6 (2) { ["result"]=> object(SimpleXMLElement)#5 (4) { ["err_code"]=> string(1) "0" ["model"]=> string(20) "269309309521916325^0" ["msg"]=> string(2) "OK" ["success"]=> string(4) "true" } ["request_id"]=> string(12) "2f9bdq93zjrw" } 

```
