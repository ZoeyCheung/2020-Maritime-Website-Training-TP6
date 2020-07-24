<?php
/*
 * @Description: 
 * @version: V 1.0
 * @Author: Zoey Cheung
 * @Date: 2020-07-24 13:00:07
 * @LastEditors: Zoey Cheung
 * @LastEditTime: 2020-07-24 22:29:29
 */ 
declare (strict_types = 1);

namespace app\middleware;

class Auth
{
    /**
     * 处理请求
     *
     * @param \think\Request $request
     * @param \Closure       $next
     * @return Response
     */
    public function handle($request, \Closure $next)
    {
        echo 'Auth';
        if(!session('?username')){
            return redirect('/login?url=dashboard');
        }
        return $next($request);
    }
}
