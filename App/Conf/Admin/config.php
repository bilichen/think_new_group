<?php

return array(
    'TMPL_PARSE_STRING'=>array(
        '__PUBLIC__' => __ROOT__.'/'. APP_NAME.'/Tpl/Admin/Public',
        '__STATIC__' => __ROOT__.'/'. APP_NAME.'/Tpl/Admin/Static',
    ),

    //自定义出错页面
    'TMPL_EXCEPTION_FILE' => './Public/Tpl/error_admin.html'
);