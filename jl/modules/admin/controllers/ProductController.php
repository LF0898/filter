<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/9/7
 * Time: 15:03
 */

namespace app\modules\admin\controllers;

use app\models\Product;
use app\models\UploadForm;
use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;

class ProductController extends Controller
{
    public $enableCsrfValidation = false;
    public $layout               = false;
    //产品管理
    public function actionProduct()
    {
        //验证是否登录
        if (!SessionX::make()) {
            return $this->render('../login/login');
        }

        //查询产品表
        $product = Product::find()->asArray()->all();
        return $this->render('productlist', [
            'product' => $product,
        ]);
    }
    //接受编辑产品请求
    public function actionEdit()
    {
        //验证是否登录
        if (!SessionX::make()) {
            return $this->render('../login/login');
        }

        $request = \Yii::$app->request;
        $sql     = 'select * from product where productId=:id';
        $product = Product::findBySql($sql, [':id' => $request->get('pid')])->all();
        return $this->render('productEdit', [
            'product' => $product,
        ]);
    }
    //编辑产品
    //接受添加产品请求
    //添加产品
    public function actionAdd()
    {
        //验证是否登录
        if (!SessionX::make()) {
            return $this->render('../login/login');
        }

        return $this->render('productAdd');
    }
    //删除产品
    public function actionDelete()
    {
        //验证是否登录
        if (!SessionX::make()) {
            return $this->render('../login/login');
        }

        $request = \Yii::$app->request;
        Product::deleteAll('productId=:id', [':id' => $request->post('productId')]);

        $product = Product::find()->asArray()->all();
        return $this->render('productlist', [
            'product' => $product,
        ]);
    }
    public function actionUpload()
    {
        //验证是否登录
        if (!SessionX::make()) {
            return $this->render('../login/login');
        }

        $request = Yii::$app->request;
        $model   = new UploadForm();
        if (Yii::$app->request->isPost) {
            $model->image = UploadedFile::getInstance($model, 'image');
            if ($model->upload()) {
                $product               = new Product();
                $path                  = '../static/images/' . $model->image;
                $product->productName  = $request->post('name');
                $product->productTitle = $request->post('title');
                $product->picPath      = $path;
                $product->productType  = $request->post('type');
                $product->productTime  = '2016-09-8';
                //未做验证
                $product->save();
                //echo $request->post('name');
                //echo $request->post('title');

                //echo $request->post('type');
                // file is uploaded successfully
                //echo "File successfully uploaded";
                //查询产品表
                $product = Product::find()->asArray()->all();
                return $this->render('productlist', [
                    'product' => $product,
                ]);
            }
        }
        return $this->render('productAdd', ['model' => $model]);
    }
}
