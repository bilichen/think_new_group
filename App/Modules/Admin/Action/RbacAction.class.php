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
        $field = array('id','name','title','pid');
        $node = M('node')->field($field)->order('sort')->select();
        $node = node_merge($node);

        $this->node = $node;
        $this->display();

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
            $this->error('添加角色失败');
        }
    }
    //添加节点
    public function addNode(){
        $this->pid = I('pid',0,'intval');
        $this->level = I('level',1,'intval');

        switch($this->level){
            case 1:
                $this->type="应用";
                break;
            case 2:
                $this->type="控制器";
                break;

            case 3:
                $this->type="方法";
                break;

        }

        $this->display();
    }
    //添加节点表单处理
    public function addNodeHandle(){
        if(M('node')->add($_POST)){
            $this->success('添加节点成功',U('Admin/Rbac/node'));
        }else{
            $this->error('添加节点失败');
        }
    }
}
