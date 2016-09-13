<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/9/7
 * Time: 15:06
 */

namespace app\modules\admin\controllers;

use app\models\ContactUs;
use app\models\SessionX;
use yii\web\Controller;

class ContactusController extends Controller
{
    public $enableCsrfValidation = false;
    public $layout               = false;
//联系我们
    public function actionContactus()
    {
        //验证是否登录
        if (!SessionX::make()) {
            return $this->render('../login/login');
        }
        //联系方式
        $contactUs = ContactUs::find()->asArray()->all();
        return $this->render('contactus', [
            'contactUs' => $contactUs,
        ]);
    }
    //修改
    public function actionRevise()
    {
        //验证是否登录
        if (!SessionX::make()) {
            return $this->render('../login/login');
        }
        $request = \Yii::$app->request;
        //获取到要修改的列
        $cu              = ContactUs::find()->where(['contactsNo' => 1])->one();
        $cu->address     = $request->post('address');
        $cu->contacts    = $request->post('contacts');
        $cu->mobilePhone = $request->post('mobilePhone');
        $cu->fixedPhone  = $request->post('fixedPhone');
        $cu->fax         = $request->post('fax');
        $cu->save();

        //联系方式
        $contactUs = ContactUs::find()->asArray()->all();
        return $this->render('contactus', [
            'contactUs' => $contactUs,
        ]);
    }
}
