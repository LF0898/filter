<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理员列表</title>
<link rel="stylesheet" href="styles/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/common.js"></script>
</head>
<?php use yii\helpers\Html;?>
<?=Html::cssFile('../static/css/style.css');?>
<?=Html::jsFile('../static/js/common.js');?>
<?=Html::jsFile('../static/js/jquery.js');?>
<body>

<div class="container">
    <div class="hastabmenu">
        <ul class="tabmenu">
            <li id="adduserbtn" class="tabcurrent"><a href="#" >添加管理员</a></li>
        </ul>
        <div id="adduserdiv" class="tabcontentcur">
            <form action="?r=AdminiModule/user/add" method="post">
            <table width="100%">
                <tbody>
                    <tr>
                        <td>用户名:</td>
                        <td><input name="username" class="txt" type="text"></td>
                        <td>密码:</td>
                        <td><input name="password" class="txt" type="password"></td>
                        <td><input value="提 交" class="btn" type="submit"></td>
                    </tr>
            	</tbody>
            </table>
            </form>
        </div>
	</div>

    <br>
    <h3>管理员列表</h3>
    <div class="mainbox">
        <form action="?r=AdminiModule/user/delete" method="post">
            <table class="datalist fixwidth">
                <tbody>
                    <tr>
                        <th>
                        	<input name="chkall" id="chkall" class="checkbox" type="checkbox"><label for="chkall">删除</label>
                        </th>
                        <th>用户名</th>
                        <th>注册日期</th>
                        <th>注册IP</th>
                        <th>用户状态</th>
                        <th>编辑</th>
                    </tr>
                    <?php foreach ($admin as $row) {;?>
                    <tr>
                        <td class="option">
                        	<input name="admNo" value="<?=$row['admNo'];?>" class="checkbox" type="checkbox">
                        </td>
                        <td><strong><?=$row['admUser'];?></strong></td>
                        <td><?=$row['admTime'];?></td>
                        <td><?=$row['ip'];?></td>
                        <td><?php if ($row['admType']) {
    echo '启用';
} else {
    echo '禁用';
}
    ;?></td>
                        <td><a href="?r=AdminiModule/user/edit&uid=<?=$row['admNo'];?>">编辑</a></td>
                    </tr>
                    <?php }
;?>
                    <tr class="nobg">
                        <td><input value="提 交" class="btn" type="submit"></td>
                        <td class="tdpage" colspan="6">
                            <div class="pages">
                            <em>100</em>
                            <strong>1</strong>
                            <a href="">2</a>
                            <a href="">3</a>
                            <a href="">4</a>
                            <a href="" class="next">&rsaquo;&rsaquo;</a>
                            <a href="" class="last">... </a>
                            <kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='?page='+this.value; return false;}" /></kbd>
                            </div>
                      	</td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>
</body>
</html>