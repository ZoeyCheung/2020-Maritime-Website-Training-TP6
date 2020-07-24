<?php
/*
 * @Description: 
 * @version: V 1.0
 * @Author: Zoey Cheung
 * @Date: 2020-07-24 12:46:43
 * @LastEditors: Zoey Cheung
 * @LastEditTime: 2020-07-24 13:00:18
 */

declare(strict_types=1);

namespace app\middleware;

class Check
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
        return $next($request);
    }
}
