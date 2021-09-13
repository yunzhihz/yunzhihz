<?php
namespace app\index\controller;
use app\common\model\Teacher;

class TeacherController
{
	public function index()
	{
		$Teacher = new Teacher;
		$teachers = $Teacher->select();
		var_dump($Teacher);
	}
}