<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/8/11
 * Time: 22:08
 */
include "CookieClass.php";
$name = "lf";
$test = new CookieClass();
$test->setOpen("time", 200);
$test->deleteCookie($name);
var_dump($_COOKIE);
