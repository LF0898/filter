<html xmlns="http://www.w3.org/1999/html">
<title>修改密码</title>
<body>
<!----------------------公告头部----------------------------------->
<?=$this->render('../common/top');?>

<div class="tab-mod">
    <form method="post" id="-change-login-pw" name="fname" action="?r=activity/it/revise" onsubmit="return checkdata(this)">
        <div class="main change">
            <ol class="ovh">
                <li>
                    <strong>当前密码</strong>
                    <input class="cur-pw" type="password" value="dfgfdgdfgdf">
                    <span class="error"><i></i><em></em></span>
                </li>

                <li>
                    <strong>新密码</strong>
                    <input class="new-pw" name="paw" id="paw" type="password">
                    <span class="error"><i></i><em></em></span>
                </li>

                <li>
                    <strong>确认密码</strong>
                    <input class="re-pw" id="fcpaw" name="fcpaw" type="password">
                    <span class="error"><i></i><em></em></span>
                </li>

                <li><input type="submit" value="保存"></li>
            </ol>
        </div>
    </form>
</div>
<!--------------------------------公告尾部---------------------------------------------------------->
<?=$this->render('../common/footer');?>


<script type="text/javascript">
    function checkdata() {
        //获取用户名框信息

        //用户名判断


        if (strlen(fname.paw.value)<6 || strlen(fname.paw.value)>16){
            alert("6-16位密码，仅可使用英文、数字！");
            fname.paw.focus();
            return false;
        }

        if (strlen2(fname.paw.value)){
            alert("密码仅可使用英文、数字！");
            fname.paw.focus();
            return false;
        }

        if (fname.paw.value === fname.username.value){
            alert("用户名和密码不能相同！");
            fname.paw.focus();
            return false;
        }

        if (fname.fcpaw.value==""){
            alert("请输入确认密码！");
            fname.fcpaw.focus();
            return false;
        }

        if (fname.paw.value != fname.fcpaw.value){
            alert("两次密码不一致！");
            fname.paw.focus();
            return false;
        }

    }



    //仅可用英文、数字、特殊字符
    function strlen(str){
        var len;
        var i;
        len = 0;
        for (i=0;i<str.length;i++){
            if (str.charCodeAt(i)>255) len+=2; else len++;
        }
        return len;
    }
    //禁用非法字符，仅可用英文、数字、特殊字符
    function strlen2(str){
        var len;
        var i;
        len = 0;
        for (i=0;i<str.length;i++){
            if (str.charCodeAt(i)>255) return true;
        }
        return false;
    }

    function isWhiteWpace (s)
    {
        var whitespace = " \t\n\r";
        var i;
        for (i = 0; i < s.length; i++){
            var c = s.charAt(i);
            if (whitespace.indexOf(c) >= 0) {
                return true;
            }
        }
        return false;
    }



    function checkusn(gotoURL) {
        var usn=fname.username.value.toLowerCase();
        if (checkUserName(usn)){
            var open_url = gotoURL + "?username=" + usn;
            window.open(open_url,'','status=0,directories=0,resizable=0,toolbar=0,location=0,scrollbars=0,width=322,height=200');
        }
    }

</script>


</body>

</html>
