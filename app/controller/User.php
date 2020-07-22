<?php
/*
 * @Descripttion: 
 * @version: V 1.0
 * @Author: Zoey Cheung
 * @Date: 2020-07-22 18:42:39
 * @LastEditors: Zoey Cheung
 * @LastEditTime: 2020-07-22 19:34:35
 */ 

namespace app\controller;

use app\BaseController;

class User extends BaseController
{
    
    public function index()
    {
        return "user";
    }

    public function login()
    {
        return "login";
    }
    public function logOut()
    {
        return "loginOut";
    }
    public function register()
    {
        return "register";
    }
}
