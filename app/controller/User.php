<?php
/*
 * @Description: 
 * @version: V 1.0
 * @Author: Zoey Cheung
 * @Date: 2020-07-22 18:42:39
 * @LastEditors: Zoey Cheung
 * @LastEditTime: 2020-07-24 23:06:15
 */

namespace app\controller;

use app\BaseController;
use app\model\User as ModelUser;
use think\exception\ValidateException;
use think\facade\Request;
use think\facade\Validate;
use think\facade\View;

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
        View::assign([
            'referer_url' => request()->param('url') ? request()->param('url') : '/'
        ]);
        return View('./login');
    }

    public function check()
    {
        $logoInfo = request()->param();

        $errors = [];

        if (!captcha_check($logoInfo['captcha'])) {
            $errors = '验证码错误';
        } else {
            $user = ModelUser::where(['username' => $logoInfo['username'], 'password' => $logoInfo['password']])->find();
            if (empty($user)) {
                $errors = '用户名或密码错误';
            } else {
                session('username', $user['username']);
                session('nickname', $user['nickname']);
                session('is_admin', $user['is_admin']);
                return redirect($logoInfo['referer_url']);
            }
        }
        return redirect('/login?err=' . $errors);
    }

    public function logout()
    {
        // return "loginOut";
        // 清除session
        session(null);
        return redirect('/');
    }
    public function register()
    {
        View::assign([
            'referer_url' => $_SERVER["HTTP_REFERER"]
        ]);
        return View('./register');
    }

    public function addUser()
    {
        $user = request()->param();
        return redirect($user['referer_url']);
    }
    public function forgot()
    {
        return "forgot";
    }

    public function token()
    {
        # code...
    }
}
