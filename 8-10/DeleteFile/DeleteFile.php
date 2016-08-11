<?php

/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/8/11
 * Time: 14:00
 */
class DeleteFile
{
    /**
     * @summary 重复times次字符char
     * @param $char 需要重复的字符
     * @param $times 重复次数
     * @return 返回重复字符组成的字符串
     */
    public function forChar($char = '-', $times = 0)
    {
        $result = '';
        for ($i = 0; $i < $times; $i++) {
            $result .= $char;
        }
        return $result;
    }

    /**
     * @summary   递归读取目录
     * @param $dirPath 目录
     * @param $Deep =0 深度，用于缩进,无需手动设置
     * @return 无
     */
    public function recursion_readdir($dirPath, $Deep = 0)
    {
        $resDir = opendir($dirPath);
        while ($basename = readdir($resDir)) {
            //当前文件路径
            $path = $dirPath . '/' . $basename;
            if (is_dir($path) and $basename != '.' and $basename != '..') {
                //是目录，打印目录名，继续迭代
                rmdir($basename);
                echo "已删除文件" . $this->forChar('-', $Deep) . $basename . '/<br/>';
                rmdir($basename); //删除目录
                $Deep++; //深度+1
                $this->recursion_readdir($path, $Deep);
            } else if (basename($path) != '.' and basename($path) != '..') {
                //不是文件夹，打印文件名
                unlink($path); //删除文件
                echo "已删除文件夹" . $this->forChar('-', $Deep) . basename($path) . '<br/>';
            }
        }
        closedir($resDir);
    }
}
