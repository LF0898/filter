<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/9/8
 * Time: 14:08
 */

namespace app\models;

use yii\db\ActiveRecord;

class Users extends ActiveRecord
{
    public static function tableName()
    {
        return 'Admin';
    }
}
