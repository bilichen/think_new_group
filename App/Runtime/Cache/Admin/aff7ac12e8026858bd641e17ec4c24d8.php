<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=emulateIE7" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../Public/Css/sapar.css" />
    <link rel="stylesheet" type="text/css" href="../../Public/Css/common.css" />
    <link rel="stylesheet" type="text/css" href="css/system_index.css" />
    <script type="text/javascript" src="../../Public/Js/jquery.js"></script>
    <script type="text/javascript" src="../../Public/Js/sapar.js"></script>
    <script type="text/javascript" src="../../Public/Js/WdatePicker.js"></script>
    <title>系统首页</title>
    <style type="text/css">
        th,td{
            text-align:center;
            border:1px #0066ff solid;
        }
        table{
            width:100%;
            border-collapse:collapse;
        }
    </style>
</head>


<body>

<div>
    <table>
        <tr>
            <th>id</th>
            <th>用户名</th>
            <th>内容</th>
            <th>时间</th>
            <th>操作</th>
        </tr>

        <?php if(is_array($wish)): foreach($wish as $key=>$v): ?><tr>
                <td><?php echo ($v["id"]); ?></td>
                <td><?php echo ($v["username"]); ?></td>
                <td><?php echo (replace_phiz($v["content"])); ?></td>
                <td><?php echo (date('y-m-d H:i',$v["time"])); ?></td>
                <td><a href="<?php echo U('Admin/MsgMange/delete',array('id'=>$v['id']));?>">删除</a></td>
            </tr><?php endforeach; endif; ?>

            <tr>
                <td colspan="5" align="center">
                    <?php echo ($page); ?>
                </td>
            </tr>
    </table>
</div>

</body>

<script type="text/javascript">
</script>
</html>