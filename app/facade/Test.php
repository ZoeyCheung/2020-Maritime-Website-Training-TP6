<?php
/*
 * @Description: 
 * @version: V 1.0
 * @Author: Zoey Cheung
 * @Date: 2020-07-22 20:26:17
 * @LastEditors: Zoey Cheung
 * @LastEditTime: 2020-07-22 20:30:31
 */

namespace app\facade;

use think\Facade;

class Test extends Facade
{
    protected static function getFacadeClass()
    {
        return 'app\common\Test';
    }
}
