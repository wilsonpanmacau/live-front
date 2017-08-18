<?php
/**
 * Created by PhpStorm.
 * User: yuangong
 * Date: 2017/8/10
 * Time: 16:50
 */

namespace app\index\controller;
use app\index\model;
use think\Controller;

class User extends Controller
{
    public function login(){
        if($_POST){

            $data = input('post.');
            $user = model('user');
            $userGet = $user->login($data);
            if($userGet){
                $arr['status'] = 'success';
                $arr['msg'] = '登录成功';
                $arr['user'] = userArray($userGet['nickname'],$userGet['level'],$userGet['head'],$userGet['profile']['name']);
            }else{
                $arr['status'] = 'error';
                $arr['msg'] = '用户名或密码不正确';
            }
            return json_encode($arr);

        }else{
            return view();
        }
    }

    public function register(){
        if($_POST){
            $data = input('post.');
            if($this->check_sms($data['code'])){
                $user = model('user');
                $result = $user->add($data);
                if(is_array($result)){
                    $arr['status'] = 'success';
                    $arr['msg'] = '注册成功';
                    $arr['user'] = $result;
                }else{
                    $arr['status'] = 'error';
                    $arr['msg'] = $result;
                }
            }else{
                $arr['status'] = 'error';
                $arr['msg'] = '验证码错误';
            }
            return json_encode($arr);
        }

    }

    public function check_sms($code=''){return true;
        if(!empty($code) && strlen($code)==4){
            return session('sms.code')==$code?true:false;
        }
        return false;
    }

    public function logout(){
        session('user',null);
        $this->redirect('Index/index');
    }
}