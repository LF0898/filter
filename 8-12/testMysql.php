<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/8/22
 * Time: 10:58
 */
include "mysqlClass/MySqlClass.php";
$mysql = new MySqlClass("mytest", "root", "123456");
print_r($mysql->select("admin"));
