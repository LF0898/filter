<?php

/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/8/11
 * Time: 20:47
 */
class SessionClass
{
    protected $data; //传入的session
    /**
     * 存入Cookie
     */
    public function upSession($kie)
    {
        if ($this->checkSession()) {
            return false;
        }
        session_start();
        $_SESSION[$kie] = $kie;
        return true;
    }
    /**
     * 判断传入的数据是否合法
     */
    public function checkSession()
    {
        if (empty($this->data)) {
            return false;
        }
        return true;
    }
    /***
     * 注销Session
     */
    public function deleteSession($kie)
    {
        if ($this->checkSession()) {
            return false;
        }
        session_start();
        unset($_SESSION[$kie]);
    }
}
