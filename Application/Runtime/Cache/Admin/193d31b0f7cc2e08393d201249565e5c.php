<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>添加角色</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Public/Css/public.css"/>
</head>
<body>
<form action="<?php echo U('add_role_handle','','');?>" method="post">
    <table class="table">
        <tr>
            <th colspan="2">添加角色：</th>
        </tr>
        <tr>
            <td align="right">角色名称：</td>
            <td>
                <input type="text" name="name" />
            </td>
        </tr>
        <tr>
            <td align="right">角色描述：</td>
            <td>
                <input type="text" name="remark" />
            </td>
        </tr>
        <tr>
            <td align="right">是否开启：</td>
            <td>
                <input type="radio" name="status" value="1" checked = "checked" />开启&nbsp;&nbsp;
                <input type="radio" name="status" value="0" />关闭
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="保存添加">
            </td>
        </tr>
    </table>
</form>
</body>
</html>