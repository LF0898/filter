<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/9/26
 * Time: 11:47
 */

namespace MyApp\Controllers\Front;

use MyApp\Models\Discuss;
use MyApp\Models\Jouralism;

class IndexController extends BaseController
{
    //新闻首页
    public function indexAction()
    {
//        $findList = new Admin();
        //        $data     = $findList->select('*');
        //
        //        $this->view->setVar('data', $data);
        $find    = new Jouralism();
        $count   = $find->count(1);
        $page    = new Paginator($count, 10);
        $columns = 'jouralismTile';
        $where   = ['1'];
        //$data    = $find->select('jouralismTitle', 'jouralismTitleId');
        $data = $find->select('*');

        //var_dump($data);
        $this->view->setVar('data', $data);
        $this->view->setVar('page', $page->showpage());
    }

    //新闻详情
    public function jouralismAction()
    {
        echo $this->request->get('id');

        $find = new Jouralism();

        $where = ['jouralismId' => $this->request->get('id')];

        $data = $find->select('*', $where);

        $this->view->setVar('data', $data);

        //var_dump($data);
    }

    //添加评论
    public function discussAction()
    {
        //echo $this->request->getPost('id');

        $getpost = $this->request;

        //echo $getpost->getPost('id');
        //echo $getpost->getPost('title');
        //echo $getpost->getPost('content');

        //非空判断
        if (!empty($getpost->getPost('id')) && !empty($getpost->getPost('title')) && !empty($getpost->getPost('content'))) {

            $discuss = new Discuss();
            $data    = [
                'jouralismId'    => $getpost->getPost('id'),
                'discussTitle'   => $getpost->getPost('title'),
                'discussContent' => $getpost->getPost('content'),
            ];
            if ($discuss->insert($data)) {
                echo '插入成功！';
            } else {
                echo '插入失败！';
            }

        } else {
            echo '有空值！';
        }

    }

}
