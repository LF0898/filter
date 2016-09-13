<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>金陵贸易 后台管理系统</title>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<style type="text/css">
/* common */
*{ word-wrap:break-word; outline:none; }
body{ width:159px; background:#F2F9FD url(../static/images/bg_repx_h.gif) right top no-repeat; color:#666; font:12px "Lucida Grande", Verdana, Lucida, Helvetica, Arial, "宋体" ,sans-serif; }
body, ul{ margin:0; padding:0; }
a{ color:#2366A8; text-decoration:none; }
a:hover { text-decoration:underline; }
.menu{ position:relative; z-index:20; }
.menu ul{ position:absolute; top:10px; right:-1px !important; right:-2px; list-style:none; width:150px; background:#F2F9FD url(../static/images/bg_repx_h.gif) right -20px no-repeat; }
.menu li{ margin:3px 0; *margin:1px 0; height:auto !important; height:24px; overflow:hidden; font-size:14px; font-weight:700; }
.menu li a{ display:block; margin-right:2px; padding:3px 0 2px 30px; *padding:4px 0 2px 30px; border:1px solid #F2F9FD; background:url(../static/images/bg_repno.gif) no-repeat 10px -40px; color:#666; }
.menu li a:hover{ text-decoration:none; margin-right:0; border:1px solid #B5CFD9; border-right:1px solid #FFF; background:#FFF; }
.menu li a.tabon{ text-decoration:none; margin-right:0; border:1px solid #B5CFD9; border-right:1px solid #FFF; background:#FFF url(../static/images/bg_repy.gif) repeat-y; color:#2366A8; }
.footer{ position:absolute; z-index:10; right:13px; bottom:0; padding:5px 0; line-height:150%; background:url(../static/images/bg_repx.gif) 0 -199px repeat-x; font-family:Arial, sans-serif; font-size:10px; }
</style>
</head>
<?php use yii\helpers\Html;?>
<?=Html::cssFile('../static/css/style.css');?>
<body>
<div class="menu">
    <ul id="leftmenu">
      <li><a class="tabon" href="?r=AdminiModule/default/sysinfo" target="main">首页</a> </li>
      <li><a href="?r=AdminiModule/aboutus/aboutus" target="main">公司简介</a> </li>
      <li><a href="?r=AdminiModule/news/news" target="main">最新公告</a> </li>
      <li><a href="?r=AdminiModule/product/product" target="main">产品管理</a> </li>
      <li><a href="?r=AdminiModule/contactus/contactus" target="main">联系我们</a> </li>
      <li><a href="?r=AdminiModule/user/user" target="main">管理员</a> </li>
    </ul>
</div>
<div class="footer">Powered by JinLing<BR>© 2009 <a href="#" target="_blank">金陵贸易</a> Inc.
</div>
<script type=text/javascript>
	function cleartabon() {
		if(lastmenu) {
			lastmenu.className = '';
		}
		for(var i = 0; i < menus.length; i++) {
			var menu = menus[i];
			if(menu.className == 'tabon') {
				lastmenu = menu;
			}
		}
	}
	var menus = document.getElementById('leftmenu').getElementsByTagName('a');
	var lastmenu = '';
	for(var i = 0; i < menus.length; i++) {
		var menu = menus[i];
		menu.onclick = function() {
			setTimeout('cleartabon()', 1);
			this.className = 'tabon';
			this.blur();
		}
	}

	cleartabon();
</script>
</body>
</html>
