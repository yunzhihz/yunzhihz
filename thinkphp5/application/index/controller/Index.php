<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        var_dump(Db::name('Table')->find()); //获取数据表中第一条数据
    }
}
