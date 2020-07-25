<?php
/*
 * @Description: 
 * @version: V 1.0
 * @Author: Zoey Cheung
 * @Date: 2020-07-22 18:42:39
 * @LastEditors: Zoey Cheung
 * @LastEditTime: 2020-07-25 19:28:06
 */

namespace app\controller;

use app\BaseController;
use app\model\User as ModelUser;
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

        if (!captcha_check($logoInfo['captcha'])) {
            $errors = '验证码错误';
        } else {
            $user = ModelUser::where(['username' => $logoInfo['username'], 'password' => sha1($logoInfo['password'])])->find();
            if (empty($user)) {
                $errors = '用户名或密码错误';
            } else {
                session('user_id',$user['id']);
                session('username', $user['username']);
                session('nickname', $user['nickname']);
                session('is_admin', $user['is_admin']);
                if($user['is_admin']){
                    return redirect($logoInfo['referer_url']);
                }else{
                    return redirect(url('/'));
                }
                
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

    public function save()
    {
        $register = request()->param();

        try{
            validate(ValidateUser::class)->batch(true)->scene('insert')->check($register);
        }catch(ValidateException $exception){
            dd($exception->getError());
        }

        $register['password'] = sha1($register['password']);

        $user = new ModelUser;
        $user->allowField(['username','password','nickname'])->save($register);

        session('user_id',$user->id);
        session('username', $user['username']);
        session('nickname', $user['nickname']);
        session('is_admin', 0);
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
