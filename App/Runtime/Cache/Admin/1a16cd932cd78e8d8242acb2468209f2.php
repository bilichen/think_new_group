<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rbac-addRole添加角色</title>
    <style>
        body{text-align:center}
        .container{
            margin: 50px auto;
        }
        .input_text{
            width: 220px;
            height:25px;
        }
    </style>
</head>
<body>

    <div class="container">
        <p>添加角色</p>
        <form action="<?php echo U('Admin/Rbac/addRoleHandle','','');?>" method="post">
            角色名称：<input type="text" name="name" class="input_text"><br/><br/>
            角色描述：<input type="text" name="remark" class="input_text"><br/><br/>
            是否开启：<input type="radio" name="status" checked="checked" value="1">开启
                    <input type="radio" name="status" value="0">关闭<br/><br/>
                    <input type="submit" value="保存添加">

        </form>
    </div>
</body>
</html>