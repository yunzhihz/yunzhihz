<?php
namespace app\index\controller;
use think\controller;
use app\common\model\Teacher;

class TeacherController extends controller
{
	public function index()
	{
		$Teacher = new Teacher;

		$teachers = $Teacher->select();

		$this = $this->fetch();

		
		return  $htmls;
	}
}