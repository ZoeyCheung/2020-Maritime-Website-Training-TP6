<?php

namespace app\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
        return View();
        // return Env::get('database.hostname');
        // return Config::get('database.connections.mysql.hostname');
        // echo Config::has('database.connections.mysql.hostname');
    }

    public function hello(string $name)
    {
        return 'Hello,'.$name;
    }
}
