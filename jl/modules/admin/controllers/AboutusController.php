<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/9/7
 * Time: 15:00
 */

namespace app\modules\admin\controllers;

use yii\web\Controller;

class AboutusController extends Controller
{
//公司简介
    public $layout = false;

    public function actionAboutus()
    {
        return $this->render('aboutus');
    }
}
