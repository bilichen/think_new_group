<?php

class CommonAction extends Action{

    public function  _initialize(){
        if(!isset($_SESSION[C('USER_AUTH_KEY')])){
            $this->redirect('/Admin/Login/index');
        }

        if(C('USER_AUTH_ON')){
            import('ORG.Util.RBAC');
            RBAC::AccessDecision(GROUP_NAME) || $this->error('没有权限');
        }
    }
}

?>
