<?php

/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/8/9
 * Time: 16:42
 */
class StringTest
{
    /**
     * 作业一：
     * 先将字符串分隔存入数组，按键名倒排序，加上“，”，输出
     */
    public function strTask1($str)
    {
        $stra = str_split($str, 3);
        krsort($stra);
        return implode(",", $stra);
    }
    /**
     * 作业二：
     * 先将字符串中“www”替换掉，再倒置字符串
     */
    public function strTask2($str)
    {
        $str = strrev(str_replace("www", "", $str));
        return $str;
    }
    /**
     * 作业三：
     * 找到两种方法
     * 方法一：根据“_”将字符串分割成数组，利用substr（）函数找到首字母并将其大写，最后将各值拼装
     * 方法二：根据“_”将字符串分割成数组，利用ucwords（）函数将其首字母大写，再拼装
     */
    public function strTask3($str)
    {
        $arr = explode('_', $str);
        foreach ($arr as $key => $val) {
            $newStar = strtoupper(substr($val, 0, 1));
            $other   = substr($val, 1);
            $tarr[]  = $newStar . $other;
        }
        return implode("", $tarr);
    }
    public function strTask3s($str)
    {
        $arr = explode('_', $str);
        foreach ($arr as $key => $val) {
            $tmp    = ucfirst($val);
            $tarr[] = $tmp;
        }
        return implode("", $tarr);
    }
    /**
     * 作业四：
     * 通过对“@”的定位找到邮箱的域
     *其他方法查找一个邮箱的域也都需要对“@”进行定位
     */
    public function strTask4($str)
    {
        $str = substr($str, strpos($str, "@") + 1);
        return $str;
    }
    /**
     * 作业五：翻转字符串
     *
     */
    public function strTask5($str)
    {
        $arr = str_word_count($str, 1);
        for ($i = 2; $i >= 0; $i--) {
            $test[] = $arr[$i];
        }
        $es = implode(" ", $test);
        return $es;
    }
    /**
     * 作业六：
     *先截取20个汉字，再判断原标题是否有超过20个汉字，超过则加上“...”
     */
    public function strTask6($str)
    {
        $arr = mb_substr($str, 0, 20);
        if (strlen($str) > 20) {
            $arr .= '...';
        }
        return $arr;
    }
}
