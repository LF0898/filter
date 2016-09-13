<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/9/6
 * Time: 11:47
 */

namespace app\modules\front\controllers;

use app\models\Messge;
use yii\web\Controller;

class GuestbookController extends Controller
{
    public $enableCsrfValidation = false;
    //关闭默认布局
    public $layout = false;
    //
    public function actionGuestbook()
    {
        //echo 'as';
        //$mode1 = new EntryForm;
        return $this->render('Guestbook');
    }
    //处理留言
    public function actionGuestbooks()
    {
        $request            = \Yii::$app->request;
        $messge             = new Messge();
        $messge->messgeName = $request->post('username');
        $messge->messges    = $request->post('content');
        $messge->validate();
        if ($messge->hasErrors()) {
            echo '数据不合法！';
            die();
        }
        $messge->save();
        echo '留言成功';
        return $this->render('Guestbook');
    }

}
