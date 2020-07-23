<?php
/*
 * @Description: ,
 * @version: V 1.0
 * @Author: Zoey Cheung
 * @Date: 2020-06-25 00:05:52
 * @LastEditors: Zoey Cheung
 * @LastEditTime: 2020-07-23 08:33:47
 */ 
// 中间件配置
return [
    // 别名或分组
    'alias'    => [],
    // 优先级设置，此数组中的中间件会按照数组中的顺序优先执行
    'priority' => [],
    
    // 全局缓存
    \think\middleware\CheckRequestCache::class,
    // 多语言加载
    \think\middleware\LoadLangPack::class,
    // Session初始化
    \think\middleware\SessionInit::class,
];
