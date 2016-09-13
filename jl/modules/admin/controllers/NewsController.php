<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/9/7
 * Time: 15:02
 */

namespace app\modules\admin\controllers;

use app\models\Notice;
use app\models\SessionX;
use yii\web\Controller;

class NewsController extends Controller
{

    public $enableCsrfValidation = false;
    public $layout               = false;
//最新公告
    public function actionNews()
    {
        //验证是否登录
        if (!SessionX::make()) {
            return $this->render('../login/login');
        }

        $notice = Notice::find()->asArray()->all();
        return $this->render('newslist', [
            'notice' => $notice,
        ]);
    }
    //接收修改公告请求
    public function actionRevise()
    {
        //验证是否登录
        if (!SessionX::make()) {
            return $this->render('../login/login');
        }

        //获取公告id
        $id     = \Yii::$app->request->get('nid');
        $sql    = 'select * from notice where noticeNo=:id';
        $notice = Notice::findBySql($sql, [':id' => $id])->all();
        return $this->render('newsrevise', [
            'notice' => $notice,
        ]);
    }
    //修改公告
    public function actionReviseed()
    {
        //验证是否登录
        if (!SessionX::make()) {
            return $this->render('../login/login');
        }

        $request = \Yii::$app->request;
        //获取公告id
        $id = $request->get('nid');
        //获取文章标题
        //$title = $request->post('title');
        //获取文章内容
        //$content = $request->post('content');
        //找到要修改的字段
        $nid = Notice::find()->where(['noticeNo' => $id])->one();

        $nid->noticeContent = $request->post('title');
        $nid->noticeTitle   = $request->post('content');
        $nid->save();

        $notice = Notice::find()->asArray()->all();
        return $this->render('newslist', [
            'notice' => $notice,
        ]);
    }

    //接受添加公告请求
    public function actionAdd()
    {
        //验证是否登录
        if (!SessionX::make()) {
            return $this->render('../login/login');
        }

        return $this->render('newsedit');
    }
    //添加公告
    public function actionAdded()
    {
        //验证是否登录
        if (!SessionX::make()) {
            return $this->render('../login/login');
        }

        $request = \Yii::$app->request;
        //echo $request->post('title');
        //echo $request->post('content');
        $notice                = new Notice();
        $notice->noticeContent = $request->post('title');
        $notice->noticeTitle   = $request->post('content');
        $notice->noticeTime    = '2016-9-1';
        $notice->addPeople     = 'fbl';
        $notice->validate();
        if ($notice->hasErrors()) {
            echo '数据不合法!';
            die();
        }
        $notice->save();
        echo '插入成功！';

        $notice = Notice::find()->asArray()->all();
        return $this->render('newslist', [
            'notice' => $notice,
        ]);
    }
    //删除公告
    public function actionDelete()
    {
        //验证是否登录
        if (!SessionX::make()) {
            return $this->render('../login/login');
        }

        //根据捕获到的ID删除数据
        $request = \Yii::$app->request;
        //echo $request->post('noticeNo');
        Notice::deleteAll('noticeNo=:id', [':id' => $request->post('noticeNo')]);

        //删除后
        $notice = Notice::find()->asArray()->all();
        return $this->render('newslist', [
            'notice' => $notice,
        ]);
    }
}
