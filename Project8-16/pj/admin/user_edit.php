<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>编辑用户资料</title>
<link rel="stylesheet" href="styles/style.css" type="text/css" media="all">
</head>
<body>

<div class="container">
    <h3 class="marginbot">编辑用户资料<a href="user_list.php" class="sgbtn">返回用户列表</a></h3>
    <div class="mainbox">
        <form action="user_editX.php" method="post">
            <table class="opt">
                                                        <?php
$updataId = ["admNo" => $_GET['UpInforId']];
include "MySqlClass.php";
$like = new MySqlClass("mytest", "root", "123456");
$data = $like->select("admin", $updataId);
?>
                <tbody>
                    <tr>
                        <th>用户名:</th>
                    </tr>
                    <tr>
                        <td>
                        <input name="username" class="txt" type="text" value="<?php echo $data['admUser']; ?>">
                            <input type="text" value="<?php echo $data['admNo']; ?>" name="id"/>
                        </td>
                    </tr>
                    <tr>
                        <th>密　码:<span style="font-weight:normal"> [密码留空，保持不变]</span></th>
                    </tr>
                    <tr>
                        <td>
                            <input name="password" value="<?php echo $data['admPaw']; ?>" class="txt" type="text">
                        </td>
                    </tr>
                    <tr>
                        <th>状态:<span style="font-weight:normal"> [密码留空，保持不变]</span></th>
                    </tr>
                    <tr>
                        <td>
                            <input name="usertype" value="<?php echo $data['admType']; ?>" class="txt" type="text">
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="opt"><input name="submit" value=" 提 交 " class="btn" tabindex="3" type="submit"></div>
        </form>
    </div>
</div>
</body>
</html>