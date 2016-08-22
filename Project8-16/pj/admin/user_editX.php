<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/8/18
 * Time: 14:46
 */
echo $_POST['username'];
echo $_POST['password'];
echo $_POST['usertype'];
print_r($_POST['id']);
if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['usertype']) && !empty($_POST['id'])) {
    include "MySqlClass.php";
    $like  = new MySqlClass("mytest", "root", "123456");
    $set   = array("admUser" => $_POST['username'], "admPaw" => md5($_POST['password']), "admType" => $_POST['usertype']);
    $where = array("admNo" => $_POST['id']);
    if ($like->update("admin", $set, $where)) {
        echo '修改成功!';
    } else {
        echo '修改失败!';
    }

} else {
    echo '有空值！';
}
