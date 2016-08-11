<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/8/11
 * Time: 14:49
 */
if (!empty($_COOKIE)) {
    echo '欢迎你再次光临';
} else {
    echo "请重新登陆";
}
echo "<br/>";
echo "<a href=\"login.html\">退出</a>";
