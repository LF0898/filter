<?php

namespace app\modules\front\controllers;

use app\models\Company;
use app\models\Jouralism;
use app\models\Notice;
use app\models\Product;
use yii\web\Controller;

/**
 * Default controller for the `activity` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    //关闭默认布局
    public $layout = false;
    public function actionIndex()
    {
        //公司简介
        $aboutus = Company::find()->asArray()->all();
        //产品展示
        $product = Product::find()->limit(3)->asArray()->all();
        //最新公告
        $notice = Notice::find()->limit(5)->asArray()->all();
        //行业资讯
        $jouralism = Jouralism::find()->limit(5)->asArray()->all();
        //友情链接
        return $this->render('index', [
            'aboutus'   => $aboutus,
            'product'   => $product,
            'notice'    => $notice,
            'jouralism' => $jouralism,
        ]);
    }
}
