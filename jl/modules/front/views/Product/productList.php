<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>金陵贸易有限公司</title>
<link type="text/css" rel="stylesheet" href="style/style.css" />
</head>
<?php use yii\helpers\Html;?>
<?=Html::cssFile('../static/style/style.css');?>
<body>
<!-------------------------------------------头部页面-------------------------------------------------------------------->
<?=$this->render('../default/top');?>
<!------------------------------------------------------------------------------------------------------------------------->
<div class="content">
	<div class="lefter">
    	<div class="title">
        	<h2 class="cBlue fB">产品展示<b class="cGrey fn">Products</b></h2>
        </div>
        <ul class="list_l">
            <?php foreach ($product as $row) {;?>
        	<li>
                <span class="listimg">
                    <img src="<?=$row['picPath'];?>" class="blank" /><a href="product_info.php"><img src="<?=$row['picPath'];?>" alt="<?=$row['productName'];?>" /></a>
                </span>
                <span class="listtxt"><a href="product_info.php"><?=$row['productName'];?></a></span>
            </li>
<?php }
?>
        </ul>
        <div class="blank10"></div>
        <div class="pages"><a href="#" class="pre">上一页</a><a class="current">1</a><a href="#?page=2">2</a><a href="#?page=3">3</a><a href="#?page=2" class="next">下一页</a></div>
        <div class="blank6"></div>
    </div>
	<div class="righter">
    	<div class="rightBox">
        	<h3>产品分类</h3>
            <ul class="list_r">
            	<?php foreach ($productlist as $row) {;?>
                <li><a href="product_list.php"><?=$row['typeName'];?></a></li>
<?php }
?>
            </ul>
        </div>
    </div>
    <div class="hackbox"></div>


</div>
<div class="footer">
	<p>地址：广东省广州市广州大道北  联系人：乐可   移动电话：13619829982 固定电话：020-1234567 传 真：020-1234567</p>
	<p>Copyright @ 2009 金陵贸易有限公司 版权所有</p>
	<p><a href="#">粤ICP备08108790号</a></p>
</div>
</body>
</html>
