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
if ($username == "lf" && $userpsw == "123456") {
    $test = new CookieClass();
    $test->setOpen("time", 200); //设置有效时间
    $test->upCookie($username);
    $test->upCookie($userpsw);
}
echo "<a href=\"sindex.php\">首页</a>";
