<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/9/6
 * Time: 11:43
 */

namespace app\modules\front\controllers;

use app\models\Product;
use app\models\Producttype;
use yii\web\Controller;

class ProductController extends Controller
{
    //关闭默认布局
    public $layout = false;
    public function actionProduct()
    {
        return $this->render('product');
    }

    public function actionProductlist()
    {
        //产品展示
        $product = Product::find()->asArray()->all();
        //产品类别
        $productlist = Producttype::find()->asArray()->all();
        return $this->render('productList', [
            'product'     => $product,
            'productlist' => $productlist,
        ]);
    }
}
