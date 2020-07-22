<?php
/*
 * @Descripttion: 
 * @version: V 1.0
 * @Author: Zoey Cheung
 * @Date: 2020-07-20 18:19:20
 * @LastEditors: Zoey Cheung
 * @LastEditTime: 2020-07-22 19:32:46
 */ 

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
