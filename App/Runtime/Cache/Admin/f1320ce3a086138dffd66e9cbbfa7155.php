<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加节点页面</title>
</head>
<body>
    <form action="<?php echo U('Admin/Rbac/addNodeHandle');?>" method="post">
        <table>
            <tr>
                <td><?php echo ($type); ?>名称：</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td><?php echo ($type); ?>描述：</td>
                <td><input type="text" name="title"></td>
            </tr>
            <tr>
                <td>是否开启：</td>
                <td>
                    <input type="radio" name="status" value="1" checked="checked">&nbsp 开启 &nbsp
                    <input type="radio" name="status" value="0">&nbsp 关闭 &nbsp
                </td>
            </tr>
            <tr>
                <td>排序：</td>
                <td><input type="text" name="sort" value="1"></td>
            </tr>
            <tr>
                <td>
                    <input type="hidden" name="pid" value="<?php echo ($pid); ?>">
                    <input type="hidden" name="level" value="<?php echo ($level); ?>">
                    <input type="submit" value="提交">
                </td>
            </tr>
        </table>
    </form>

</body>
</html>