<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>修改公告</title>
    <link rel="stylesheet" href="styles/style.css" type="text/css" media="all">
</head>
<?php use yii\helpers\Html;?>
<?php use yii\widgets\ActiveForm;?>
<?=Html::cssFile('../static/css/style.css');?>
<body>

<div class="container">
    <h3 class="marginbot">编辑产品<a href="news_list.php" class="sgbtn">返回产品列表</a></h3>
    <div class="mainbox">
        <form action="?r=AdminiModule/product/upload" method="post" enctype="multipart/form-data">

            <table class="opt" style="width:600px;">
                <tbody>
                <tr>
                    <th>产品名称 ：</th>
                </tr>
                <tr>
                    <td>
                        <input name="name" class="txt" style="width:400px;" type="text" value="">
                    </td>
                </tr>

                <tr>
                    <th>产品介绍 ：</th>
                </tr>
                <tr>
                    <td>
                        <input name="title" class="txt" style="width:400px;" type="text" value="">
                    </td>
                </tr>

                <tr>
                    <th>产品介绍 ：</th>
                </tr>
                <tr>
                    <td>
                        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]);?>
                        <?=$form->field($model, 'image')->fileInput();?>
                    </td>
                </tr>

                <tr>
                    <th>产品类别 ：</th>
                </tr>
                <tr>
                    <td>
                        <input name="type" class="txt" style="width:400px;" type="text" value="">
                    </td>
                </tr>

                <tr>



                </tbody>
            </table>
            <div class="opt"><input name="submit" value=" 提 交 " class="btn" tabindex="3" type="submit"></div>
        </form>
        <?php ActiveForm::end();?>
    </div>
</div>
</body>
</html>
