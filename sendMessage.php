<?php
    $mgKey=function(){
	   $selectKey="";//定义验证码
       $keyLength=6;//定义验证码长度
       $keys=array('0','1','2','3','4','5','6','7','8','9');//创建验证码字符数组
       for($i=0;$i<$keyLength;$i++){
	     $index=rand(0,9);//随机产生0-9的整数,作为数组下标
	     $selectKey=$selectKey.''.$keys[$index];
       }
        return $selectKey;//返回短信验证码
    };
    $mgkey=$mgKey();//生成短信验证码
    $host = "https://feginesms.market.alicloudapi.com";
    $path = "/codeNotice";
    $method = "GET";
    $appcode = "4947203593f24cf4987cd70c0076786d";
    $headers = array();
    array_push($headers, "Authorization:APPCODE " . $appcode);
    $querys = "param=".$mgkey."&phone=".$_GET["tel"]."&sign=1&skin=1";
    $bodys = "";
    $url = $host . $path . "?" . $querys;

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_FAILONERROR, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HEADER, false);
    if (1 == strpos("$".$host, "https://"))
    {
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    }
    curl_exec($curl);
	echo $mgkey;

   

?>