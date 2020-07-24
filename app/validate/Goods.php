<?php
/*
 * @Description: 
 * @version: V 1.0
 * @Author: Zoey Cheung
 * @Date: 2020-07-24 10:43:22
 * @LastEditors: Zoey Cheung
 * @LastEditTime: 2020-07-24 10:47:10
 */ 
declare (strict_types = 1);

namespace app\validate;

use think\Validate;

class Goods extends Validate
{
    /**
     * 定义验证规则
     * 格式：'字段名'	=>	['规则1','规则2'...]
     *
     * @var array
     */	
	protected $rule = [
        'thumb_img' => 'file|fileExt:jpg,png,gif,bmp',
    ];
    
    /**
     * 定义错误信息
     * 格式：'字段名.规则名'	=>	'错误信息'
     *
     * @var array
     */	
    protected $message = [
        'thumb_img.file'=>'上传文件格式错误：pg,png,gif',
    ];
}
