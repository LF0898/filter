<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/8/5
 * Time: 10:11
 * shellSort()希尔排序
 * bubbleSort()冒泡排序
 * selectSort()选择排序
 * insertSort()插入排序
 * quickSort()快速排序
 */
include_once "ArraySort.php";
$bc   = array(4, 523, 5, 7, 9); //测试数组
$c    = new ArraySort();
$test = $c->quickSort($bc);
print_r($test);
