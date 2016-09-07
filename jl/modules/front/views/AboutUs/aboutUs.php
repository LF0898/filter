<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>金陵贸易有限公司</title>
    <link type="text/css" rel="stylesheet" href="style/style.css" />
</head>

<body>
<!-------------------------------------------头部页面-------------------------------------------------------------------->
<?=$this->render('../default/top');?>
<!------------------------------------------------------------------------------------------------------------------------->
<div class="content">
    <div class="lefter">
        <div class="title">
            <h2 class="cBlue fB">公司简介<b class="cGrey fn">About us</b></h2>
        </div>
        <div class="intro">
            <p><?php foreach ($aboutus as $row);?>
            <?=$row['companyTitle'];?>
            </p>

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
                <?php foreach ($notice as $row) {?>
                <li><a href="?r=activity/notice/notice&nid=<?=$row['noticeNo'];?>"><?=$row['noticeContent'];?></a></li>
                <?php }
?>
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
<div class="footer">
    <p>地址：广东省广州市广州大道北  联系人：乐可   移动电话：13619829982 固定电话：020-1234567 传 真：020-1234567</p>
    <p>Copyright @ 2009 金陵贸易有限公司 版权所有</p>
    <p><a href="#">粤ICP备08108790号</a></p>
</div>
</body>
</html>

