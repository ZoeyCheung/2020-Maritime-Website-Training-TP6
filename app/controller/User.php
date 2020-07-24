<?php
/*
 * @Description: 
 * @version: V 1.0
 * @Author: Zoey Cheung
 * @Date: 2020-07-22 18:42:39
 * @LastEditors: Zoey Cheung
 * @LastEditTime: 2020-07-24 17:45:29
 */ 

namespace app\controller;

use app\BaseController;
use think\facade\Request;
use think\facade\Validate;

class User extends BaseController
{
    /**
     * @Description: 
     * @param {type} 
     * @return: 
     * @route("user")
     */
    public function index()
    {
        return "user";
    }
    /**
     * @Description: 
     * @param {type} 
     * @return: 
     * @route("login","User/login")
     */
    public function login()
    {
        // try {
        //     validate(User::class)->check();
        // } catch (ValidateException $e) {
        //     // 验证失败 输出错误信息
        //     dump($e->getError());
        // }
        $logoInfo = request()->param();
        // var_dump($logoInfo);
        // $result = validate(User::class)->check($logoInfo);

        return View('./login');
    }
    public function logOut()
    {
        return "loginOut";
    }
    public function register()
    {
        return "register";
    }

    public function token()
    {
        # code...
    }
}
