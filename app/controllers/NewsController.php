<?php

class NewsController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {


    }

    public function detailAction($id){
        $this->view->setVar('news',News::findFirst($id));
    }

    public function listAction($page){
        $paginator = new \Phalcon\Paginator\Adapter\Model(array('data'=>News::find(),'limit'=>10,'page'=>$page));
        $list = $paginator->getPaginate();
        $this->view->setVar('list', $list);
    }
}

