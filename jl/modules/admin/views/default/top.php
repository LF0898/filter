<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" >
<HTML xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>金陵贸易 后台管理系统</title>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<link media="all" href="styles/style.css" type=text/css rel="stylesheet">
</head>
<?php use yii\helpers\Html;?>
<?=Html::cssFile('../static/css/style.css');?>
<body>
<div class="mainhd">
<div class="logo">金陵贸易 后台管理系统</div>
<div class="uinfo">
    <p>
        您好, <EM><?php $session = \Yii::$app->session;?>
            <?=$session->get('user');?>
            </EM> [ <a href="?r=AdminiModule/default/logoff" target="_top">退出</a> ]
    </p>
</div>
</div>
</body>
</html>
