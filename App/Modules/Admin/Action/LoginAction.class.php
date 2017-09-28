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
        if(md5(I('code')) == $_SESSION['verify']) {
            $username = I('username');
            $pwd = I('pwd');

//            p($username);
            //拼接查询条件 下面等于 username=$username AND pwd=$pwd
            //$map['username&pwd'] =array($username,$pwd,'_multi'=>true);
            //第二部，查询数据库，返回查询结果
            $user = M('user')->where(array('username' => $username))->find();

            if (!$user || $user['pwd'] != $pwd) {
                $this->error("用户名或密码错误");
            }
            $data = array(
                'id' => $user['id'],
                'logintime' => time(),
                'loginip' => get_client_ip(),
            );
            M('user')->save($data);



            //保存登录数据到session，方便每次转换页面时，都要查询是否以登录，如果没登录，直接跳转到登录页面
            session(C('USER_AUTH_KEY'), $user['id']);
            session('username', $username);
            session('pwd', $pwd);

            //超级管理员识别
            if($user['username'] == C('RBAC_SUPERADMIN')){
                session(C('ADMIN_AUTH_KEY'),true);
            }
            //读取用户权限
            import('ORG.Util.RBAC');
            RBAC::saveAccessList();


            $this->redirect('/Admin/Index/index');


        }
    }

}