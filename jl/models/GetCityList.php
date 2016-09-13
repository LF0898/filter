<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/9/12
 * Time: 11:56
 */

namespace app\models;

use yii\db\ActiveRecord;

class GetCityList extends ActiveRecord
{

    public function getCityList($pid)
    {
        $model = City::findAll(array('pid' => $pid));
        return ArrayHelper::map($model, 'id', 'name');
    }
}
