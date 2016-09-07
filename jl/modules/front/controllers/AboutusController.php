<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/9/6
 * Time: 11:10
 */

namespace app\modules\front\controllers;

use app\models\Notice;
use Faker\Provider\Company;
use yii\web\Controller;

class AboutusController extends Controller
{
    //关闭默认布局
    public $layout = false;
    public function actionAboutus()
    {
        //公司简介
        $aboutus = \app\models\Company::find()->asArray()->all();
        //最新公告
        $notice = Notice::find()->limit(3)->asArray()->all();
        return $this->render('aboutus', [
            'aboutus' => $aboutus,
            'notice'  => $notice,
        ]);
    }
}
