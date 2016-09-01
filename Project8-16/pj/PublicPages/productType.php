<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>金陵贸易有限公司</title>
    <link type="text/css" rel="stylesheet" href="style/style.css" />
</head>

<body>
<?php /*include "../Tool/MySqlClass.php";
//连接数据库
$link = new MySqlClass("mytest", "root", "123456");
//查询product表（产品）
$product = $link->select("product");
 */;?>
<div class="title">
    <h2 class="cBlue fB">产品展示<b class="cGrey fn">Products</b></h2><span class="more"><a href="productList.php" class="cBlue"> 更多...</a></span>
</div>
<ul class="list_l">
    <?php foreach ($productT as $row) {?>
        <li>
                <span class="listimg">
                    <img src="admin/<?php echo $row['picPath']; ?>" class="blank" /><a href="productInfo.php<?php echo "?id=" . $row['productId']; ?>"><img src="admin/<?php echo $row['picPath']; ?>" alt="<?php echo $row['productName']; ?>" /></a>
                </span>
            <span class="listtxt"><a href="productInfo.php<?php echo "?id=" . $row['productId']; ?>"><?php echo $row['productName']; ?></a></span>
        </li>
    <?php }
?>
</ul>


</body>
</html>