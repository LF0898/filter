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
if (!empty($_POST['messgeName']) && !empty($_POST['messge'])) {
//连接数据库
    $link = new MySqlClass("mytest", "root", "123456");
    //非空判断
    $data = array("messgeName" => $_POST['messgeName'], "messges" => $_POST['messges']);
    if ($link->insert("messge", $data)) {
        echo '<script>alert("留言成功！");location.href="' . "index.php" . '"</script>';
    } else {
        echo '<script>alert("留言失败！");location.href="' . "index.php" . '"</script>';
    }
}
?>
<div class="content">
	<div class="lefter">
    	<div class="title">
        	<h2 class="cBlue fB">客户留言<b class="cGrey fn">Guestbook</b></h2>
        </div>
        <div class="intro" style="padding-top:16px">
            <form action="" method="post">
        	<label>呢称：</label><input name="messgeName" type="text" /><br />
			<label>内容：</label><textarea name="messges" cols="" rows="" style="width:545px;height:138px"></textarea>
            <input name="submit" type="submit" value="提交" class="btn_input" />
            </form>
        </div>

    </div>
	<div class="righter">
    	<div class="rightBox">
        	<a href="#" class="btn_s">我要留言</a>
        </div>
        <div class="blank10"></div>
    	<div class="rightBox">
        	<h3>最新公告<b class="cGrey fn">News</b></h3>
            <ul class="list_r">
            	<li><a href="#">祝贺公司网站正式上线</a></li>
                <li><a href="#">禁止保温材料现场调配 保证...</a></li>
                <li><a href="#">节能65%烧结页岩空心砖面世</a></li>
            </ul>
        </div>
        <div class="blank10"></div>
        <div class="rightBox">
        	<h3>友情链接<b class="cGrey fn">Links</b></h3>
            <ul class="list_r">
            	<li><a href="#">卓越网上购物</a></li>
                <li><a href="#">京东网上商城</a></li>
                <li><a href="#">携程旅行网</a></li>
            </ul>
        </div>
    </div>
    <div class="hackbox"></div>


</div>
<?php include "./PublicPages/bottom.php";?>
</body>
</html>
