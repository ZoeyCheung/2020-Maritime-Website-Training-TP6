<?php
/*
 * @Description: 
 * @version: V 1.0
 * @Author: Zoey Cheung
 * @Date: 2020-07-22 19:52:11
 * @LastEditors: Zoey Cheung
 * @LastEditTime: 2020-09-06 18:42:02
 */

namespace app\controller\admin;

use app\model\Goods as ModelGoods;
use think\facade\Filesystem;
use think\facade\View;
use think\Request;

class Goods
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $search = request()->param();
        if (!empty($search)) {
            $goods = ModelGoods::order('id', 'desc')->where('goods_name', 'like', '%' . $search['search'] . '%')->select();
        } else {
            $goods = ModelGoods::order('id', 'desc')->select();
        }

        $data = [
            'title' => 'Goods Management',
            'list_goods' => $goods
        ];

        if (isset($search['search'])) {
            $data['search'] = $search['search'];
        }

        View::assign($data);
        return View();
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        View::assign([
            'title' => 'Goods Create'
        ]);
        return View();
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        $res = new ModelGoods;

        $goods = request()->param();
        $goods['goods_description'] = stripslashes(htmlspecialchars_decode(request()->param('goods_description')));
        $goods['percentage'] = ceil(($goods['origin_price'] - $goods['goods_price']) / $goods['origin_price'] * 100);

        $allow_field = ['goods_sn', 'goods_name', 'goods_quantity', 'origin_price', 'goods_price', 'percentage', 'goods_standard', 'goods_description', 'is_recommend'];

        // 如果有图片
        if (!empty($_FILES["thumb_img"]["name"])) {
            $goods['thumb_img'] = Filesystem::disk('public')->putfile('goods', request()->file('thumb_img'));
            array_push($allow_field, 'thumb_img');
        }

        if (isset($goods['is_recommend'])) {
            $goods['is_recommend'] = 1;
        } else {
            $goods['is_recommend'] = 0;
        }

        $res->allowField($allow_field)->save($goods);

        return $res ? view('./public/message', [
            'msg_title' => 'Success',
            'list_infos' => ['添加成功'],
            'url_text' => 'Back to Goods List',
            'url_path' => '/dashboard/goods',
        ]) : '添加失败';
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        View::assign([
            'title' => 'Goods Edit',
            'goods' => ModelGoods::find($id)
        ]);
        return View();
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        $res = ModelGoods::find($id);

        $goods = request()->param();
        $goods['goods_description'] = stripslashes(htmlspecialchars_decode(request()->param('goods_description')));
        $goods['percentage'] = ceil(($goods['origin_price'] - $goods['goods_price']) / $goods['origin_price'] * 100);

        $allow_field = ['goods_sn', 'goods_name', 'goods_quantity', 'origin_price', 'goods_price', 'percentage', 'goods_standard', 'goods_description', 'is_recommend'];

        // 如果有图片
        if (!empty($_FILES["thumb_img"]["name"])) {
            // 如果原来有图片，先删除
            if (!empty($res['thumb_img'])) {
                $path = app()->getRootPath() . 'public/storage/' . $res['thumb_img'];
                unlink($path);
            }
            $goods['thumb_img'] = Filesystem::disk('public')->putfile('goods', request()->file('thumb_img'));
            array_push($allow_field, 'thumb_img');
        }

        if (isset($goods['is_recommend'])) {
            $goods['is_recommend'] = 1;
        } else {
            $goods['is_recommend'] = 0;
        }

        $res->allowField($allow_field)->save($goods);

        return $res ? view('./public/message', [
            'msg_title' => 'Success',
            'list_infos' => ['修改成功'],
            'url_text' => 'Back to Goods List',
            'url_path' => '/dashboard/goods',
        ]) : '修改失败';
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        $res = ModelGoods::destroy($id);

        return $res ? view('./public/message', [
            'msg_title' => 'Success',
            'list_infos' => ['删除成功'],
            'url_text' => 'Back to Goods List',
            'url_path' => '/dashboard/goods',
        ]) : '删除失败';

        // ajax 返回值
        // if ($res) {
        //     $result = [
        //         'code' => 200,
        //         'msg' => '删除成功'
        //     ];

        //     echo json_encode($result);
        // }
    }

    //layui编辑器图片上传接口
    public function lay_img_upload()
    {
        $file = request()->file('file');

        if(empty($file)){
            $result["code"] = "1";
            $result["msg"] = "请选择图片";
            $result['data']["src"] = '';
        }else{
            // 移动到框架应用根目录public/storage/uploads 目录下
            $saveName = Filesystem::disk('public')->putfile('uploads', $file);
            if(!empty($saveName)){
                $name_path =str_replace('\\',"/",$saveName);
                //成功上传后 获取上传信息
                $result["code"] = '0';
                $result["msg"] = "上传成功";
                $result['data']["src"] = '/storage/'.$name_path;
            }else{
                  // 上传失败获取错误信息
                $result["code"] = "2";
                $result["msg"] = "上传出错";
                $result['data']["src"] ='';
            }


        }
        
        return json_encode($result);
    }
}
