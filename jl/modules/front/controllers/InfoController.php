<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/9/6
 * Time: 11:46
 */

namespace app\modules\front\controllers;

use app\models\Jouralism;
use app\models\Notice;
use yii\web\Controller;

class InfoController extends Controller
{
    //关闭默认布局
    public $layout = false;
    public function actionInfo()
    {
        //获取到新闻ID
        $id        = \Yii::$app->request->get('fid');
        $sql       = 'select * from jouralism where JouralismId=:id';
        $jouralism = Jouralism::findBySql($sql, [':id' => $id])->all();
        //最新公告
        $notice = Notice::find()->limit(3)->asArray()->all();
        return $this->render('article', [
            'jouralism' => $jouralism,
            'notice'    => $notice,
        ]);
    }

    public function actionInfos()
    {
        //新闻表
        $jouralism = Jouralism::find()->asArray()->all();
        //公告表
        $notice = Notice::find()->limit(3)->asArray()->all();
        return $this->render('info', [
            'jouralism' => $jouralism,
            'notice'    => $notice,
        ]);
    }

}
