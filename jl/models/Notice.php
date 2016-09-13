<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/9/6
 * Time: 19:26
 */

namespace app\models;

use yii\db\ActiveRecord;

class Notice extends ActiveRecord
{
    public function reles()
    {
        return [
            ['noticeContent', 'string'],
            ['noticeTitle', 'string', 'length' => [0, 25]],
        ];
    }
}
