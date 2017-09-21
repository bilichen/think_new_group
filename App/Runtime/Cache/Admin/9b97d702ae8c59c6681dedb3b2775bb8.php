<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=emulateIE7" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title></title>
    <style>
        html body .container{
            width: 100%;
            height: 100%;
        }
        .left{
            float:left;
            width: 20%;
            height: 100%;
        }
        .right{
            float:left;
            width: 80%;
            height: 600px;
        }
        li{
            list-style-type:none;
        }
    </style>
</head>
<body>
<div class="container">
    <a href="<?php echo U('Admin/Index/lgout','','');?>">退出</a>
    <div class="left">
        <dl>
            <dt>贴子管理
                <dd><a href="<?php echo U('Admin/MsgMange/index','','');?>" target="to">查看所有贴子</a></dd>
            </dt>
            <dt>用户管理RBAC
                <dd><a href="">用户列表</a></dd>
                <dd><a href="<?php echo U('Admin/Rbac/role','','');?>" target="to">角色列表</a></dd>
                <dd><a href="">节点列表</a></dd>
                <dd><a href="">添加用户</a></dd>
                <dd><a href="<?php echo U('Admin/Rbac/addRole','','');?>" target="to">添加角色</a></dd>
                <dd><a href="">添加节点</a></dd>
            </dt>
        </dl>
    </div>

    <div class="right">
        <iframe src="<?php echo U('Admin/MsgMange/index','','');?>" frameborder="0" name="to" style="width:100%;height:100%;"></iframe>
    </div>
</div>
</body>
</html>