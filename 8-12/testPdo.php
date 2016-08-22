<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/8/22
 * Time: 10:58
 */
include "PdoClass.php";
$pdo = new PdoClass();
$pdo->construct("mysql:host=192.168.139.129;dbname=mytest", "root", "123456");
