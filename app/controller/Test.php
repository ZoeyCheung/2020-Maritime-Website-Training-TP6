<?php
/*
 * @Description: 
 * @version: V 1.0
 * @Author: Zoey Cheung
 * @Date: 2020-07-22 20:30:57
 * @LastEditors: Zoey Cheung
 * @LastEditTime: 2020-07-23 12:57:59
 */

namespace app\controller;

use app\BaseController;
use app\facade\Test as FacadeTest;
use app\validate\User;
use think\exception\ValidateException;
use think\facade\Request;
use think\facade\View;

// use think\Request;

class Test extends BaseController
{
    public function __construct(Request $res)
    {
        $this->request = $res;
    }
    public function index(Request $res)
    {
        return $res->param('username');
    }
    public function get()
    {
        // 直接构造
        // return $this->request->param('username');

        // 助手函数
        // return request()->param('username');

        // 获取所有数据,特殊字符转义
        dump(Request::param());

        // 不转义
        dump(Request::param(false));
    }
    public function test()
    {
        return FacadeTest::hello('zn');
    }
    public function verify()
    {
        try {
            validate(User::class)->batch(true)->check([
                'username' => '',
                'password' => '1231',
                'nickname' => ''
            ]);
        } catch (ValidateException  $e) {
            dump($e->getError());
        }
    }
    public function show()
    {
        View::assign([
            'title' => 'test',
        ]);
        return view();
    }
}
