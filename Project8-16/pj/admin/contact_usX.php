<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/8/17
 * Time: 11:05
 */
//address contacts mobilePhone fixedPhone fixedPhone
include "MySqlClass.php";
$like = new MySqlClass("mytest", "root", "123456");
$a0   = $_POST['address'];
$a1   = $_POST['contacts'];
$a2   = $_POST['mobilePhone'];
$a3   = $_POST['fixedPhone'];
$a4   = $_POST['fax'];
$a    = array("address" => $a0, "contacts" => $a1, "mobilePhone" => $a2, "fixedPhone" => $a3, "fax" => $a4);
$c    = array("contactsNo" => 1);
if ($like->update("contact_us", $a, $c)) {
    echo '<script>alert("更新成功！");location.href="' . "index.php" . '"</script>';
} else {
    echo '<script>alert("更新失败！");location.href="' . "index.php" . '"</script>';
}
