<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>联系我们</title>
<link rel="stylesheet" href="styles/style.css" type="text/css" media="all">
</head>
<?php use yii\helpers\Html;?>
<?=Html::cssFile('../static/css/style.css');?>
<body>
<div id="append"></div>
<div class="container">
    <?php foreach ($aboutus as $row);?>
	<h3>联系我们</h3>
    <p></p>
    <div class="mainbox">
        <form action="?r=AdminiModule/aboutus/revise" method="post">
            <table style="width:700px;">
                <tbody>
                <tr>
                    <td>
                        <?=$row['companyTitle'];?>
                    </td>
                </tr>
                	<tr>
                    	<td>修改：<textarea rows="10" cols="80" name="content" ></textarea></td>
                    </tr>
                    <tr>
                    	<td>添加人：admin &nbsp;&nbsp;&nbsp;添加时间：2009-07-01 12:05</td>
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

