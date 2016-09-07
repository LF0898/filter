<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
	<?php use yii\helpers\Html;?>
	<?=Html::cssFile('../static/css/style.css');?>
<script type="text/javascript" language="javascript" src="js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="js/common.js"></script>
</head>
<body>
<div class="container">
	<h3>统计信息</h3>
	<ul class="memlist fixwidth">
		<li><em><a href="products.php">产品总数</a>:</em></li>
		<li><em><a href="knowledge.php">文章总数</a>:</em>100</li>
		<li><em><a href="guestbook.php">留言总数</a>:</em>100</li>
	</ul>

	<h3>系统信息</h3>
	<ul class="memlist fixwidth">
    	<li><em>主机名:</em> )</li>
		<li><em>操作系统</em></li>
		<li><em>服务器软件:</em><?php echo $_SERVER['SERVER_SOFTWARE']; ?></li>
		<li><em>数据库平台:</em>MySQL </li>
	</ul>
	<h3>版权信息</h3>
	<ul class="memlist fixwidth">
		<li>
			<em>版权所有:</em>
			<em class="memcont"><a href="http://www.jinling.com/" target="_blank">金陵贸易有限公司</a></em>
		</li>
		<li>
			<em>程序版本:</em>
			<em class="memcont">Jinling 1.0 Release</em>
		</li>
		<li>
			<em>技术支持:</em>
			<em class="memcont">admin@gmail.com</em>
		</li>
	</ul>
</div>
</body>
</html>