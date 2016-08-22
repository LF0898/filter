<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/8/19
 * Time: 10:30
 */
include "MySqlClass.php";
session_start();
if (!empty($_POST['title']) && !empty($_POST['content']) && !empty($_SESSION["sesname"])) {
    $like = new MySqlClass("mytest", "root", "123456");
    date_default_timezone_set("ETC/GMT-8");
    $localtime = date('y-m-d H:i:s', time());
    $notice    = array("noticeContent" => $_POST['content'], "noticeTitle" => $_POST['title'], "noticeTime" => $localtime, "addPeople" => $_SESSION["sesname"]);
    if ($like->insert("notice", $notice)) {
        header("Location: index.php");
    } else {
        echo '<script>alert("插入失败！");location.href="' . "index.php" . '"</script>';
    }

} else {
    echo '<script>alert("有空值，请重新输入！");location.href="' . "index.php" . '"</script>';
}
