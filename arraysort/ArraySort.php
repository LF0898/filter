<?php

/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/8/5
 * Time: 10:00
 */
class ArraySort
{
    public function bubbleSort($arr)
    {
        echo "这是冒泡排序算法<br>";
        $len = count($arr);
        //该层循环控制 需要冒泡的轮数
        for ($i = 1; $i < $len; $i++) { //该层循环用来控制每轮 冒出一个数 需要比较的次数
            for ($k = 0; $k < $len - $i; $k++) {
                if ($arr[$k] > $arr[$k + 1]) {
                    $tmp         = $arr[$k + 1];
                    $arr[$k + 1] = $arr[$k];
                    $arr[$k]     = $tmp;
                }
            }
        }
        return $arr;
    }
    //选择排序算法
    public function selectSort($arr)
    {
        echo "这是选择排序算法<br>";
        //双重循环完成，外层控制轮数，内层控制比较次数
        $len = count($arr);
        for ($i = 0; $i < $len - 1; $i++) {
            //先假设最小的值的位置
            $p = $i;

            for ($j = $i + 1; $j < $len; $j++) {
                //$arr[$p] 是当前已知的最小值
                if ($arr[$p] > $arr[$j]) {
                    //比较，发现更小的,记录下最小值的位置；并且在下次比较时采用已知的最小值进行比较。
                    $p = $j;
                }
            }
            //已经确定了当前的最小值的位置，保存到$p中。如果发现最小值的位置与当前假设的位置$i不同，则位置互换即可。
            if ($p != $i) {
                $tmp     = $arr[$p];
                $arr[$p] = $arr[$i];
                $arr[$i] = $tmp;
            }
        }
        //返回最终结果
        return $arr;
    }
    //插入排序
    public function insertSort($arr)
    {
        echo '这是插入排序算法<br>';
        $count = count($arr);
        for ($i = 1; $i < $count; $i++) {
            $tmp = $arr[$i];
            $j   = $i - 1;
            while ($arr[$j] > $tmp) {
                $arr[$j + 1] = $arr[$j];
                $arr[$j]     = $tmp;
                $j--;
            }
        }
        return $arr;
    }
    //快速排序算法
    public function quickSort($array)
    {

        if (count($array) <= 1) {
            return $array;
        }

        $key       = $array[0];
        $left_arr  = array();
        $right_arr = array();
        for ($i = 1; $i < count($array); $i++) {
            if ($array[$i] <= $key) {
                $left_arr[] = $array[$i];
            } else {
                $right_arr[] = $array[$i];
            }

        }
        $left_arr  = self::quickSort($left_arr);
        $right_arr = self::quickSort($right_arr);
        return array_merge($left_arr, array($key), $right_arr);

    }
    //希尔排序算法
    public function shellSort(array $arr)
    {
        // 将$arr按升序排列
        $len = count($arr);
        $f   = 3; // 定义因子
        $h   = 1; // 最小为1
        while ($h < $len / $f) {
            $h = $f * $h + 1; // 1, 4, 13, 40, 121, 364, 1093, ...
        }
        while ($h >= 1) { // 将数组变为h有序
            for ($i = $h; $i < $len; $i++) { // 将a[i]插入到a[i-h], a[i-2*h], a[i-3*h]... 之中 （算法的关键
                for ($j = $i; $j >= $h; $j -= $h) {
                    if ($arr[$j] < $arr[$j - $h]) {
                        $temp         = $arr[$j];
                        $arr[$j]      = $arr[$j - $h];
                        $arr[$j - $h] = $temp;
                    }
                    
                }
            }
            $h = intval($h / $f);
        }
        return $arr;
    }
}
