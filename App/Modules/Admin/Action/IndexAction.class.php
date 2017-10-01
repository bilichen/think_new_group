<?php

class IndexAction extends CommonAction{

    //显示后台页面
    public function index(){
        $this->display();
    }
    //显示欢迎页面
    public function show(){
        $this->display();
    }
    //退出
    public function lgout(){
        session_unset();
        session_destroy();
        $this->redirect('/Admin/Login/index');
    }

}
