<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/9/7
 * Time: 15:03
 */

namespace app\modules\admin\controllers;

use yii\web\Controller;

class ProductController extends Controller
{
    public $layout = false;
    //产品管理
    public function actionProduct()
    {
        return $this->render('productlist');
    }

}
