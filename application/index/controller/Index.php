<?php
namespace app\index\controller;
use Hooklife\ThinkphpWechat\Wechat;

class Index
{
    public function index()
    {
        Wechat::user_tag()->lists();
    }
}
