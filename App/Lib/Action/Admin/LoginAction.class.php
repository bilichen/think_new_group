<?php

class LoginAction extends Action{

    public function index(){
        $this->display();
    }
    //验证码
    public function verify(){
        import('ORG.Util.Image');
        Image::buildImageVerify(1,1,'png');
    }
    //接收登录数据，验证是否正确
    public function login(){
        //第一步，验证码是否正确
        if(md5(I('code')) == $_SESSION['verify']){
            $username = I('username');
            $pwd = I('pwd');
//            p($username);
            //拼接查询条件 下面等于 username=$username AND pwd=$pwd
            $map['username&pwd'] =array($username,$pwd,'_multi'=>true);
            //第二部，查询数据库，返回查询结果
            $user = M('user')->where($map)->select();
           // p($user);
            if($user[0]){//结果为真，表示登录账号正确
                //登录成功，把相应的loginip和logintime写入数据库保存
                $data = array(
                    'id' => $user[0]['id'],
                    'logintime' => time(),
                    'loginip' =>get_client_ip(),
                );
                M('user')->save($data);

                //保存登录数据到session，方便每次转换页面时，都要查询是否以登录，如果没登录，直接跳转到登录页面
                session('uid',$user[0]['id']);
                session('username',$username);
                session('pwd',$pwd);

                $this->redirect('/Admin/Index/index');
            }else{
                 halt('用户名或密码错误');
            }

        }else{
            halt('验证码不正确');
        }

    }

}