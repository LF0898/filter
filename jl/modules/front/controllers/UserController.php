<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/9/13
 * Time: 10:19
 */

namespace app\modules\front\controllers;

use app\models\Account;
use app\models\Province;
use yii\web\Controller;

class UserController extends Controller
{
    public $enableCsrfValidation = false;

    public $layout = false;

    public function actionUserinfo()
    {
        //查询用户表
        $account = Account::find()->asArray()->all();
        //查询省表
        $province = Province::find()->asArray()->all();

        return $this->render('index', [
            'account'  => $account,
            'province' => $province,
        ]);
    }

    public function actionCity()
    {
        //获取到省id
        $id   = \Yii::$app->request->post('id');
        $sql  = 'SELECT * from city WHERE fatherid=:id';
        $data = City::findBySql($sql, [':id' => $id])->asArray()->all();
        //echo json_encode($data);
        //$data = ['北京'];
        echo json_encode($data);
        //echo json_encode('s');
    }

}
