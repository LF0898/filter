<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/8/22
 * Time: 20:23
 */
include "FileUpload.php";
include "MySqlClass.php";
//先判断是否为空
if (!empty($_POST['username']) && !empty($_POST['paw']) && !empty($_POST['fcpaw']) && !empty($_POST['sex'])
    && !empty($_POST['love']) && !empty($_POST['city']) && !empty($_POST['resume'])) {
    if ($_POST['paw'] === $_POST['fcpaw']) {
        //连接数据库
        $like = new MySqlClass("super", "root", "123456");
        $up   = new FileUpload();
        //设置随机文件名
        $up->set("israndname", true);
        if ($up->upload("photo")) {
            echo '<pre>';
            //获取上传后文件名字
            $path = $up->getFileName();
            $path = "up/" . $path;
            //上传文件成功后插入数据库
            $into = array("userName" => $_POST['username'], "password" => md5($_POST['paw']),
                "sex"                    => $_POST['sex'], "love"          => implode("、", $_POST['love']), "city" => $_POST['city'],
                "phonePath"              => $path, "synopsis"              => $_POST['resume']);
            if ($like->insert("user", $into)) {
                echo '注册成功！';
            } else {
                echo '<script>alert("注册失败！");location.href="' . "userLogin.html" . '"</script>';
            }
        } else {
            echo '<pre>';
            //获取上传失败以后的错误提示
            var_dump($up->getErrorMsg());
            echo '<script>alert("文件上传出错！");location.href="' . "userLogin.html" . '"</script>';
            echo '</pre>';
        }

    } else {
        echo '<script>alert("两次密码不一致！");location.href="' . "userLogin.html" . '"</script>';
    }
} else {
    echo '<script>alert("有空值！");location.href="' . "userLogin.html" . '"</script>';
}
