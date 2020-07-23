<?php
/*
 * @Description: 
 * @version: V 1.0
 * @Author: Zoey Cheung
 * @Date: 2020-06-25 00:05:52
 * @LastEditors: Zoey Cheung
 * @LastEditTime: 2020-07-22 20:47:54
 */ 
namespace app;

// 应用请求对象类
class Request extends \think\Request
{
    // 过滤HTML标签
    protected $filter = ['htmlspecialchars'];

}
