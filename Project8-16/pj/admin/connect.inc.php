<html>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/8/16
 * Time: 17:20
 */
include "MySqlClass.php";
$like = new MySqlClass("mytest", "root", "123456");

include "SessionClass.php";
$name = "sas";
$t    = new SessionClass();
$t->upSession($name);
//setcookie($name, time() - 999);
print_r($_SERVER);

echo "<pre>";
$test = $like->select("admin");
echo "<pre>";
$a = array("messgeName" => "学习", "messges" => "你好");
//echo $like->insert("messge", $a);
echo $test['admNo'];
$b = array("admUser" => " lf", "admPaw" => 12345, "admTime" => "2016-08-16", "admType" => "1");
$c = array("admNo" => 3);
//$like->update("admin", $b, $c);
$d = array("jouralismId" => 2);
//$test = $like->select("jouralism", $d);
//echo $test['jouralismTitle']
;?>
<form method="get" action="">
    <input type="text" value="ssh" name="a">
<input type="submit" value="确定">
</form>
</body>
</html>
