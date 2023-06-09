<?php

namespace app\admin\controller\cms;

use app\common\controller\Backend;

/**
 * 搜索引擎记录管理
 *
 * @icon fa fa-circle-o
 */
class SpiderLog extends Backend
{

    /**
     * SpiderLog模型对象
     * @var \app\admin\model\cms\SpiderLog
     */
    protected $model = null;
    protected $searchFields = 'id,aid,name,url';

    public function _initialize()
    {
        parent::_initialize();
        $config = get_addon_config('cms');
        $this->model = new \app\admin\model\cms\SpiderLog;
        $this->view->assign("spiderRecord", intval($config['spiderrecord']?? 0));
        $this->view->assign("typeList", $this->model->getTypeList());
        $this->view->assign("nameList", $config['spiders'] ?? []);
        $this->assignconfig("nameList", $config['spiders'] ?? []);
    }


    /**
     * 默认生成的控制器所继承的父类中有index/add/edit/del/multi五个基础方法、destroy/restore/recyclebin三个回收站方法
     * 因此在当前控制器中可不用编写增删改查的代码,除非需要自己控制这部分逻辑
     * 需要将application/admin/library/traits/Backend.php中对应的方法复制到当前控制器,然后进行修改
     */


}
