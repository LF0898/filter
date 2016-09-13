<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/9/8
 * Time: 23:22
 */

namespace app\models;

class SessionX
{
    public static function make()
    {
        $session = \Yii::$app->session;
        $tf      = $session->get('user');
        if (!empty($tf)) {
            return true;
        } else {
            return false;
        }
    }

}
