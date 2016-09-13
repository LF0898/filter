<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/9/8
 * Time: 14:13
 */

namespace app\modules\admin\controllers;

use app\models\Admin;
use yii\web\Controller;

class LoginController extends Controller
{
    public $enableCsrfValidation = false;

    public $layout = false;

    //登录
    public function actionIndex()
    {
        return $this->render('login');
    }

    //接收信息并验证
    public function actionLogin()
    {
        $request = \Yii::$app->request;
        $session = \Yii::$app->session;
        $session->open();
        //echo $request->post('username');
        //echo $request->post('password');
        if ($uid = Admin::find()->where(['admUser' => $request->post('username'), 'admPaw' => $request->post('password')])->one()) {
            echo '1';
            //echo $uid['admUser'];
            $session->set('user', $uid['admUser']);
            //echo $session->get('user');
            return $this->render('../default/index');
        } else {
            return $this->render('login');
        }

    }
}
