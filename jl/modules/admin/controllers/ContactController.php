<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/9/7
 * Time: 15:06
 */

namespace app\modules\admin\controllers;

use yii\web\Controller;

class ContactController extends Controller
{
    public $layout = false;
//联系我们
    public function actionContact()
    {
        return $this->render('contact');
    }
}
