<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/9/7
 * Time: 15:06
 */

namespace app\modules\admin\controllers;

use yii\web\Controller;

class UserController extends Controller
{
    public $layout = false;
//管理员
    public function actionUser()
    {
        return $this->render('userlist');
    }

}
