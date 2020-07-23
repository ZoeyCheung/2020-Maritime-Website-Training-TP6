<?php
/*
 * @Descripttion: 
 * @version: V 1.0
 * @Author: Zoey Cheung
 * @Date: 2020-07-20 16:08:22
 * @LastEditors: Zoey Cheung
 * @LastEditTime: 2020-07-23 14:35:56
 */

namespace app\controller;

use app\BaseController;
use app\model\Goods as ModelGoods;
use think\facade\View;

class Goods extends BaseController
{
    public function index()
    {
        $goods = ModelGoods::order(['percentage'=>'desc','id'=>'desc'])->select();
        
        View::assign([
            'title' => 'Goods',
            'list_goods' => $goods
        ]);
        return View();
        // return "goods";
    }

    public function detail($id)
    {
        $goods = ModelGoods::with('goodsImg')->find($id);

        $recommend_goods = ModelGoods::where('is_recommend',1)->limit(4)->order(['percentage'=>'desc','id'=>'desc'])->select();

        View::assign([
            'title' => $goods->goods_name,
            'goods' => $goods,
            'recommend_goods' => $recommend_goods,
        ]);

        return View();
    }
}
