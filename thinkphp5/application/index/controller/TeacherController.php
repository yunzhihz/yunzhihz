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
		$teacher['test'] = 'hello';

		//将数据存入Teacher表
		$Teacher = new Teacher();
		$message = '更新成功';

		//依据状态定制提示信息
	try{
			if (false === $Teacher->validate(true)->isUpdate(true)->save($teacher))

			{
				$message = '更新失败：' . $Teacher->getError();
			}
		}
		catch (\Exception $e)
			{
				$message = '更新失败:' . $e->getMessage();
			}

			return $message;
	}
	public function update()
	{
		//接收数据，获取要更新的关键字信息
		$id = Request::instance()->post('id/d');
		$message = '更新成功'；

		//获取当前对象
		$Teacher = Teacher::get($id);

		if(!is_null($Teacher))
		{
			//写入要更新的数据
		    $Teacher->name = Request::instance()->post('name');
		    $Teacher->username = Request::instance()->post('username');
		    $Teacher->sex = Request::instance()->post('sex/d');
		    $Teacher->email = Request::instance()->post('email');

		    //更新
		    $message = '更新成功'；
		    if (false === $Teacher->validate(true)->save()) 
		    {
		    	$message = '更新失败' . $Teacher->getError();
		    }
		}
		else
		{
            throw new \Exception("所更新的记录不存在", 1);
//调用PHP内置类时，需要在前面加上 \
        }

   	}catch(\Exception $e)
   		{
   			//由于对异常进行了处理，如果发生了错误，我们仍然需要查看具体的异常位置及信息，那么需要将以下的代码的注释去掉
   			// throw $e;
   			$message = $e->getMessage();
   		}	
		

		return $message；
	}
}