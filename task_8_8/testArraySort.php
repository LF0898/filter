<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/8/10
 * Time: 11:21
 */
include "ArraySort.php";
$arr = array(
    array(10, 11, 100, 100, 6, "a"),
    array(1, 2, 5, 3, 1, "b"),
);
$test = new ArraySort();
var_dump($test->arrayAscNumeric($arr));
