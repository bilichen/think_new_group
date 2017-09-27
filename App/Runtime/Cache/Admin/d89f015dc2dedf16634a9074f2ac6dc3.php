<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>节点显示页面</title>
    <link rel="stylesheet" href="__PUBLIC__/Css/style.css" />
    <link rel="stylesheet" href="__PUBLIC__/Css/node.css" />

</head>
<body>

<div id="wrap">
    <a href="<?php echo U('Admin/Rbac/addNode',array('nodename'=>'应用','level'=>1));?>" class="app_add">添加应用</a>
    <?php if(is_array($node)): foreach($node as $key=>$app): ?><div class="app">
            <p>
                <strong><?php echo ($app["title"]); ?></strong>
                [<a href="<?php echo U('Admin/Rbac/addNode',array('pid'=>$app['id'],'level'=>2));?>">添加控制器</a>]
                [<a href="">修改</a>]
                [<a href="">删除</a>]
            </p>

            <?php if(is_array($app["child"])): foreach($app["child"] as $key=>$action): ?><dl>
                    <dt>
                        <strong><?php echo ($action["title"]); ?></strong>
                        [<a href="<?php echo U('Admin/Rbac/addNode',array('pid'=>$action['id'],'level'=>3));?>">添加方法</a>]
                        [<a href="">修改</a>]
                        [<a href="">删除</a>]
                    </dt>

                    <?php if(is_array($action["child"])): foreach($action["child"] as $key=>$method): ?><dd>
                            <strong><?php echo ($method["title"]); ?></strong>
                            [<a href="">修改</a>]
                            [<a href="">删除</a>]
                        </dd><?php endforeach; endif; ?>
                    <div style="clear:both"></div>
                </dl><?php endforeach; endif; ?>
        </div><?php endforeach; endif; ?>
</div>
</body>
</html>