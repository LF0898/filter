<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>添加新文章</title>
    <link rel="stylesheet" href="styles/style.css" type="text/css" media="all">
</head>
<body>
<div class="container">
    <h3 class="marginbot">添加新产品<a href="news_list.php" class="sgbtn">返回文章列表</a></h3>
    <div class="mainbox">
        <form action="news_editSX.php" enctype="multipart/form-data" method="post">
            <table class="opt" style="width:600px;">
                <tbody>
                <tr>
                    <th>产品名称：</th>
                </tr>
                <tr>
                    <td>
                        <input name="title" class="txt" style="width:400px;" type="text">
                    </td>
                </tr>
                <tr>
                    <th>图片上传：</th>
                </tr>
                <tr>
                    <td>
                        <input name="upfile" class="txt" style="width:400px;" type="file" >
                    </td>
                </tr>
                <tr>
                    <th>产品描述：</th>
                </tr>
                <tr>
                    <td><textarea style="width:400px; height:150px" name="content"></textarea></td>
                </tr>
                <tr>
                    <th>产品类型：</th>
                </tr>
                <tr>
                    <td><input name="type" type="text"/></textarea></td>
                </tr>
                </tbody>
            </table>
        <div class="opt"><input name="submit" value=" 提 交 " class="btn" tabindex="3" type="submit"></div>
        </form>
    </div>
</div>
</body>
</html>
