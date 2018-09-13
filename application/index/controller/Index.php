<?php
namespace app\index\controller;
use Hooklife\ThinkphpWechat\Wechat;

class Index
{
    public function index()
    {
        $response = Wechat::server()->serve();
        $response->send();
    }
}
