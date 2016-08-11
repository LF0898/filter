<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/8/11
 * Time: 10:47
 */
include "TraversalFile.php";
$test    = new Ycf\Lession\FormAndFile\TraversalFile\TraversalFile();
$dirPath = 'D:\test';
$test->recursion_readdir($dirPath);
