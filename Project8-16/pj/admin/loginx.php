<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/8/17
 * Time: 16:34
 */
include "MySqlClass.php";
//include "CookieClass.php";
$like = new MySqlClass("mytest", "root", "123456");
$a    = $_POST['username'];
$b    = $_POST['password'];
if (!empty($_POST['username']) && !empty($_POST['password'])) {
    $c = array("admUser" => $_POST['username'], "admPaw" => md5($_POST['password']));
    if ($test = $like->select("admin", $c)) {
        if ($test['admType'] == 1) {
            //include "CookieClass.php";
            //$ses = new CookieClass();
            //echo $test['admUser'];
            //$ses->upCookie($test['admUser']);
            //setcookie($test['admUser'], time() + 30);
            //echo $test['admUser'];
            //print_r($_COOKIE['sesName']);
            session_start();
            $_SESSION['sesname'] = $test['admUser'];

            echo $_SESSION["sesname"];
            //var_dump($_SESSION);
            echo '<script>location.href="' . "index.php" . '"</script>';
            echo $test['admNo'];
        } else {
            echo '<script>alert("账号被限制！");location.href="' . "login.php" . '"</script>';
        }
    } else {
        echo '<script>alert("账号或密码错误！");location.href="' . "login.php" . '"</script>';
    }
} else {
    echo '<script>alert("内容不能为空！");location.href="' . "login.php" . '"</script>';
}
