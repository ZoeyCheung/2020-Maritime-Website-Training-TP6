<?php
/*
 * @Descripttion: 
 * @version: V 1.0
 * @Author: Zoey Cheung
 * @Date: 2020-06-25 00:05:52
 * @LastEditors: Zoey Cheung
 * @LastEditTime: 2020-07-23 13:36:54
 */

namespace app\controller;

use app\BaseController;
use app\model\Goods;
use think\facade\View;

class Index extends BaseController
{
    public function index()
    {
        $goods = Goods::where('is_recommend',1)->limit(4)->order('id', 'desc')->select();

        foreach($goods as $item){
            $item['percentage'] = $item->percentage;
            $goods_new[] = $item;
        }

        View::assign([
            'title' => '',
            'list_goods' => $goods_new
        ]);

        return View();
    }
}
