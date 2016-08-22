<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/8/18
 * Time: 16:02
 */
include "FileUpload.php";
if (!empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['type'])) {
    $up = new fileupload;
//设置属性(上传的位置， 大小， 类型， 名是是否要随机生成)
    $up->set("israndname", true);
    if ($up->upload("upfile")) {
        echo '<pre>';
        //获取上传后文件名字
        $upname = $up->getFileName();
        echo '</pre>';
    } else {
        echo '<pre>';
        //获取上传失败以后的错误提示
        var_dump($up->getErrorMsg());
        echo '</pre>';
    }
    $upname = "up/" . $upname;
    echo $upname;
    include "MySqlClass.php";
    $like = new MySqlClass("mytest", "root", "123456");
    $ups  = array("productName" => $_POST['title'], "productTitle" => $_POST['content'], "picPath" => $upname, "productType" => $_POST['type']);
    if ($like->insert("product", $ups)) {
        echo '上传成功！';
    } else {
        echo '上传失败！';
    }
} else {
    echo '输入为空！';
}
/*$up = new fileupload;
//设置属性(上传的位置， 大小， 类型， 名是是否要随机生成)
$up->set("israndname", true);

//使用对象中的upload方法， 就可以上传文件， 方法需要传一个上传表单的名子 pic, 如果成功返回true, 失败返回false
if ($up->upload("upfile")) {
echo '<pre>';
//获取上传后文件名字
var_dump($upname = $up->getFileName());
echo '</pre>';
} else {
echo '<pre>';
//获取上传失败以后的错误提示
var_dump($up->getErrorMsg());
echo '</pre>';
}
echo "产品名称" . $_POST['title'];
echo "产品描述" . $_POST['content'];
echo "产品类型" . $_POST['type'];
$upname = "up/" . $upname;
echo $upname;
include "MySqlClass.php";
$like = new MySqlClass("mytest", "root", "123456");
$ups  = array("productName" => $_POST['title'], "productTitle" => $_POST['content'], "picPath" => $upname, "productType" => $_POST['type']);
var_dump($ups);
var_dump($like->insert("product", $ups));*/
