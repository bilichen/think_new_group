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
    <div class="left">
        <ul>
            <li><a href="<?php echo U('Admin/MsgMange/index','','');?>" target="to">显示许愿数据</a></li>
            <li><a href="" target="to">前排占位</a></li>
            <li><a href="" target="to">前排占位</a></li>
            <li><a href="" target="to">前排占位</a></li>
            <li><a href="" target="to">前排占位</a></li>
            <li><a href="" target="to">前排占位</a></li>

        </ul>
    </div>

    <div class="right">
        <iframe src="<?php echo U('Admin/MsgMange/index','','');?>" frameborder="0" name="to" style="width:100%;height:100%;"></iframe>
    </div>
</div>
</body>
</html>