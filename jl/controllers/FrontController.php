<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/9/5
 * Time: 14:10
 */
namespace app\controllers;

use yii\web\Controller;

class FrontController extends Controller
{
    //public $layout = 'common';
    //头部（不变）
    public function actionIndex()
    {
        return $this->renderPartial('top');
    }

    //公司简介
    /*public function actionAboutUs()
{
//return $this->render('AboutUs');
}*/
}
