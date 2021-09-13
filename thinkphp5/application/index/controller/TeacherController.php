<?php
namespace app\index\controller as SmallTeacher;
use app\common\model\Teacher;

class TeacherController
{
	public function index()
	{
		$SmallTeacher = new SmallTeacher;
		dump($SmallTeacher);
	}
}