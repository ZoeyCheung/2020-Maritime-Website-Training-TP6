<?php

namespace app\controller;

use app\BaseController;
use think\facade\View;

class Index extends BaseController
{
    public function index()
    {
        return View();
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }
}
