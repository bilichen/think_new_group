<?php

class IndexAction extends CommonAction{


    public function index(){
        $this->display();
    }
    public function show(){
        $this->display();
    }

    public function lgout(){
        session_unset();
        session_destroy();
        $this->redirect('/Admin/Login/index');
    }

}
