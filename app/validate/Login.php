<?php
/*
 * @Description: 
 * @version: V 1.0
 * @Author: Zoey Cheung
 * @Date: 2020-07-25 20:58:06
 * @LastEditors: Zoey Cheung
 * @LastEditTime: 2020-07-25 21:04:56
 */ 
declare (strict_types = 1);

namespace app\validate;

use think\Validate;

class Login extends Validate
{
    /**
     * 定义验证规则
     * 格式：'字段名'	=>	['规则1','规则2'...]
     *
     * @var array
     */	
	protected $rule = [
        '__token__' => 'token',
        'username' => 'require',
        'password' => 'require',
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
        'password.require' => '密码不得为空',
        'captcha.require' => '验证码不得为空',
        'captcha.captcha' => '验证码错误'
    ];
}
