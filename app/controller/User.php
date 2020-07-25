<?php
/*
 * @Description: 
 * @version: V 1.0
 * @Author: Zoey Cheung
 * @Date: 2020-07-22 18:42:39
 * @LastEditors: Zoey Cheung
 * @LastEditTime: 2020-07-25 21:20:07
 */

namespace app\controller;

use app\BaseController;
use app\model\User as ModelUser;
use app\validate\Login as ValidateLogin;
use app\validate\User as ValidateUser;
use think\exception\ValidateException;
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

        // if (!captcha_check($logoInfo['captcha'])) {
        //     $errors[] = '验证码错误';
        // } else {
        //     $user = ModelUser::where(['username' => $logoInfo['username'], 'password' => sha1($logoInfo['password'])])->find();
        //     if (empty($user)) {
        //         $errors[] = '用户名或密码错误';
        //     } else {
        //         session('user_id', $user['id']);
        //         session('username', $user['username']);
        //         session('nickname', $user['nickname']);
        //         session('is_admin', $user['is_admin']);
        //         if ($user['is_admin']) {
        //             return redirect($logoInfo['referer_url']);
        //         } else {
        //             return redirect(url('/'));
        //         }
        //     }
        // }
        try {
            validate(ValidateLogin::class)->batch(true)->check($logoInfo);
        } catch (ValidateException $exception) {
            $errors[] = $exception->getError();
        }

        $user = ModelUser::where(['username' => $logoInfo['username'], 'password' => sha1($logoInfo['password'])])->find();
        if (empty($user)) {
            $errors[] = '用户名或密码错误';
        }

        if (empty($error)) {
            if ($logoInfo['referer_url'] == 'dashboard' && !$user['is_admin']) {
                View::assign([
                    'list_errors' => ['请使用管员账号登录后台'],
                    'url_text' => 'Back to fix',
                    'url_path' => '/login?url=dashboard',
                    'referer_url' => $logoInfo['referer_url']
                ]);
                return view('./public/message');
            } else {
                session('user_id', $user['id']);
                session('username', $user['username']);
                session('nickname', $user['nickname']);
                session('is_admin', $user['is_admin']);
                return redirect($logoInfo['referer_url']);
            }
        } else {
            View::assign([
                'list_errors' => $errors,
                'url_text' => 'Back to fix',
                'url_path' => '/login',
                'referer_url' => $logoInfo['referer_url']
            ]);
            return view('./public/message');
        }
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

    public function save()
    {
        $register = request()->param();

        try {
            validate(ValidateUser::class)->batch(true)->scene('insert')->check($register);
        } catch (ValidateException $exception) {
            View::assign([
                'list_errors' => $exception->getError(),
                'url_text' => 'Back to fix',
                'url_path' => '/register',
                'referer_url' => $register['referer_url']
            ]);
            return view('./public/message');
        }

        $register['password'] = sha1($register['password']);

        $user = new ModelUser;
        $user->allowField(['username', 'password', 'nickname'])->save($register);

        session('user_id', $user->id);
        session('username', $user['username']);
        session('nickname', $user['nickname']);
        session('is_admin', 0);
        return redirect('/');
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
