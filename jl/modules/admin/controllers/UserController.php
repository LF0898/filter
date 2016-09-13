<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/9/7
 * Time: 15:06
 */

namespace app\modules\admin\controllers;

use app\models\Admin;
use app\models\SessionX;
use app\models\User;
use yii\web\Controller;

class UserController extends Controller
{
    public $enableCsrfValidation = false;
    //关闭默认布局
    public $layout = false;
//管理员
    public function actionUser()
    {
        //验证是否登录
        if (!SessionX::make()) {
            return $this->render('../login/login');
        }

        $admin = Admin::find()->asArray()->all();
        return $this->render('userlist', [
            'admin' => $admin,
        ]);
    }
    //接受编辑用户请求
    public function actionEdit()
    {
        //验证是否登录
        if (!SessionX::make()) {
            return $this->render('../login/login');
        }

        $request = \Yii::$app->request;
        //echo $request->get('uid');
        $sql   = 'select * from admin where admNo=:id';
        $admin = Admin::findBySql($sql, [':id' => $request->get('uid')])->all();
        return $this->render('useredit', [
            'admin' => $admin,
        ]);
    }
    //编辑用户
    public function actionRevise()
    {
        //验证是否登录
        if (!SessionX::make()) {
            return $this->render('../login/login');
        }

        $request = \Yii::$app->request;
        //
        $id  = $request->get('uid');
        $uid = Admin::find()->where(['AdmNo' => $id])->one();

        $uid->admUser = $request->post('username');
        $uid->admPaw  = $request->post('password');
        $uid->save();

        $admin = Admin::find()->asArray()->all();
        echo '<h1>修改成功！</h1>';
        return $this->render('userlist', [
            'admin' => $admin,
        ]);
    }
    //删除用户
    public function actionDelete()
    {
        //验证是否登录
        if (!SessionX::make()) {
            return $this->render('../login/login');
        }

        $request = \Yii::$app->request;
        //echo $request->post('admNo');
        Admin::deleteAll('admNo=:id', [':id' => $request->post('admNo')]);
        //Notice::deleteAll('noticeNo=:id', [':id' => $request->post('noticeNo')]);

        $admin = Admin::find()->asArray()->all();
        return $this->render('userlist', [
            'admin' => $admin,
        ]);
    }
    //增加用户
    public function actionAdd()
    {
        //验证是否登录
        if (!SessionX::make()) {
            return $this->render('../login/login');
        }

        $request = \Yii::$app->request;
        $admin   = new Admin();
        //echo $request->post('username');
        //echo $request->post('password');
        $admin->admUser = $request->post('username');
        $admin->admPaw  = $request->post('password');
        $admin->admTime = '2016-9-9';
        $admin->ip      = '127.0.0.0';
        $admin->admType = '1';
        $admin->validate();
        if ($admin->hasErrors()) {
            echo '数据不合法';
            die();
        }
        $admin->save();
        echo '添加成功!';

        $admin = Admin::find()->asArray()->all();
        return $this->render('userlist', [
            'admin' => $admin,
        ]);
    }
}
