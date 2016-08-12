<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/8/12
 * Time: 10:32
 */
include "CookieClass.php";
var_dump($_COOKIE);
$test = new CookieClass();
$test->deleteCookie("user"); //调用CookieClass类方法进行删除
var_dump($_COOKIE);
if (!empty($_COOKIE["user"])) {
    echo '您已注销';
}
echo "<a href=\"login.html\">返回首页</a>";
