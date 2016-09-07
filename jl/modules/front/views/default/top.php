<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>金陵贸易有限公司</title>
</head>
<?php use yii\helpers\Html;?>
<?=Html::cssFile('../static/css/style.css');?>
<body>
<div class="header">
    <h1 class="logo" title="金陵贸易有限公司"><a href="index.php"><img src="../static/images/logo.gif" alt="金陵贸易有限公司" /></a></h1>
    <p class="top_r"><a href="#" class="btn_i">设为主页</a><a href="#" class="btn_f">收藏本站</a></p>
</div>
<div class="nav">
    <div class="nav_left"></div>
    <ul>
        <li><a href="<?=\yii\helpers\Url::to('?r=activity/default/index');?>">首  页</a></li>
        <li class="sel"><a href="<?=\yii\helpers\Url::to('?r=activity/aboutus/aboutus');?>">公司简介</a></li>
        <li><a href="<?=\yii\helpers\Url::to('?r=activity/product/productlist');?>">产品展示</a></li>
        <li><a href="<?=\yii\helpers\Url::to('?r=activity/info/infos');?>">行业资讯</a></li>
        <li><a href="<?=\yii\helpers\Url::to('?r=activity/guestbook/guestbook');?>">客户留言</a></li>
        <li><a href="<?=\yii\helpers\Url::to('?r=activity/contactus/contactus');?>" class="nobg">联系我们</a></li>
    </ul>
    <div class="time" id="show">*******</div>
    <div class="nav_right"></div>
</div>
<div class="banner">
    <a href="#"><img src="images/banner.jpg" align="banner" /></a>
</div>
</body>
<script type="text/javascript">
    window.onload = function() {
        var show = document.getElementById("show");
        setInterval(function() {
            var time = new Date();
            // 程序计时的月从0开始取值后+1
            var m = time.getMonth() + 1;
            var t = time.getFullYear() + "-" + m + "-"
                + time.getDate() + " " + time.getHours() + ":"
                + time.getMinutes() + ":" + time.getSeconds();
            show.innerHTML = t;
        }, 1000);
    };
</script>
</html>
