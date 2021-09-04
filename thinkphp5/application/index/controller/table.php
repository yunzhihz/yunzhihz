<?php
namespace app\index\controller;
use app\commeon\model\Teacher;       // 数据库操作类
/**
 * 课程管理
 */
class TableController
{
    public function index()
    {
        // 获取教师表中的所有数据
        $school timetable = Db::name('Table')->select();

        // 查看获取的数据
        var_dump($school timetable);
    }
}