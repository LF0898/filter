# 正则练习

功能：
 - 找出一个数组中以字母开头和以数字结束的单元（function strchar)
 - 取出一个URL中的协议、主机、域名、和文件名(function matchingURL)
 - 找出字符串中的所有网址(getURL)
 - 去除所有HTML标签（function removeTag)

---

测试方法：
$arra = array("linux RedHat9.0", "Apache2.2.9", "MySL5.0.51", "PHP5.2.6", "LAMP", "100");

$tag  = "<tr><td><a href=\"http://qzone.qq.comdasdasdasdas\">QQ空间</a></td><td><a href=\"http://www.ganji.com\">赶集网</a></td>";

$test = new Regular();
echo "<pre>";
//找出一个数组中以字母开头和以数字结束的单元
var_dump($test->strchar($arra));
//取出一个URL中的协议、主机、域名、和文件名
$url = $test->matchingURL("http://www.yaochufa.com/index.php");
var_dump($url[2], $url[4], $url[5]);
//找出字符串中的所有网址
var_dump($test->getURL($tag));
去除所有HTML标签
var_dump($test->removeTag($tag));
