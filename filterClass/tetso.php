<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/8/4
 * Time: 21:26
 */
include_once "testFilter.php";
//测试Email过滤
$testEmail = new TestFilter();
var_dump($testEmail->field("153@163.com")->email()->get());
var_dump($testEmail->field("232163.com")->email()->get());
//测试整型过滤
$testInt = new TestFilter();
var_dump($testInt->field("99")->intt()->get());
var_dump($testInt->field("gg")->intt()->get());
//测试ip过滤
$testIp = new TestFilter();
var_dump($testIp->field("192.168.2.2")->ip()->get());
var_dump($testIp->field("192.168.22")->ip()->get());
//测试URL过滤
$testHttp = new TestFilter();
var_dump($testHttp->field("https://www.yaochufa.com/")->http()->get());
var_dump($testHttp->field("www.yaochufa.com/")->http()->get());
