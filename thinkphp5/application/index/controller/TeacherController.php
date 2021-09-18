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
		var_dump($_POST);
		$postData = Request::instance()->post();
		var_dump($postData);
		return ;  

		//实例化Teacher空对象
		$Teacher = new Teacher(); 

		//为对象的属性赋值
		$Teacher->name = '王五'；
		$Teacher->username = 'wangwu';
		$Teacher->sex = '1';
		$Teacher->email = 'wangwu@yunzhi.club';
		
		//执行对象的插入数据操作
		var_dump($Teacher->save());
		return  '成功增加至数据表中。新增ID为：'. $Teacher->id；
	}
	public function add()
	{
		$htmls = $this->fetch();
		return $htmls;
	}
	public function delete()
	{
		//获取要删除的对象
		$Teacher = Teacher::get(14);

		//要删除的对象存在
		if (！is_null($Teacher)
		{
			if ($Teacher->delete())
			{
				return '删除成功'；
			}
		}


		return '删除成功'；
	}
}