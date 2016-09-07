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
<?=$this->render('top');?>
<!------------------------------------------------------------------------------------------------------------------------->
<div class="content">
    <div class="w475_l">
        <div class="title">
            <h2 class="cBlue fB">公司简介<b class="cGrey fn">About us</b></h2>
        </div>
        <!----------------------------------公司简介------------------------------------------------------------------------------->
        <div class="intro">
            <?php foreach ($aboutus as $row)
;?>
            <?=$row['companyTitle'];?>
            <a href="#" class="cBlue"> 查看更多...</a>
            <div class="hackbox"></div>
        </div>
        <!------------------------------------------------------------------------------------------------------------------------->
        <div class="blank10"></div>
        <div class="title">
            <h2 class="cBlue fB">产品展示<b class="cGrey fn">Products</b></h2><span class="more"><a href="product_list.php" class="cBlue"> 更多...</a></span>
        </div>
        <!---------------------------------------------产品展示---------------------------------------------------------------------->

        <ul class="list_l">
            <?php foreach ($product as $row) {?>
                <li>
                <span class="listimg">
                    <img src="<?php echo $row['picPath']; ?>" class="blank" /><a href="productInfo.php<?php echo "?id=" . $row['productId']; ?>"><img src="<?php echo $row['picPath']; ?>" alt="<?php echo $row['productName']; ?>" /></a>
                </span>
                    <span class="listtxt"><a href="productInfo.php<?php echo "?id=" . $row['productId']; ?>"><?php echo $row['productName']; ?></a></span>
                </li>
            <?php }
?>
        </ul>

        <!------------------------------------------------------------------------------------------------------------------------->
    </div>
    <div class="w370_r">
        <div class="title">
            <h2 class="cBlue fB">最新公告<b class="cGrey fn">News</b></h2>
        </div>
        <!----------------------------------最新公告------------------------------------------------------------------------------->
        <ul class="list_r">
<?php foreach ($notice as $row) {;?>
            <li>
                <a title="<?=$row['noticeContent'];?>" href="?r=activity/notice/notice&nid=<?=$row['noticeNo'];?>"><?=mb_substr($row['noticeContent'], 0, 12, 'utf-8');?></a>
                <span class="time1"><?=$row['noticeTime'];?></span>
            </li>
<?php }
;?>
        </ul>
        <!------------------------------------------------------------------------------------------------------------------------->
        <div class="blank29"></div>
        <div class="title">
            <h2 class="cBlue fB">行业资讯<b class="cGrey fn"></b></h2><span class="more"><a href="info.php" class="cBlue"> 更多...</a></span>
        </div>
        <!----------------------------------行业资讯------------------------------------------------------------------------------->
        <ul class="list_r">
<?php foreach ($jouralism as $row) {;?>
            <li><a title="<?=$row['jouralismTitle'];?>" href="?r=activity/info/info&fid=<?=$row['jouralismId'];?>"><?=mb_substr($row['jouralismTitle'], 0, 12, 'utf-8');?></a>
                <span class="time1"><?=$row['jouralismTime'];?></span></li>
<?php }
;?>
        </ul>
        <!------------------------------------------------------------------------------------------------------------------------->
    </div>
    <div class="hackbox"></div>

    <div class="title">
        <h2 class="cBlue fB">友情链接<b class="cGrey fn">Links</b></h2>
    </div>
    <p class="links">
        <a href="www.baidu.com">百度</a> | <a href="www.yaochufa.com">要出发</a> | <a href="www.jd.com">京东</a>
    </p>
</div>
<div class="footer">
    <p>地址：广东省广州市广州大道北  联系人：乐可   移动电话：13619829982 固定电话：020-1234567 传 真：020-1234567</p>
    <p>Copyright @ 2009 金陵贸易有限公司 版权所有</p>
    <p><a href="#">粤ICP备08108790号</a></p>
</div>
</body>
</html>