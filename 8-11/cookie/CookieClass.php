<?php

/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/8/11
 * Time: 16:36
 */
class CookieClass
{
    protected $time = 60; //cookie失效时间
    protected $data; //传入的cookie
    /**
     * 存入Cookie
     */
    public function upCookie($kie)
    {
        if ($this->checkCookie()) {
            return false;
        }
        if (setcookie($kie, $kie, time() + $this->time)) {
            return true;
        }
        return false;
    }
    /**
     * 判断传入的数据是否合法
     */
    public function checkCookie()
    {
        if (empty($this->data)) {
            return false;
        }
        return true;
    }
    /****
     * 设定单个参数
     */
    public function set($key, $val)
    {
        $this->$key = $val;
    }
    /***
     *
     */
    public function setOpen($key, $val)
    {
        $key = strtolower($key);
        if (array_key_exists($key, get_class_vars(get_class($this)))) {
            $this->set($key, $val);
        }
        return $this;
    }
    public function deleteCookie($kie)
    {
        if ($this->checkCookie()) {
            return false;
        }
        if (setcookie($kie, $kie, time() - 1)) {
        }
    }
}
$name = "lf";
$test = new CookieClass();
$test->setOpen("time", 200);
$test->deleteCookie($name);
var_dump($_COOKIE);
