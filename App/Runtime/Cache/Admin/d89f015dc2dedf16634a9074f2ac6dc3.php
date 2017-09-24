<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>节点显示页面</title>
    <link rel="stylesheet" href="__PUBLIC__/Css/style.css" />

</head>
<body>

<div>
    <a href="<?php echo U('Admin/Rbac/addNode',array('nodename'=>'应用','level'=>1));?>">添加应用</a>
    <?php if(is_array($node)): foreach($node as $key=>$app): ?><div class="app">
            <p>
                <strong><?php echo ($app["title"]); ?></strong>
                [<a href="<?php echo U('Admin/Rbac/addNode',array('pid'=>$app['id'],'level'=>2));?>">添加控制器</a>]
            </p>

            <?php if(is_array($app["child"])): foreach($app["child"] as $key=>$action): ?><dl>
                    <dt>
                        <strong><?php echo ($action["title"]); ?></strong>
                        [<a href="<?php echo U('Admin/Rbac/addNode',array('pid'=>$action['id'],'level'=>3));?>">添加方法</a>]
                    </dt>

                    <?php if(is_array($action["child"])): foreach($action["child"] as $key=>$method): ?><dd>
                            <strong><?php echo ($method["title"]); ?></strong>
                        </dd><?php endforeach; endif; ?>
                </dl><?php endforeach; endif; endforeach; endif; ?>
</div>
























<!--
<a href="<?php echo U('Admin/Rbac/addNode',array('nodename'=>'应用','level'=>1));?>">添加应用</a>
<br/><br/>
<table>
    <tr>
        <th>id</th>
        <th>节点名称</th>
        <th>节点描述</th>
        <th>开启状态</th>
        <th>详细描述</th>
        <th>排序</th>
        <th>pid</th>
        <th>level</th>
        <th>操作</th>
    </tr>

    <?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
            <td><?php echo ($v["id"]); ?></td>
            <td><?php echo ($v["name"]); ?></td>
            <td><?php echo ($v["title"]); ?></td>
            <td>
                <?php if($v['status']): ?>开启<?php else: ?>关闭<?php endif; ?>
            </td>
            <td><?php echo ($v["remark"]); ?></td>
            <td><?php echo ($v["sort"]); ?></td>
            <td><?php echo ($v["pid"]); ?></td>
            <td><?php echo ($v["level"]); ?></td>
            <td><a href="<?php echo U('Admin/MsgMange/delete',array('id'=>$v['id']));?>">删除</a></td>
        </tr><?php endforeach; endif; ?>
-->


</body>
</html>