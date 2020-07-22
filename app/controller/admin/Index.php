<?php

namespace app\controller\admin;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
        return View();
        // return 'admin index';
    }

    public function hello(string $name)
    {
        return 'Hello,'.$name;
    }
}
