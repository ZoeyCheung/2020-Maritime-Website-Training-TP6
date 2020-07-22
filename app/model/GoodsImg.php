<?php

namespace app\model;

use think\Model;

class GoodsImg extends Model
{
    protected $name = 'goods_img';

    public function goods(){
        return $this->belongsTo(Goods::class,'goods_id','id');
    }
}