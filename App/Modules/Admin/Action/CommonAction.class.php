<?php

class CommonAction extends Action{

    public function  _initialize(){
        if(!isset($_SESSION[C('USER_AUTH_KEY')])){
            $this->redirect('/Admin/Login/index');
        }
        //判断当前调用的控制器或方法，是否属于免认证
        $NotAtth = in_array(MODULE_NAME,explode(',',C('NOT_AUTH_MODULE'))) ||
            in_array(ACTION_NAME,explode(',',C('NOT_AUTH_ACTION')));

        //如果开启了认证，并且不是免认证的控制器或方法，则进入权限判断
        if(C('USER_AUTH_ON') && !$NotAtth){
            import('ORG.Util.RBAC');
            RBAC::AccessDecision(GROUP_NAME) || $this->error('没有权限');
        }
    }
}

?>
