<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/8/11
 * Time: 21:55
 */
include "DeleteFile.php";
$dirPath = 'D:\test';
$test    = new DeleteFile();
$test->recursion_readdir($dirPath);
