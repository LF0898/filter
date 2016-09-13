<!DOCTYPE html>
<html lang="zh-hans" xmlns="http://www.w3.org/1999/html"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>要出发-IT服务台</title>
    <link rel="icon" href="http://help-t.yaochufa.com/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../static/files/common.css">
    <link rel="stylesheet" href="../static/files/calendar.css">
    <link rel="stylesheet" href="../static/files/dialog.css">
<link href="../static/files/translator.css" id="SL_Style" type="text/css" rel="stylesheet"></head>

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
                    html += '<option value="'+data[i].cityid+'">'+data[i].city+'</option>';
                }
                html +='</select>';
                $("#citySpan").html(html);
                console.log(html);
            }
        });
    }
</script>

<body>




    <!--[if lt IE 8]>
        <div class="browsehappy">为了正常获得最好的浏览体验和兼容性, 请 <a href="http://browsehappy.com/">升级或更换你的浏览器</a> 推荐Google Chrome.</div>
    <![endif]-->
    <div class="header bb">
        <!-- 导航栏 -->
        <div class="menu" id="J-menu">
        <!-- 顶栏 -->
                            <div class="wrapper clearfix top">
                    <p class="hello">您好，临时超管</p>
                    <ul class="quit clearfix">
                        <li><a href="http://help-t.yaochufa.com/ycfad2014/public/logout">退出</a></li>
                        <!--<li><a href="/ycfad2014/user/ownerupdate">修改密码</a></li>-->
                    </ul>
                </div>

            <div class="wrapper clearfix">
                <a href="http://help-t.yaochufa.com/" class="logo fl">
                    <img src="../static/files/logo-new.png" alt="logo">
                    <span>IT服务台</span>
                </a>
                <ol class="clearfix fl" id="J-menu-item">
                                                                <li data-index="3">
                            <a href="http://help-t.yaochufa.com/ycfad2014/ordermanger/index" class="first">工单管理<i class="icon-css icon-css-tb"></i></a>
                            <!--<i class="icon icon-submenu submenu3"></i>-->
                                                        <div>
                                                        <a href="http://help-t.yaochufa.com/ycfad2014/ordermanger/repairlist">故障管理</a>
                                                        <a href="http://help-t.yaochufa.com/ycfad2014/ordermanger/requestlist">请求管理</a>
                                                        <a href="http://help-t.yaochufa.com/ycfad2014/ordermanger/statistics">报表统计</a>
                                                        <a href="http://help-t.yaochufa.com/ycfad2014/ordermanger/history">报表导出</a>
                                                        <a href="http://help-t.yaochufa.com/ycfad2014/apply/apply">申请页面</a>
                                                        </div>
                                                    </li>
                                            <li data-index="2">
                            <a href="http://help-t.yaochufa.com/ycfad2014/document/index" class="first">知识库管理<i class="icon-css icon-css-tb"></i></a>
                            <!--<i class="icon icon-submenu submenu2"></i>-->
                                                        <div>
                                                        <a href="http://help-t.yaochufa.com/ycfad2014/document/index">档案列表</a>
                                                        <a href="http://help-t.yaochufa.com/ycfad2014/document/category">档案分类</a>
                                                        </div>
                                                    </li>
                                            <li class="active" data-index="2">
                            <a href="http://help-t.yaochufa.com/ycfad2014/user/userinfo" class="first">个人中心<i class="icon-css icon-css-tb"></i></a>
                            <!--<i class="icon icon-submenu submenu2"></i>-->
                                                        <div>
                                                        <a href="http://help-t.yaochufa.com/ycfad2014/user/userinfo">修改信息</a>
                                                        <a href="http://help-t.yaochufa.com/ycfad2014/ordermanger/myorder">我的订单</a>
                                                        </div>
                                                    </li>
                                            <li data-index="2">
                            <a href="http://help-t.yaochufa.com/ycfad2014/admin/index" class="first">用户管理<i class="icon-css icon-css-tb"></i></a>
                            <!--<i class="icon icon-submenu submenu2"></i>-->
                                                        <div style="display: none;">
                                                        <a href="http://help-t.yaochufa.com/ycfad2014/admin/index">账号列表</a>
                                                        <a href="http://help-t.yaochufa.com/ycfad2014/admin/group">权限设置</a>
                                                        <a href="http://help-t.yaochufa.com/ycfad2014/manage/dutyshift">值班配置</a>
                                                        </div>
                                                    </li>
                                    </ol>
				<!--                <a href="--><!--" class="icon icon-notice-bell">-->

            </div>
        </div>
    </div>



            <!-- 面包屑导航 -->
			<!-- 主体 -->
    <div class="container">
        <div class="wrapper">
            <!-- 小面包屑导航 -->
			<ul class="bread-crumbs ovh">
	<li>
		<a href="http://help-t.yaochufa.com/ycfad2014">首页</a>
		<i>/</i>
	</li>
	<li>
		<a href="javascript:void(0)">个人中心</a>
		<i>/</i>
	</li>
	<li class="active">
		<a href="javascript:void(0)">资料修改</a>
	</li>
</ul>			<!-- 小面包屑导航 -->
            <!-- 主内容 -->
            <div class="tab user-center">
                <ul class="tab-btn clearfix">
				                    <li class="active"><a href="http://help-t.yaochufa.com/ycfad2014/user/userinfo?id=1">个人信息</a></li>
                    <li><a href="http://help-t.yaochufa.com/ycfad2014/user/ownerupdate?id=1">修改登录密码</a></li>
                    <li><a href="http://help-t.yaochufa.com/ycfad2014/user/setter?id=1">修改提醒信息</a></li>

                </ul>
                                <script>
                    var uuid = "";
                </script>
                <div class="tab-main">
                    <div class="tab-mod personal active">

                        <form action="" method="post">
                            <?php foreach ($account as $row);?>
                            <p>用户名：<input type="text" name="username" value="<?=$row['accountName'];?>" disabled></p>
                            <p>真实姓名：<input type="text" name="" value="<?=$row['realName'];?>" disabled></p>
                            <p>联系电话：<input type="tel" name="" value="<?=$row['phoneNumber'];?>" ></p>
                            <p>邮箱：<input type="email" name="" value="<?=$row['email'];?>"></p>
                            <p>QQ:<input type="text" name="" value="<?=$row['qqNumber'];?>"></p>

                            <select id="province" name="province" onclick="updataByIds('?r=activity/it/city')">
                                <option value="0">请选择省</option>
                                <?php foreach ($province as $row) {;?>
                                    <option value="<?=$row['provinceid'];?>"><?=$row['province'];?></option>
                                <?php }
;?>
                            </select>
    <span id="citySpan">
        <select id="city" name="city">
            <option value="0"  >请选择市</option>
        </select>
    </span>

                        </form>

                    </div>

                <script src="../static/files/files/jsbn.js"></script>
                <script src="../static/files/files/jsbn2.js"></script>
                <script src="../static/files/files/prng4.js"></script>
                <script src="../static/files/files/rng.js"></script>
                <script src="../static/files/files/rsa.js"></script>
                <script src="../static/files/files/rsa2.js"></script>
            </div>
			</div>
			</div>
    <!-- 公用底部 -->
    <div class="footer bt">
<!--        <ul class="phone">-->
<!--            <li class="first">订单咨询：020-61788369 / 020-61788370</li>-->
<!--            <li>财务对账：020-22103972</li>-->
<!--            <li>技术热线：020-85603622</li>-->
<!--        </ul>-->
        <p class="copyright">中华人民共和国增值电信业务经营许可证编号：粤B2-20130613<br>旅行社业务经营许可证编号：L-GD01685<br>2016 © 广州酷旅旅行社有限公司 粤ICP备11008339号</p>
    </div>

    <script src="%E8%A6%81%E5%87%BA%E5%8F%91-IT%E6%9C%8D%E5%8A%A1%E5%8F%B0_files/dialog.js"></script>
    <script src="%E8%A6%81%E5%87%BA%E5%8F%91-IT%E6%9C%8D%E5%8A%A1%E5%8F%B0_files/calendar.js"></script>
    <script src="%E8%A6%81%E5%87%BA%E5%8F%91-IT%E6%9C%8D%E5%8A%A1%E5%8F%B0_files/common.js"></script>
    <script src="%E8%A6%81%E5%87%BA%E5%8F%91-IT%E6%9C%8D%E5%8A%A1%E5%8F%B0_files/tingyun-rum.js"></script>
    <script>
        //右上搜索
        $(function(){
            var $search = $('#search');
            $search.on('click', function (){
                var dialog = $.dialog();
                $content='';
                $content +='<div class="form-group mBR10">';
                $content +=    '<form method="GET" id="takeover" action="/ycfad2014/apply/index">';
                $content +=         '<select name="whichBtn" maxlength="200" id="J-title">';
                $content +=             '<option  value ="0">受理号</option>';
                $content +=             '<option  value ="1">提交者</option>';
                $content +=         '</select>';
                $content +=         '<input type="text" name="reportInfo" class="form-control">&nbsp';
                $content +=         '<button type="submit"  class="btn btn-default">查询</button>&nbsp';
                $content +=         '<button id="J-close-popup" type="button" class="btn btn-white">取消</button>';
                $content +=    '</form>';
                $content += '</div>'
                dialog.content($content);
                // 取消
                $('#J-close-popup').on('click', function() {
                    $('.ui-dialog-close').trigger('click');
                });
                return false;
            })
        })
        //右上总体教程
        $(function(){
            var uesrhelp = $('#uesrhelp');
            uesrhelp.on('click',
                function (){
                    var dialog = $.dialog();
                    $content='';
                    $content +='<div style="width:600px ;height:500px ;overflow-y: auto " class="form-group mBR10">';
                    $content +=         '<div>IT服务台使用指引</div>';
                    $content +=         '<br/>';
                    $content +=         '欢迎使用IT服务台';
                    $content +=         '<a href="http://helpdesk.yaochufa.com/" target="_blank">http://helpdesk.yaochufa.com/</a>';
                    $content +=         '<br/>';
                    $content +=         '1.如下图所示，标星号的为必填项。如用户无法判断所需服务类型，可选择其他。';
                    $content +=         '<br/>';
                    $content +=         '<img alt="教程1" src="/static/images/help8.png" height="180px" width="571px">';
                    $content +=         '<br/>';
                    $content +=         '<br/>';
                    $content +=         '2.建议完善选填信息,以便获得我们更快速的联系和更优质的服务。';
                    $content +=         '<br/>';
                    $content +=         '<img alt="教程2" src="/static/images/help7.png" height="150px" width="571px">';
                    $content +=         '<div style="font-size :12px;color：#666">&nbsp&nbsp(备注：如果填写了邮箱,除了会收到工单进展更新提醒,还会获得评价地址用于为我们的服务质量打分哦。)</div>';
                    $content +=         '3.你可以在随邮箱发送的详情页追踪你的工单进展以及当前工单负责人。';
                    $content +=         '<br/>';
                    $content +=         '<img alt="教程5" src="/static/images/help6.png" height="250px" width="571px">';
                    $content +=         '<br/>';
                    $content +=         '4.如果没有填写邮箱，您也可以在页面下方的工单列表和右上方的查询入口查看您的工单详情页以及排在您前面的单。';
                    $content +=         '<br/>';
                    $content +=         '<img alt="教程3" src="/static/images/help3.png" height="150px" width="571px">';
                    $content +=         '<br/>';
                    $content +=         '<img alt="教程4" src="/static/images/help9.png" height="150px" width="571px">';
                    $content +=         '<br/>';
                    $content +=         '<div>祝使用愉快：）！</div>';
                    $content += '</div>'
                    $content +=         '<button id="J-close-popup" style="margin: 10px 250px 0px 250px" class="btn btn-default">关闭</button>';
                    dialog.content($content);
                    // 取消
                    $('#J-close-popup').on('click', function() {
                        $('.ui-dialog-close').trigger('click');
                    });
                    return false;
                })})

    </script>
    <script src="%E8%A6%81%E5%87%BA%E5%8F%91-IT%E6%9C%8D%E5%8A%A1%E5%8F%B0_files/user-center.js"></script>
    <script type="text/javascript">
        //检测密码是否正确
        function checkPwd ( obj ) {
            var oldPwd = $(obj).val();
            console.log ( oldPwd );
            var url = '/ycfad2014/admin/checkPwd';
            // console.log(url);return false;
            $.ajax ( {
                type : 'POST',
                data : 'oldPwd=' + oldPwd,
                dataType : 'json',
                url : url,
                beforeSend : function ( ) {

                },
                success : function ( returnMsg ) {
                    if ( returnMsg.code == 1001 ) {
                        $("#oldPwdTip").html(returnMsg.message);
                    } else {
                        $("#oldPwdTip").html(returnMsg.message);
                    }
                },
                error : function ( ) {
                    $("#oldPwdTip").html('密码输入错误');
                }
            } );
        }

        //检测两次输入的密码是否正确
        function checkTwoPwdIsSame ( ) {
            var newPwdOne = $("#newPwdOne").val();
            var newPwdTwo = $("#newPwdTwo").val();
        }

    </script>

</body
</html>
