<?php
namespace app\index\controller;
import('ORG.Util.Page');
use think\Controller;

class Index extends Controller
{

    public function index()
    {       
        return $this->fetch();
    }
}
