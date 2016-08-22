<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/8/17
 * Time: 9:14
 */
$bookName  = $_POST['bookName'];
$bookTitle = $_POST['bookTitle'];
if (!empty($_POST['bookName']) && !empty($_POST['bookTitle'])) {
    include "MySqlClass.php";
    $like = new MySqlClass("mytest", "root", "123456");
    $a    = array("messgeName" => $bookName, "messges" => $bookTitle);
    if ($like->insert("messge", $a)) {
        echo '<script>alert("提交成功！");location.href="' . "index.php" . '"</script>';
    } else {
        echo '<script>alert("提交失败！");location.href="' . "index.php" . '"</script>';
    }
} else {
    echo '<script>alert("空内容，请重新输入！");location.href="' . "index.php" . '"</script>';
}
