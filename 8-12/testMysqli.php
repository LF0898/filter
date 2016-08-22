<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/8/22
 * Time: 10:58
 */
include "MysqliClass.php";
mysql_query("set names utf8");
$mysql = new MysqliClass();
$mysql->connect('localhost', 'root', '123456', 'mytest');
$insertValues = [
    "admUser" => "test",
    "admPaw"  => "123456",
    "admTime" => "2016-8-9",
    "admType" => "1",
];
$mysql->insert($insertValues, 'admin');
