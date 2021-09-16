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

		//向V层传数据 
		$this ->assign('teachers',$teachers); 
        //取回打包后的数据
		$htmls = $this->fetch();
		//将数据返回给用户 
		return  $htmls;
	}
	public function insert()
	{
		//实例化Teacher空对象
		$Teacher = new Teacher();

		//为对象的属性赋值
		$teacher['name'] = '王五'；
		$teacher['username'] = 'wangwu';
		$teacher['sex'] = '1';
		$teacher['email'] = 'wangwu@yunzhi.club';
		
		//执行对象的插入数据操作
		$Teacher->save();
		return $teacher->name.'成功增加至数据表中。新增ID为：'. $Teacher->id；
	}
}