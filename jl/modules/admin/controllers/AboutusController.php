<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/9/7
 * Time: 15:00
 */

namespace app\modules\admin\controllers;

use app\models\Company;
use app\models\SessionX;
use yii\web\Controller;

class AboutusController extends Controller
{
    public $enableCsrfValidation = false;
//公司简介
    public $layout = false;

    public function actionAboutus()
    {
        //验证是否登录
        if (!SessionX::make()) {
            return $this->render('../login/login');
        }
        //查询公司简介表
        $aboutus = Company::find()->asArray()->all();
        return $this->render('aboutus', [
            'aboutus' => $aboutus,
        ]);
    }

    public function actionRevise()
    {
        //验证是否登录
        if (!SessionX::make()) {
            return $this->render('../login/login');
        }
        $request = \Yii::$app->request;
        $cid     = Company::find()->where(['companyid' => 1])->one();
        //echo $request->post('content');
        $cid->companyTitle = $request->post('content');
        $cid->save();
        //查询公司简介表
        $aboutus = Company::find()->asArray()->all();
        return $this->render('aboutus', [
            'aboutus' => $aboutus,
        ]);
    }
}
