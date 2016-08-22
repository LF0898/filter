<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>修改公告</title>
    <link rel="stylesheet" href="styles/style.css" type="text/css" media="all">
</head>
<body>
<?php echo $_GET['UpId'];
include "MySqlClass.php";
$like = new MySqlClass("mytest", "root", "123456");
$data = array("noticeNo" => $_GET['UpId']);
$up   = $like->select("notice", $data);
?>
<div class="container">
    <h3 class="marginbot">修改文章<a href="news_list.php" class="sgbtn">返回文章列表</a></h3>
    <div class="mainbox">
        <form action="news_editUpX.php?UpId=<?php echo $up['noticeNo']; ?>" method="post">
            <table class="opt" style="width:600px;">
                <tbody>
                <tr>
                    <th>公告标题 ：</th>
                </tr>
                <tr>
                    <td>
                        <input name="content" class="txt" style="width:400px;" type="text" value="<?php echo $up['noticeContent']; ?>">
                    </td>
                </tr>
                <tr>
                    <th>公告内容：</th>
                </tr>
                <tr>
                    <td><input name="title" class="txt"  type="text" value="<?php echo $up['noticeTitle']; ?>"></textarea></td>
                </tr>
                </tbody>
            </table>
            <div class="opt"><input name="submit" value=" 提 交 " class="btn" tabindex="3" type="submit"></div>
        </form>
    </div>
</div>
</body>
</html>
