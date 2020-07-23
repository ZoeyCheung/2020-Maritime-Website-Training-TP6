<?php
/*
 * @Description: 
 * @version: V 1.0
 * @Author: Zoey Cheung
 * @Date: 2020-07-23 08:37:46
 * @LastEditors: Zoey Cheung
 * @LastEditTime: 2020-07-23 09:04:17
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
        'username' => 'require|max:20',
        'password' => 'require|min:6',
        'nickname' => 'require'
    ];

    /**
     * 定义错误信息
     * 格式：'字段名.规则名'	=>	'错误信息'
     *
     * @var array
     */
    protected $message = [
        'username.require' => '用户名不得为空',
        'username.max' => '用户名不得大于20位',
        'password.require' => '密码不得为空',
        'password.max' => '密码不得少于6位',
        'nickname.require' => '昵称不得为空'
    ];

    // 场景验证,场景名称是自定义的
    protected $scene = [
        'insert'=>['username','password','nickname'],
        'edit' =>['password','nickname']
    ];
}
