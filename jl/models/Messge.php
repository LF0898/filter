<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/9/7
 * Time: 21:07
 */

namespace app\models;

use yii\db\ActiveRecord;

class Messge extends ActiveRecord
{
    public function reles()
    {
        return [
            ['messgeName', 'string'],
            ['messges', 'string', 'length' => [0, 25]],
        ];
    }
}
