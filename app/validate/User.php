<?php
/*
 * @Description: 
 * @version: V 1.0
 * @Author: Zoey Cheung
 * @Date: 2020-07-23 08:37:46
 * @LastEditors: Zoey Cheung
 * @LastEditTime: 2020-07-25 21:05:07
 */

declare(strict_types=1);

namespace app\validate;

use think\Validate;

class User extends Validate
{
    /**
     * 定义验证规则
     * 格式：'字段名'	=>	['规则1','规则2'...]
     *
     * @var array
     */
    protected $rule = [
        '__token__' => 'token',
        'username' => 'require|min:2|max:20|chsDash|unique:users',
        'password' => 'require|min:6',
        'repassword' => 'require|confirm:password',
        'nickname' => 'require',
        'captcha' => 'require|captcha',
    ];

    /**
     * 定义错误信息
     * 格式：'字段名.规则名'	=>	'错误信息'
     *
     * @var array
     */
    protected $message = [
        'username.require' => '用户名不得为空',
        'username.min' => '用户名不得少于2位',
        'username.max' => '用户名不得大于20位',
        'username.chsDash' => '用户名只能是汉字、字母、数字或下划线',
        'username.unique' => '用户名已存在',
        'password.require' => '密码不得为空',
        'password.max' => '密码不得少于6位',
        'repassword.require' => '确认密码不能为空',
        'repassword.confirm' => '两次输入的密码不一致',
        'nickname.require' => '昵称不得为空',
        'captcha.require' => '验证码不得为空',
        'captcha.captcha' => '验证码错误'
    ];

    // 场景验证,场景名称是自定义的
    protected $scene = [
        'insert' => ['__token__', 'username', 'password', 'repassword', 'nickname'],
        'edit' => ['__token__', 'password', 'nickname']
    ];
}
