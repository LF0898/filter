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
//连接数据库
$link = new MySqlClass("mytest", "root", "123456");
//查询jouralism表(行业资讯)
//$jouralism = $link->select("jouralism");
//查询jouralism表（公司简介）
//$company = $link->select("company");
//查询notice表（公告）
//$notice = $link->select("notice");
//查询product表（产品）
$product = $link->select("product");
//查询links表（链接）
//查询产品类型
$productType = $link->select("productType");
if (!empty($_GET['tid'])) {
    $tid      = array("productType" => $_GET['tid']);
    $productT = $link->select("product", $tid);
}
?>

<div class="content">
	<div class="lefter">

        <?php if (!isset($_GET['tid'])) {
    include "./PublicPages/product.php";
} else {
    include "./PublicPages/productType.php";
}
?>
        <div class="blank10"></div>
        <div class="pages"><a href="#" class="pre">上一页</a><a class="current">1</a><a href="#?page=2">2</a><a href="#?page=3">3</a><a href="#?page=2" class="next">下一页</a></div>
        <div class="blank6"></div>
    </div>
	<div class="righter">
    	<div class="rightBox">
        	<h3>产品分类</h3>
            <ul class="list_r">
                <?php foreach ($productType as $row) {?>
            	<li><a href="productList.php?tid=<?php echo $row['typeName']; ?>"><?php echo $row['typeName']; ?></a></li>
<?php }
?>
            </ul>
        </div>
    </div>
    <div class="hackbox"></div>


</div>
<?php include "./PublicPages/bottom.php";?>
</body>
</html>
