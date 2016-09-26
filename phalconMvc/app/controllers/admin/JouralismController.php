<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/9/26
 * Time: 15:19
 */

namespace MyApp\Controllers\Admin;

use MyApp\Library\Paginator;
use MyApp\Models\Discuss;
use MyApp\Models\Jouralism;

class JouralismController extends BaseController
{
    //新闻首页
    public function indexAction()
    {
        $jouralism = new Jouralism();

        $data  = $jouralism->select('*');
        $count = $jouralism->count(1);

        $page = new Paginator($count, 10);

        $this->view->setVar('data', $data);
        $this->view->setVar('page', $page->showpage());
    }

    //新闻详情
    public function jouralismAction()
    {
        $get = $this->request;
        //echo $get->get('id');

        $jouralism = new Jouralism();

        $where = ['jouralismId' => $get->get('id')];

        $jouralism = $jouralism->select('*', $where);

        $discuss = new Discuss();

        $discuss = $discuss->select($where, '*');

        $this->view->setVar('discuss', $discuss);
        $this->view->setVar('jouralism', $jouralism);

    }
    //新闻查询
    public function queryAction()
    {
        $discuss = new Discuss();
        $request = $this->request;
        $request = '%' . $request->getPost('query') . '%';
        $where   = ['discussContent' => $request];
        var_dump($discuss->select($where));

    }

    //修改新闻（接新闻详情）
    public function editAction()
    {
        $jouralism = new Jouralism();
        $request   = $this->request;
        $data      = ['jouralismTitle' => $request->getPost('title'), 'jouralismContent' => $request->getPost('content')];
        $where     = ['id' => $request->getPost('id')];
        $jouralism->update($data, $where);
    }
    //删除新闻
    public function deletejouralismAction()
    {
        $jouralism = new Jouralism();
        $where     = ['jouralismid' => $this->request->getPost('id')];
        $jouralism->delete($where);

        //删除对应的评论
        $discuss = new Discuss();
        $discuss->delete($where);
    }
    //删除评论
    public function deletediscussAction()
    {
        //echo $this->request->getPost('id');
        $discuss = new Discuss();
        $where   = ['id' => $this->request->getPost('id')];
        $discuss->delete($where);
    }
    //添加新闻
    public function addAction()
    {

    }
    //添加新闻操作
    public function addsAction()
    {
        $request = $this->request;
        //$request->getPost('title');
        //;
        $data = ['jouralismTitle' => $request->getPost('title'),
            'jouralismContent'        => $request->getPost('content'),
            'jouralismTime'           => time(),
        ];
        $jouralism = new Jouralism();
        $jouralism->insert($data);

    }

}
