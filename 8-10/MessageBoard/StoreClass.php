<?php

/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/8/10
 * Time: 11:56
 */
class StoreClass
{
    public function userStore($name, $content, $localtime)
    {
        $fh = fopen("test.txt", "a");
        if (fwrite($fh, $localtime) && fwrite($fh, $name) && fwrite($fh, $content)) {
            fclose($fh);
            return true;
        } else {
            fclose($fh);
            return false;
        }
    }
}
