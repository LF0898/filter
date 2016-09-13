<?php

namespace app\modules\admin\controllers;

use app\models\SessionX;
use yii\web\Controller;

/**
 * Default controller for the `AdminiModule` module
 */
class DefaultController extends Controller
{
    public $layout = false;
    /**
     * Renders the index view for the module
     * @return string
     */
    //渲染主视图
    public function actionIndex()
    {
        if (!SessionX::make()) {
            return $this->render('../login/login');
        }

        return $this->render('index');
    }
    //渲染头部
    public function actionTop()
    {
        if (!SessionX::make()) {
            return $this->render('../login/login');
        }
        return $this->render('top');
    }
    //渲染菜单
    public function actionMenu()
    {
        if (!SessionX::make()) {
            return $this->render('../login/login');
        }
        return $this->render('menu');
    }
    //渲染主视图
    public function actionSysinfo()
    {
        if (!SessionX::make()) {
            return $this->render('../login/login');
        }
        return $this->render('sysinfo');
    }
    //退出登录
    public function actionLogoff()
    {
        $session = \Yii::$app->session;
        $session->remove('user');
        return $this->render('../login/login');
    }
}
