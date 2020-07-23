<?php
/*
 * @Descripttion: 
 * @version: V 1.0
 * @Author: Zoey Cheung
 * @Date: 2020-06-25 00:05:52
 * @LastEditors: Zoey Cheung
 * @LastEditTime: 2020-07-23 14:09:03
 */

namespace app\controller;

use app\BaseController;
use app\model\Goods as ModelGoods;
use think\facade\View;

class Index extends BaseController
{
    public function index()
    {
        $goods = ModelGoods::where('is_recommend',1)->limit(4)->order(['percentage'=>'desc','id'=>'desc'])->select();

        View::assign([
            'title' => '',
            'list_goods' => $goods
        ]);

        return View();
    }
}
