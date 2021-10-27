<?php 
namespace app\index\controller;
use think\Controller;
use think\Request;              // 请求
use app\common\model\Teacher;   // 教师模型

class Login extends Controller
{
    // 用户登录表单
    public function index()
    {
        // 显示登录表单
        return $this->fetch();
    }


// 处理用户提交的登录数据
    public function login()
    {
        // 接收post信息
        
        $postData = Request::instance()->post();

        // 验证用户名是否存在
        $map = array('username'  => $postData['username']);
        $Teacher = Teacher::get($map);

        // $Teacher要么是一个对象，要么是null。
        if (!is_null($Teacher) && $Teacher->getData('password') === $postData['password']) {
            // 用户名密码正确，将teacherId存session，并跳转至教师管理界面
            session('teacherId', $Teacher->getData('id'));
            return $this->success('login success', url('classtable/index'));
        } else {
            // 用户名不存在，跳转到登录界面。
            return $this->error('username or password incorrect', url('index'));
        }
    }
}