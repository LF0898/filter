<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/8/11
 * Time: 22:11
 */
include "SessionClass.php";
$name = "fbl";
$test = new SessionClass();
$test->deleteSession($name);
var_dump($_SESSION);
