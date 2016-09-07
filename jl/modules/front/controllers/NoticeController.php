<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/9/6
 * Time: 21:57
 */

namespace app\modules\front\controllers;

use app\models\Notice;
use yii\web\Controller;

class NoticeController extends Controller
{
    //关闭默认布局
    public $layout = false;
    public function actionNotice()
    {
        //最新公告
        $notice = Notice::find()->limit(5)->asArray()->all();
        return $this->render('article', ['notice' => $notice]);
    }
}
