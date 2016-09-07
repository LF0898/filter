<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/9/6
 * Time: 14:01
 */

namespace app\modules\front\controllers;

use app\models\ContactUs;
use app\models\Notice;
use yii\web\Controller;

class ContactusController extends Controller
{
    //关闭默认布局
    public $layout = false;
    public function actionContactus()
    {
        //联系方式
        $contactUs = ContactUs::find()->asArray()->all();
        //最新公告
        $notice = Notice::find()->limit(3)->asArray()->all();
        return $this->render('contactus', [
            'contactUs' => $contactUs,
            'notice'    => $notice,
        ]);
    }

}
