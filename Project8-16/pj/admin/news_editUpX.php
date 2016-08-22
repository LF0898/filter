<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/8/19
 * Time: 14:52
 */
session_start();

date_default_timezone_set("ETC/GMT-8");
$localtime = date('y-m-d H:i:s', time());
$_SESSION["sesname"];
if (!empty($_POST['content']) && !empty($_POST['title']) && !empty($_SESSION["sesname"]) && !empty($_GET['UpId'])) {
    include "MySqlClass.php";
    $like  = new MySqlClass("mytest", "root", "123456");
    $set   = array("noticeContent" => $_POST['content'], "noticeTitle" => $_POST['title'], "noticeTime" => $localtime, "addPeople" => $_SESSION["sesname"]);
    $where = array("noticeNo" => $_GET['UpId']);
    if ($like->update("notice", $set, $where)) {
        echo '更新成功！';
    } else {
        echo '更新失败！';
    }
} else {
    echo '有空值!';
}
