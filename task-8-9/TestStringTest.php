<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/8/9
 * Time: 22:02
 */
include "StringTest.php";
$as         = "1112223334445";
$str1       = "www.yaochufa.com";
$x          = "my_leader_ddsf_dhfg";
$mail       = "liming@yaochu.com";
$str5       = "There in hainan";
$Journalism = "七夕到来前一周左右，不少嗅觉灵敏的商家就已提前预热，抢滩“浪漫经济”，
被瞄准的顾客群也已经不仅仅限于情侣，就连单身人士也加入了“买买买”队伍。";
$test = new StringTest();
echo '作业一';
var_dump($test->strTask1($as));
echo '作业二';
var_dump($test->strTask2($str1));
echo '作业三';
var_dump($test->strTask3s($x));
var_dump($test->strTask3($x));
echo '作业四';
var_dump($test->strTask4($mail));
echo '作业五';
var_dump($test->strTask5($str5));
echo "作业六" . " <br/> ";
echo ($test->strTask6($Journalism));
