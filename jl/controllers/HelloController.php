<?php
namespace app\controllers;

use yii\web\Controller;

class HelloController extends Controller
{

    public function actionIndex()
    {
        //获取子模块
        $comment = \Yii::$app->getModule('activity');
        //调用子模块操作
        return $comment->runAction('default/index');
    }
}
