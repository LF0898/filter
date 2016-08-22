<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>联系我们</title>
<link rel="stylesheet" href="styles/style.css" type="text/css" media="all">
</head>
<body>
<div id="append"></div>
<div class="container">
	<h3>联系我们</h3>
    <div class="mainbox"><?php
include "MySqlClass.php";
$like = new MySqlClass("mytest", "root", "123456");
$test = $like->select("contact_us")
;?>
        <form action="contact_usX.php" method="post">
            <table style="width:700px;">
                <tbody>
                	<tr>
                    	<td>地址：<input type="text"name="address" value="<?php echo $test['address']; ?>"/></td>
                        <td>联系人：<input type="text"name="contacts" value="<?php echo $test['contacts']; ?>"/></td>
                        <td>移动电话：<input type="text"name="mobilePhone" value="<?php echo $test['mobilePhone']; ?>"/></td>
                        <td>固定电话：<input type="text"name="fixedPhone" value="<?php echo $test['fixedPhone']; ?>"/></td>
                        <td>传真：<input type="text"name="fax" value="<?php echo $test['fax']; ?>"/></td>
                    </tr>
                    <tr>
                    	<td>添加人：<?php echo $test['addPeople']; ?> &nbsp;&nbsp;&nbsp;添加时间：<?php echo $test['addTime']; ?></td>
                    </tr>
                    <tr>
                        <td><input value="提 交" class="btn" type="submit"></td>
                    </tr>

                </tbody>
            </table>
        </form>
    </div>
</div>
</body>
</html>
