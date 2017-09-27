<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="__PUBLIC__/Css/style.css" />

    <title>角色列表</title>
</head>
<body>

<table>
    <tr>
        <th>id</th>
        <th>角色名称</th>
        <th>pid</th>
        <th>开启状态</th>
        <th>角色描述</th>
        <th>操作</th>
    </tr>

    <?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
            <td><?php echo ($v["id"]); ?></td>
            <td><?php echo ($v["name"]); ?></td>
            <td><?php echo ($v["pid"]); ?></td>
            <td>
                <?php if($v['status']): ?>开启<?php else: ?>关闭<?php endif; ?>
            </td>
            <td><?php echo ($v["remark"]); ?></td>
            <td><a href="<?php echo U('Admin/Rbac/access',array('rid'=>$v['id']));?>">配置权限</a></td>
        </tr><?php endforeach; endif; ?>

</table>

</body>
</html>