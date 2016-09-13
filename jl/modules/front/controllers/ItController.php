<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/9/12
 * Time: 10:20
 */

namespace app\modules\front\controllers;

use app\models\Account;
use app\models\City;
use app\models\Province;
use Yii;
use yii\web\Controller;

class ItController extends Controller
{
    public $enableCsrfValidation = false;

    public $layout = false;

    public function actionUser()
    {
        //查询用户表
        $account = Account::find()->asArray()->all();

        $session = Yii::$app->session;
        //$session->get();获取用户id
        //根据id查表
        // $sql  = 'SELECT * from account WHERE fatherid=:id';

        //查询省表
        $province = Province::find()->asArray()->all();

        //市表
        $city = City::find()->asArray()->all();

        return $this->render('index', [
            'account'  => $account,
            'province' => $province,
            'city'     => $city,
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

    public function actionKeep()
    {
        $request = \Yii::$app->request;
        //echo $request->post('email');
        //echo $request->post('province');
        //echo $request->post('city');
        //echo $request->post('tel');
        //echo $request->post('address');
        //echo $request->post('qq');

        $aid = Account::find()->where(['id' => 2])->one();

        $aid->phoneNumber = $request->post('tel');
        $aid->email       = $request->post('email');
        $aid->qqNumber    = $request->post('qq');
        $aid->province    = $request->post('province');
        $aid->city        = $request->post('city');
        $aid->address     = $request->post('address');
        $aid->save();
        //return $this->render();
    }

    //渲染修改密码页面
    public function actionPaw()
    {
        //$aid = Account::find()->where(['id' => 2])->one();
        //var_dump($aid);
        return $this->render('pawup');
    }

    //修改密码
    public function actionRevise()
    {
        $session = \Yii::$app->session;
        $request = \Yii::$app->request;
        //非空验证
        //echo $request->post('paw');
        //echo $request->post('fcpaw');
        if (!empty($request->post('paw')) && !empty($request->post('fcpaw'))) {
            //两次密码验证
            if ($request->post('paw') == $request->post('fcpaw')) {
                //获取session
                //$session->get('user');
                $session = 'ycf';
                //查表
                $aid             = Account::find()->where(['accountName' => $session])->one();
                $aid->accountPwd = $request->post('paw');
                //插入
                $aid->save();
                echo '成功！';
            } else {
                //两次密码不一致跳转
                echo '发生错误a！';
                //return $this->render('index');
            }
        } else {
            //空值跳转
            echo '发生错误b！';
        }
        //return $this->render('index');
    }

}
