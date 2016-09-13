
<!DOCTYPE html>
<html lang="zh-hans">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link rel="stylesheet" type="text/css" href="" />
    <title>要出发-IT服务台</title>
    <link rel="stylesheet" type="text/css" href="/static/css/default.css">
    <script src="/static/js/hm.js"></script><script type="text/javascript" src="/static/js/ubb.js"></script>

    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/static/css/common.css">
    <link rel="stylesheet" href="/static/css/calendar.css">
    <link rel="stylesheet" href="/static/css/dialog.css">
    <script>
        var api_php = "http://help-t.yaochufa.com/"; //php接口地址
        var api_net = ""; //.net接口地址
        var api_net_version = ""; //.net接口版本
        var api_net_system = ""; //.net接口使用环境
        var securityKey = "LWiPuqi3Wer3gVkAB6lbDJMoJp2X1gbUQY8kOI8IYlMBtCptvZpOZklZjCli17PQEZMhnCyHsRo="; //结算日securityKey
        var isController = "false";
    </script>
    <script src="/static/js/jquery.js"></script>
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?ce8e4609c9c38a11639d9757a9600bc8";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <link rel="stylesheet" href="/static/css/order-detail.css">
    <style type="text/css">
        .left_div{float: left;vertical-align:top;height: 100%;width: 95px;}
        .right_div{margin-left: 130px;heigh:150px;}
    </style>
    <link rel="stylesheet" href="/static/css/default_002.css">
    <link rel="stylesheet" href="/static/css/notice.css">
    <style>
        button.btn-middle {vertical-align: middle;}
        .calendar-wrapper{display: inline-block;*display:inline;zoom:1;}
        .calendar-wrapper div{vertical-align: middle;}

    </style>
</head>
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
                <li><a href="/ycfad2014/public/logout">退出</a></li>
                <!--<li><a href="/ycfad2014/user/ownerupdate">修改密码</a></li>-->
            </ul>
        </div>

        <div class="wrapper clearfix">
            <a href="/" class="logo fl">
                <img src="/static/picture/logo-new.png" alt="logo">
                <span>IT服务台</span>
            </a>
            <ol class="clearfix fl" id="J-menu-item">
                <li class="active" data-index="3">
                    <a href="/ycfad2014/ordermanger/index" class="first">工单管理<i class="icon-css icon-css-tb"></i></a>
                    <!--<i class="icon icon-submenu submenu3"></i>-->
                    <div>
                        <a href="../default/orderf">故障管理</a>
                        <a href="../default/orderq">请求管理</a>
                        <a href="../excel/statistic">报表统计</a>
                        <a href="../excel/export">报表导出</a>
                        <a href="/ycfad2014/apply/apply">申请页面</a>
                    </div>
                </li>
                <li  data-index="2">
                    <a href="/ycfad2014/document/index" class="first">知识库管理<i class="icon-css icon-css-tb"></i></a>
                    <!--<i class="icon icon-submenu submenu2"></i>-->
                    <div>
                        <a href="/ycfad2014/document/index">档案列表</a>
                        <a href="/ycfad2014/document/category">档案分类</a>
                    </div>
                </li>
                <li  data-index="2">
                    <a href="/ycfad2014/user/userinfo" class="first">个人中心<i class="icon-css icon-css-tb"></i></a>
                    <!--<i class="icon icon-submenu submenu2"></i>-->
                    <div>
                        <a href="/ycfad2014/user/userinfo">修改信息</a>
                        <a href="/ycfad2014/ordermanger/myorder">我的订单</a>
                    </div>
                </li>
                <li  data-index="2">
                    <a href="/ycfad2014/admin/index" class="first">用户管理<i class="icon-css icon-css-tb"></i></a>
                    <!--<i class="icon icon-submenu submenu2"></i>-->
                    <div>
                        <a href="/ycfad2014/admin/index">账号列表</a>
                        <a href="/ycfad2014/admin/group">权限设置</a>
                        <a href="/ycfad2014/manage/dutyshift">值班配置</a>
                    </div>
                </li>
            </ol>
            <!--                <a href="--><!--" class="icon icon-notice-bell">-->
            </a>
        </div>
    </div>
</div>
