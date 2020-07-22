<?php

namespace app\model;

use think\Model;

class Goods extends Model
{
    protected $name = 'goods';

    public function goodsImg()
    {
        return $this->hasMany(GoodsImg::class, 'goods_id', 'id');
    }

    // 计算优惠比例
    public function getPercentageAttr($value, $data)
    {
        return ceil(($data['origin_price']-$data['goods_price'])/$data['origin_price']*100);
    }
}
