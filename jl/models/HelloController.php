<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/9/4
 * Time: 21:19
 */

namespace app\models;

use yii\web\Controller;

class HelloController extends Controller
{
    public function actionIndex()
    {
        echo 'hello';
        //return $this->renderPartial('index');
    }

}
