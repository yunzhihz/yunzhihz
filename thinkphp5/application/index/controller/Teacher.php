<?php
namespace app\index\controller;
use think\Db;

class Teacher
{
	public function index()
	{
		$teachers = Db::name('teacher')->select();

		var_dump($teachers);
	}
}