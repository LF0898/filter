<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/9/8
 * Time: 11:27
 */

namespace app\models;

use yii\db\ActiveRecord;

class Admin extends ActiveRecord
{
    public function reles()
    {
        return [
            ['admUser', 'length' => [5, 12]],
            ['admPaw', 'length' => [6, 80]],
        ];
    }
}
