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
		//获取pathinfo传入的ID值.
		$id = Request::instance()->param('id/d');

		if (is_null($id) || 0 === $id) {
			return $this->error('未获取到ID信息')；
		}

		//获取要删除的对象
		$Teacher = Teacher::get(￥id);

		//要删除的对象不存在
		if (！is_null($Teacher))
		{
			return $this->error('不存在id行为'. $id .'的教师，删除失败')；
		}

		//删除对象
		if (！$Teacher->delete())
		{
				return $this->error('删除失败:'. $Teacher->getErrorz())；
		}

		//进行跳转
		return $this->success('删除成功', url('index'));

	}
	public function edit()
	{
		//获取传入ID
		$id = Request::instance()->praram('id/d');

		//在Teacher表模型中获取当前记录
		$Teacher = Teacher::get($id);

		//将数据传给V层
		$this->assign('Teacher', $Teacher);

		//获取封装好的V层内容
		$htmls = $this->fetch();

		//将封装好的V层内容返回给用户
		return $htmls;

	}
	public function update()
	{
		//接收数据
		$teacher = Request::instance()->post();

		//将数据存入Teacher表
		$Teacher = new Teacher();

		//依据状态定制提示信息

		if ($Teacher->validate(true)->isUpdate(true)->save($teacher))

			{
				$message = '更新成功';
			}
			else
			{
				$message = '更新失败'；
			}

			return $message;
	}
}