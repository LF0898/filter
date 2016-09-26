<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/9/26
 * Time: 13:37
 */

namespace MyApp\Models;

class Admin extends Model
{
    public function getSource()
    {
        return 'admin';
    }

    public function select($columns, $where)
    {
        $findList = parent::select($columns, $where);
        return $findList;
    }

}
