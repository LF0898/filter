<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>金陵贸易有限公司</title>
<link type="text/css" rel="stylesheet" href="style/style.css" />
</head>

<body>

<?php include "./PublicPages/top.php";
include "./Tool/MySqlClass.php";
include "./Tool/StringTest.php";
//实例化字符串处理类
$str = new StringTest();
//连接数据库
$link = new MySqlClass("mytest", "root", "123456");
//查询jouralism表(行业资讯)
$jouralism = $link->select("jouralism");
//查询jouralism表（公司简介）
$company = $link->select("company");
//查询notice表（公告）
$notice = $link->select("notice");
//查询product表（产品）
$product = $link->select("product");
//查询links表（链接）
?>
<div class="content">
	<div class="w475_l">
    	<div class="title">
        	<h2 class="cBlue fB">公司简介<b class="cGrey fn">About us</b></h2>
        </div>
        <div class="intro">
            <?php echo $str->strTask6($company["companyTitle"], 130); ?>
                <a href="#" class="cBlue"> 查看更多...</a>
                <div class="hackbox"></div>
        </div>

 <?php include "./PublicPages/product.php";?>
        </div>

    <div class="w370_r">
    	<div class="title">
        	<h2 class="cBlue fB">最新公告<b class="cGrey fn">News</b></h2>
        </div>
        <ul class="list_r">

            <?php foreach ($notice as $row) {?>
            <li>
			<a title="<?php echo $row['noticeContent']; ?>" href="article.php<?php echo "?nid=" . $row['noticeNo']; ?>"><?php echo $str->strTask6($row['noticeContent'], 16); ?></a>
			<span class="time1"><?php echo $row['noticeTime']; ?></span>
			</li>
            <?php }
?>

        </ul>
        <div class="blank29"></div>
        <div class="title">
        	<h2 class="cBlue fB">行业资讯<b class="cGrey fn">Information</b></h2><span class="more"><a href="info.php" class="cBlue"> 更多...</a></span>
        </div>
        <ul class="list_r">

            <?php foreach ($jouralism as $row) {?>
            <li><a title="<?php echo $row['jouralismTitle']; ?>" href="article.php<?php echo "?jid=" . $row['jouralismId']; ?>"><?php echo $str->strTask6($row['jouralismTitle'], 16); ?></a>
			<span class="time1"><?php echo $row['jouralismTime']; ?></span></li>
			 <?php }
?>

        </ul>
    </div>
    <div class="hackbox"></div>

	<div class="title">
        	<h2 class="cBlue fB">友情链接<b class="cGrey fn">Links</b></h2>
    </div>
    <p class="links">
	    	<a href="www.baidu.com">百度</a> | <a href="www.yaochufa.com">要出发</a> | <a href="www.jd.com">京东</a>
    </p>
</div>

<?php include "./PublicPages/bottom.php";?>
</body>

</html>
