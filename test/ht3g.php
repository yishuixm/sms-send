<?php
header("Content-type:text/html;charset=utf-8");
require_once __DIR__.'/../src/Ht3g.php';


$ht3g = new \yishuixm\sms\Ht3g([]);

$result = $ht3g->sendSms(['18523054802'],'短信','签名');

var_dump($result);