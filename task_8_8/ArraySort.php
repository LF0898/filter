<?php

/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/8/8
 * Time: 21:06
 * arrayAscNumeric()按上升顺序、数值大小排序
 * arrayDescNumeric()按下降顺序、数值大小排序
 * arrayDescString（）按下降顺序、字符串大小排序
 * arrayAscSring()按上升顺序、字符串大小排序
 */
class ArraySort
{
    public function arrayAscNumeric($data)
    {
        $this->$data = array_multisort($data[0], SORT_ASC, SORT_NUMERIC,
            $data[1], SORT_NUMERIC, SORT_ASC);
        return $data;
    }
    public function arrayDescNumeric($data)
    {
        $this->$data = array_multisort($data[0], SORT_DESC, SORT_NUMERIC,
            $data[1], SORT_NUMERIC, SORT_DESC);
        return $data;
    }
    public function arrayDescSring($data)
    {
        $this->$data = array_multisort($data[0], SORT_DESC, SORT_STRING,
            $data[1], SORT_STRING, SORT_DESC);
        return $data;
    }
    public function arrayAscSring($data)
    {
        $this->$data = array_multisort($data[0], SORT_ASC, SORT_STRING,
            $data[1], SORT_STRING, SORT_ASC);
        return $data;
    }
}

