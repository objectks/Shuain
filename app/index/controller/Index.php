<?php
namespace app\index\controller;

use think\Controller;
use think\Cache;

class Index extends Controller
{

    public function index()
    {       
        //Cache::set('name',"KangShuai",3600);
        //sleep(1);
        dump(Cache::get('lijinhe')); // 获取缓存数据
        return $this->fetch();
    }
}
