<?php

/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/8/20
 * Time: 23:10
 */
class Regular
{
    /****
     * $arr;传入一个数组
     * 匹配以字母开头以数字结束没有空格的单元
     */
    public function regularChar($arr)
    {
        return preg_grep('/^[a-zA-Z]\S*\d$/', $arr);
    }
    /****
     * $url:传入url
     * 取出其中URL的协议、主机、域名、文件名
     * 返回$rr
     */
    public function regularUrl($url)
    {
        $url = trim($url);
        preg_match('~^(([^:/?#]+):)?(//([^/?#]*))?([^?#]*)(\?([^#]*))?(#(.*))?~i', $url, $rr);
        return $rr;
    }
    /****
     * $str：传入一个字符串，取出其中的网址
     * 返回$out
     */
    public function regularAllUrl($str)
    {
        $preg = '@\w+:/+\w+.\w+.\w+@i';
        preg_match_all($preg, $str, $rtur);
        return $rtur;
    }
    /****
     * $text：传入的文本
     * 去除其中的HTML标签
     * 返回$text
     */
    public function deleteTag($text)
    {
        $preg = "/<\/?[^>]+>/i";
        $text = preg_replace($preg, '', $text);
        return $text;
    }

}
