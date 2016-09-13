<html>
<title>要出发-IT服务台</title>
<body>
<?php use yii\helpers\Html;?>
<?=Html::jsFile('../static/js/jquery.js');?>
<script type="text/javascript">

function updataByIds(url) {
    var val = $("#province").val();
            $.ajax({
                type:"post",
                url:url,
                data:{id:val},
                dataType:"json",
                error:function () {
                    alert('error');
                },
                success:function (data) {
                    var html='';
                    html +='<select id="city" name="city" >';
                    html +='<option value="0"  >请选择市</option>';
                    for (var i=0;i<(data.length);i++) {
                            html += '<option name="city" value="'+data[i].cityid+'">'+data[i].city+'</option>';
                    }
                    html +='</select>';
                    $("#citySpan").html(html);
                    console.log(html);
                }
            });
}
</script>

<!----------------------公告头部----------------------------------->
<?=$this->render('../common/top');?>
<!------------------------------修改路径------------------------------------------>
<a href="?r=activity/it/paw">修改登录密码</a>
<!--------------------------------修改路径------------------------------------>
<div class="tab-main">
    <div class="tab-mod personal active">
        <!---------------------------修改路径----------------------------------------------------->
    <form action="?r=activity/it/keep" method="post">
        <!-----------------------------修改路径------------------------------------------------>
        <div class="main info">
            <ol class="clearfix">
                <li id="J-username">
                <?php foreach ($account as $row);?>
                <strong>用户名：</strong><input type="text" name="" value="<?=$row['accountName'];?>" disabled>
                </li>

            <li id="J-reaIname"><strong>真实姓名：</strong>
                <input type="text" name="" value="<?=$row['realName'];?>" disabled>
            </li>

            </ol>
            <ul class="J-cell-phone"><li id="J-cell-phone"><strong>
                 联系电话：</strong><i class="notleft">*</i> <input type="tel" name="tel" value="<?=$row['phoneNumber'];?>" ></li>

                <li id="J-email"><strong> 邮箱：<i class="notleft">*</i></strong>
                    <input type="email" name="email" value="<?=$row['email'];?>">
            </li>

            <li id="J-id"><strong>QQ:</strong><input type="text" name="qq" value="<?=$row['qqNumber'];?>"></li>

                <li id="J-set-city"><strong>省</strong>
            <select id="province" name="province" onclick="updataByIds('?r=activity/it/city')">
                <option value="0" name="provinceid">请选择省</option>
                <?php foreach ($province as $row) {;?>
                <option value="<?=$row['provinceid'];?>"><?=$row['province'];?></option>
        <?php }
;?>
            </select>
                </li>

            <li id="J-set-city"><strong>市</strong><span id="citySpan">
                <select id="city" name="city">
                    <option value="0"  >请选择市</option>
                </select>
            </span>
                </li>
            <p>
            <span>地址：
            <input type="text" value="" name="address">
            </span>
            </p>
            </ul>

            <button class="btn btn-default" id="J-submit" type="submit" >保存</button>
        </div>
    </form>
    </div>
</div>
<!--------------------------------公告尾部---------------------------------------------------------->
<?=$this->render('../common/footer');?>
</body>
</html>
