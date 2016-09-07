<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/9/7
 * Time: 15:02
 */

namespace app\modules\admin\controllers;

use yii\web\Controller;

class NewsController extends Controller
{
    public $layout = false;
//最新公告
    public function actionNews()
    {
        return $this->render('newslist');
    }
}
