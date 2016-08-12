<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/8/11
 * Time: 14:31
 */
include "CookieClass.php";
$username = $_POST['username'];
$userpsw  = $_POST['userpsw'];
if (!empty($username) && !empty($userpsw)) {
    $test = new CookieClass();
    $test->upCookie($username); //调用CookieClass类方法进行存储Cookie
    var_dump($_COOKIE);
}
echo "<a href=\"sindex.php\">首页</a>";
