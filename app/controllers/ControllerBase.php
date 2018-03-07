<?php
use Phalcon\Acl;
use Phalcon\Mvc\Controller;
use Phalcon\Acl\Adapter\Memory as AclList;
use Phalcon\Acl\Role;
use Phalcon\Acl\Resource;

abstract class ControllerBase extends Controller
{
    protected $acl;

    /**
     * 构造函数
     */
    protected function OnConstruct(){
        $this->acl = new AclList();
        $this->acl->setDefaultAction(Acl::DENY);
        $this->acl->setNoArgumentsDefaultAction(Acl::DENY);
        $this->acl->isAllowed("Guests", $this->dispatcher->getControllerName(), $this->dispatcher->getActionName());
    }

    /**
     * 初始化函数
     */
    public function initialize()
    {
        
    }
}
