<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/8/8
 * Time: 14:20
 */
/****
 * 作业一
 */
$empty = '';
$null  = null;
$bool  = false;
$notSet;
$array = array();
$a     = 1;
$x     = &$a;
$b     = $a++;
echo $b;
/**   输出为1    *********/
/*****
 * 作业二：用最少的代码写一个求三只中最大值的函数
 */
function maxInt($a, $b, $c)
{
    return max($a, $b, $c);
}
/*******
 * 作业三
 */
$b = 201;
$c = 40;
$a = $b > $c ? 4 : 5;
echo $a;
/*   输出为4，因为b>c，所以a=4    **/
/****
 * 作业四
 */
function timesTwo($int)
{
    $int = $int * 2;
}
$int    = 2;
$result = timesTwo($int);
/**    没有输出结果，仅在函数内$int的值才会有变化**/
/********
 * 作业五
 */
$str1 = null;
$str2 = false;
echo $str1 == $str2 ? '相等' : '不相等';
$str3 = '';
$str4 = 0;
echo $str3 == $str4 ? '相等' : '不相等';
$str5 = 0;
$str6 = '0';
echo $str5 === $str6 ? '相等' : '不相等';
/**     输出结果为：相等 相等 不相等 **/
/****
 * 作业六
 */
$a1 = null;
$a2 = false;
$a3 = 0;
$a4 = '';
$a5 = '0';
$a6 = 'null';
$a7 = array();
$a8 = array(array());
echo empty($a1) ? 'true' : 'false';
echo empty($a2) ? 'true' : 'false';
echo empty($a3) ? 'true' : 'false';
echo empty($a4) ? 'true' : 'false';
echo empty($a5) ? 'true' : 'false';
echo empty($a6) ? 'true' : 'false';
echo empty($a7) ? 'true' : 'false';
echo empty($a8) ? 'true' : 'false';
/**  输出结果：true true true true true false true false **/
/****
 * 作业七
 */
$count = 5;
function get_count()
{
    static $count = 0;
    return $count++;
}
echo $count;
++$count;
echo get_count();
echo get_count();
echo "<br/>";
/**   输出结果为：501 */
/*******************
 * 作业八：不使用第三个变量交换两个变量的值
 *使用了两种方法
 */
$a = 5;
$b = 7;
echo '交换前$a:' . $a . '$b:' . $b . '<br>';
$a = $a ^ $b;
$b = $b ^ $a;
$a = $a ^ $b;
echo '交换后$a:' . $a . '$b:' . $b . '<br>';
//$a,$b已完成交换，现在再将两个数交换回来
list($b, $a) = array($a, $b);
echo '交换前$a:' . $a . '$b:' . $b . '<br>';
echo "<br/>";
/************
 *作业九：将数组的值分割合并成新的字符串
 */
$arr = ['zhangsan', 'lisi', 'wangwu'];
print_r($arr);
$str = '';
$str = implode(",", $arr);
print_r($str);
$str = trim($str, ',');
echo "<br/>";
//数组重组合
$arrOne = array(
    0 => array('fid=' => 1, 'tid' => 1, 'name' => 'xiaoming'),
    1 => array('fid=' => 1, 'tid' => 2, 'name' => 'zhangsan'),
    2 => array('fid=' => 1, 'tid' => 5, 'name' => 'lisi'),
    3 => array('fid=' => 1, 'tid' => 7, 'name' => 'wangwu'),
    4 => array('fid=' => 3, 'tid' => 9, 'name' => 'zhaoliu'),
);
$arrTwo = array();
foreach ($arrOne as $key => $value) {
    $tid  = $value['tid'];
    $name = $value['name'];

    $arrTwo[$key]['fid']  = $tid;
    $arrTwo[$key]['name'] = $name;
}

var_dump($arrTwo);
