<?php
namespace app\index\controller;
use think\Db;       // 数据库操作类
/**
 * 课程管理
 */
class Table
{
    public function index()
    {
        // 获取课程表中的所有数据
        $school timetable = Db::name('Table')->select();

        // 查看获取的数据
        var_dump($school timetable【5】【4】);
    }
}