<?php

namespace app\controller;

use app\model\Goods as GoodsModel;
use app\model\GoodsImg as GoodsImgModel;
use app\model\User as UserModel;
use think\facade\Db;

class Datatest
{
    public function index()
    {
        // hasMany 正向关联
        // $goods =  GoodsModel::find(42);
        // return json($goods->goodsImg);

        // belongsTo 反向关联
        // $goodsImg =  GoodsImgModel::find(5);
        // return json($goodsImg->goods);

        // 关联新增、关联修改
        // $goods =  GoodsModel::find(43);
        // $data = [
        //     [
        //         // 'id' => 9,
        //         'goods_id' => 44,
        //         'img_url' => 'product-single-big-2.jpg'
        //     ],
        //     [
        //         // 'id' => 10,
        //         'goods_id' => 44,
        //         'img_url' => 'product-single-big-3.jpg'
        //     ],
        //     [
        //         // 'id' => 11,
        //         'goods_id' => 44,
        //         'img_url' => 'product-single-big-4.jpg'
        //     ],
        //     [
        //         // 'id' =>12,
        //         'goods_id' => 44,
        //         'img_url' => 'product-single-big-5.jpg'
        //     ]
        // ];
        // $goods->goodsImg()->saveAll($data);

        // 关联查询、关联删除
        // $goods =  GoodsModel::with('goodsImg')->find(63);
        // return json($goods);
        // $goods->together(['goodsImg'])->delete();

        // 只显示有关联数据的
        // return json(GoodsModel::has('goodsImg','>',0)->select());

        $goods = GoodsModel::select();
        foreach($goods as $item){
            $item['percentage'] = $item->percentage;
            $goodsNew[] = $item;
        }
        return json($goodsNew);
    }

    public function getUsers()
    {
        $user =  UserModel::select();
        return json($user);
    }

    public function getUser($id)
    {
        $user =  UserModel::column('username', 'id');
        // return DB::getLastSql();
        // return json($user);
        dump($user);
    }

    public function getGoods($id)
    {
        $goods =  GoodsModel::select();
        // GoodsModel::chunk(3,function($goods){
        //     foreach($goods as $item){
        //         dump($item);
        //     }
        // });

        // $cursor = GoodsModel::cursor();

        // foreach ($cursor as $item) {
        //     dump($item);
        // }
        // return json($goods);
        dump($goods);
    }

    public function insertUser()
    {
        $data = [
            'username' => '13752139580',
            'password' => '111111',
            'nickname' => 'use10',
            'is_admin' => 1
        ];

        $user = new UserModel();
        $user->save($data);
        echo $user->create_time;
    }

    public function updataUser($id)
    {
        $data = [
            'id' => $id,
            'nickname' => '李白',
            'password' => '123456',
            'is_admin' => 0
        ];

        echo UserModel::update($data);
    }

    public function initUser()
    {
        $data = [
            [
                'username' => 'zoeycheung',
                'password' => '123456',
                'nickname' => 'Zoey Cheung',
                'is_admin' => 1
            ],
            [
                'username' => '13752139594',
                'password' => '123456',
                'nickname' => 'Zhang Na',
                'is_admin' => 1
            ],
            [
                'username' => '13752139595',
                'password' => '222222',
                'nickname' => 'user05',
                'is_admin' => 0
            ],
            [
                'username' => '13752139596',
                'password' => '222222',
                'nickname' => 'user07',
                'is_admin' => 0
            ],
            [
                'username' => '13752139597',
                'password' => '222222',
                'nickname' => 'user07',
                'is_admin' => 0
            ],
            [
                'username' => '13752139598',
                'password' => '222222',
                'nickname' => 'user08',
                'is_admin' => 0
            ],
            [
                'username' => '13752139599',
                'password' => '222222',
                'nickname' => 'user09',
                'is_admin' => 0
            ],
        ];

        Db::name('users')->delete(true);

        $user = new UserModel();
        return $user->saveAll($data);
    }

    public function initGoods()
    {
        $data = [
            [
                'goods_sn' => 'sn0001',
                'goods_name' => 'TOUCHLESS BOTTLE',
                'origin_price' => 178,
                'goods_price' => 125,
                'thumb_img' => '02_catalogue_page_001.jpg'
            ],
            [
                'goods_sn' => 'sn0002',
                'goods_name' => 'COFFEE MACHINE',
                'origin_price' => 178,
                'goods_price' => 178,
                'thumb_img' => '02_catalogue_page_002.jpg'
            ],
            [
                'goods_sn' => 'sn0003',
                'goods_name' => 'WOOD TABLET DECK',
                'origin_price' => 25,
                'goods_price' => 25,
                'thumb_img' => '01_home_page_007.jpg'
            ],
            [
                'goods_sn' => 'sn0004',
                'goods_name' => 'STONE CARPET',
                'origin_price' => 34,
                'goods_price' => 34,
                'thumb_img' => '02_catalogue_page_004.jpg'
            ],
            [
                'goods_sn' => 'sn0005',
                'goods_name' => 'POLY KNIFE',
                'origin_price' => 8,
                'goods_price' => 8,
                'thumb_img' => '02_catalogue_page_005.jpg'
            ],
            [
                'goods_sn' => 'sn0006',
                'goods_name' => 'DUTCH GREY BAG',
                'origin_price' => 33,
                'goods_price' => 33,
                'thumb_img' => '01_home_page_006.jpg'
            ],
            [
                'goods_sn' => 'sn0007',
                'goods_name' => 'MONACO SET LAMP',
                'origin_price' => 19,
                'goods_price' => 19,
                'thumb_img' => '02_catalogue_page_007.jpg'
            ],
            [
                'goods_sn' => 'sn0008',
                'goods_name' => 'COSMO ICE BOTTLE',
                'origin_price' => 27,
                'goods_price' => 27,
                'thumb_img' => '02_catalogue_page_008.jpg'
            ],
            [
                'goods_sn' => 'sn0009',
                'goods_name' => 'COGEN WARM LAMP',
                'origin_price' => 56,
                'goods_price' => 56,
                'thumb_img' => '01_home_page_005.jpg'
            ],

            [
                'goods_sn' => 'sn0010',
                'goods_name' => 'GREEN CARD PEN',
                'origin_price' => 12,
                'goods_price' => 12,
                'thumb_img' => '02_catalogue_page_010.jpg'
            ],
            [
                'goods_sn' => 'sn0011',
                'goods_name' => 'CONFETTI LAMP',
                'origin_price' => 60,
                'goods_price' => 45,
                'thumb_img' => '02_catalogue_page_011.jpg'
            ],
            [
                'goods_sn' => 'sn0012',
                'goods_name' => 'HOP TABLET COVER',
                'origin_price' => 20,
                'goods_price' => 20,
                'thumb_img' => '02_catalogue_page_012.jpg'
            ]
        ];

        Db::name('goods')->delete(true);

        $goods = new GoodsModel();

        return $goods->saveAll($data);
    }

    public function initGoodsImg()
    {
        $data = [
            [
                'goods_id' => 42,
                'img_url' => 'product-single-big-2.jpg'
            ],
            [
                'goods_id' => 42,
                'img_url' => 'product-single-big-3.jpg'
            ],
            [
                'goods_id' => 42,
                'img_url' => 'product-single-big-4.jpg'
            ],
            [
                'goods_id' => 42,
                'img_url' => 'product-single-big-5.jpg'
            ]
        ];
        Db::name('goodsImg')->delete(true);

        $goodsImg = new GoodsImgModel();

        return $goodsImg->saveAll($data);
    }
}
