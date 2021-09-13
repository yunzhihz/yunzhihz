<?php
namespace app\index\controller;
use app\common\model\Teacher;

class TeacherController
{
	public function index()
	{
		$Teacher = new Teacher;
		$SuoYouJiaoShi = $JiaoShiBiao->select();

		$JiaoShiZhanSan = $SuoYouJiaoShi[0];


		echo  '教师姓名' .$JiaoShiZhanSan->getData('name') .'<br />'  ;
		return  '重复一遍：教师姓名' .  $JiaoShiZhanSan->getData('name');
	}
}