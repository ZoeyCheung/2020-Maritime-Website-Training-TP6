<?php

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
