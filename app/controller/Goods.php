<?php
/*
 * @Descripttion: 
 * @version: V 1.0
 * @Author: Zoey Cheung
 * @Date: 2020-07-20 16:08:22
 * @LastEditors: Zoey Cheung
 * @LastEditTime: 2020-07-22 19:30:40
 */ 

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
