<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/8/10
 * Time: 9:52
 */
include "StoreClass.php";
$username = $_POST['username'];
$content  = $_POST['content'];
if (!empty($username) && !empty($content)) {
    $name    = "姓名:" . "$username";
    $content = "留言内容：" . "$content";
    date_default_timezone_set("ETC/GMT-8");
    $localtime = date('y-m-d H:i:s', time());
    echo $name;
    echo $content;
    echo $localtime;
    $test = new StoreClass();
    $test->userStore($name, $content, $localtime);
} else {
    header('Location: error.php/');
}
