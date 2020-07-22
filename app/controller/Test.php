<?php

namespace app\controller;

use app\BaseController;

class Test extends BaseController
{
    public function index()
    {
        return "test index";
    }

    public function hello(string $name)
    {
        return 'Hello,' . $name;
    }

    public function test()
    {
        $data = [
            'a' => 1,
            'b' => 2,
            'c' => 3
        ];

        // halt($data);

        return json($data);
    }
}
