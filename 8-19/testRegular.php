<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/8/21
 * Time: 12:50
 */
include "Regular.php";
$arra = array("linux RedHat9.0", "Apache2.2.9", "MySL5.0.51", "PHP5.2.6", "LAMP", "100");
$tag  = "<tr><td><a href=\"http://qzone.qq.comdasdasdasdas\">QQ空间</a></td><td><a href=\"http://www.ganji.com\">赶集网</a></td>";
$test = new Regular();
echo "<pre>";
var_dump($test->strchar($arra));

$url = $test->matchingURL("http://www.yaochufa.com/index.php");
var_dump($url[2], $url[4], $url[5]);

var_dump($test->getURL($tag));
var_dump($test->removeTag($tag));
