<?php
/**
 * Created by PhpStorm.
 * User: linfang
 * Date: 2016/8/10
 * Time: 21:13
 */
//包含一个文件上传类中的上传类
include "FileUpload.php";

$up = new fileupload;
//设置属性(上传的位置， 大小， 类型， 名是是否要随机生成)
$up->set("path", "./up/");
$up->set("maxsize", 2000000);
$up->set("allowtype", array("gif", "png", "jpg", "jpeg"));
$up->set("israndname", true);

//使用对象中的upload方法， 就可以上传文件， 方法需要传一个上传表单的名子 pic, 如果成功返回true, 失败返回false
if ($up->upload("pic")) {
    echo '<pre>';
    //获取上传后文件名字
    var_dump($up->getFileName());
    echo '</pre>';

} else {
    echo '<pre>';
    //获取上传失败以后的错误提示
    var_dump($up->getErrorMsg());
    echo '</pre>';
}
