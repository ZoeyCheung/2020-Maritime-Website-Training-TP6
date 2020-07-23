<?php
/*
 * @Descripttion: 
 * @version: V 1.0
 * @Author: Zoey Cheung
 * @Date: 2020-07-20 18:19:20
 * @LastEditors: Zoey Cheung
 * @LastEditTime: 2020-07-23 18:18:34
 */ 

namespace app\controller\admin;

use app\BaseController;
use think\facade\View;

class Index extends BaseController
{
    public function index()
    {
        View::assign([
            'title' => 'Administrator',
        ]);
        return View();
        // return 'admin index';
    }
}
