<?php

namespace app\controller;

use app\BaseController;

class Goods extends BaseController
{
    public function index()
    {
        return View();
        // return "goods";
    }

    public function detail($id)
    {
        // return View();
        return 'goods detail ' . $id;
        // return "goods detail";
    }
}
