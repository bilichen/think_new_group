<?php

class RbacAction extends CommonAction{

    //用户列表
    public function index(){

    }
    //角色列表
    public function role(){
        $data = M('role')->select();
        $this->data = $data;
        $this->display();
    }
    //节点列表
    public function node(){

    }
    //添加用户
    public function addUser(){

    }
    //添加角色
    public function addRole(){
        $this->display();
    }
    //添加角色表单处理
    public function addRoleHandle(){
        if(M('role')->add($_POST)){
            $this->success('添加角色成功',U('Admin/MsgMange/index'));
        }else{
            $this->error('添加角角失败');
        }
    }
    //添加节点
    public function addNode(){

    }
}
