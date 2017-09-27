<?php

class RbacAction extends CommonAction{

    //用户列表
    public function index(){
//        $this->user = M('user')->select();
        $this->user =  D('UserRelation')->relation(true)->select();
//        p($user);
//        die;
        $this->display();

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
        $this->role = M("role")->select();
        $this->display();
    }
    //添加用户表单处理
    public function addUserHandle(){
//        p($_POST);
//        die;
        $data = array(
            'username' => I('username'),
            'pwd' => I('password','','md5'),
            'loginip' => get_client_ip(),
            'logintime' =>time()
        );
        if($rid = M('user')->data($data)->add()){
//            p($rid);
//            die;
            $role = array();
            foreach(I('role') as $v){
//                $data1 = array(
//                    'role_id' => $v['value'],
//                    'user_id' => $rid
//                );
//                M('role_user')->data($data1)->add();

                $role[] = array(
                    'role_id' => $v['value'],
                    'user_id' => $rid
                );
            }
            if(M('role_user')->addAll($role)){
                $this->success('插入成功',U('Admin/Rbac/index'));
            }else{
                $this->error('插入失败');
            }

        }

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

    //配置角色权限
    public function access(){
        $rid = I('rid',0,'intval');
        $node = M('node')->order('sort')->select();
        //获取已有的权限
        $this->access = M('access')->where(array('role_id' =>$rid))->getField('node_id',true);

        $this->node = node_merge($node,0);
        $this->rid = $rid;
        $this->display();
    }
    //保存角色权限
    public function setAccess(){
        $rid = I('rid',0,'intval');
        M('access')->where(array('role_id' => $rid))->delete();
        $data = array();
        foreach(I('access') as $v){
            $tem = explode('_',$v);
            $data[] = array(
               'role_id' => $rid,
               'node_id' => $tem[0],
               'level' => $tem[1],
            );
        }
        if(M('access')->addAll($data)){
            $this->success('修改成功',U('Admin/Rbac/role'));
        }else{
            $this->error('修改失败');
        }

    }
}
