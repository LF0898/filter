<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/8/18
 * Time: 22:23
 */
session_start();
unset($_SESSION["sesname"]);
echo '<script>alert("已退出，请重新登陆！");location.href="' . "login.php" . '"</script>';
