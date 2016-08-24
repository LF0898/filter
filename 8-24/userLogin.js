/**
 * Created by linfang on 2016/8/24.
 */
    function checkdata() {
    //获取用户名框信息
    var usn=fname.username.value.toLowerCase();
        //用户名判断
        if (!checkUserName(usn)) return false;

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

        if (!(fname.love0.checked + fname.love1.checked + fname.love2.checked)){
            alert("请选择爱好！");
            fname.love0.focus();
            return false;
        }

        if (fname.city.selectedIndex ==0){
            alert("请选择所在地！");
            fname.city.focus();
            return false;
        }

        if (fname.photo.value==""){
            alert("请选择照片！");
            fname.photo.focus();
            return false;
        }

        if (fname.resume.value==""){
            alert("请介绍自己！");
            fname.resume.focus();
            return false;
        }
    }

function checkUserName(usn){
    if( usn.length<3 || usn.length>18 ) {
        alert("\请输入正确的用户名,用户名长度为3-18位！")
        fname.username.focus()
        return false;
    }
    if (isWhiteWpace(usn)){
        alert("\请输入正确的用户名,用户名中不能包含空格！")
        fname.username.focus()
        return false;
    }
    if (!isUsnString(usn)){
        alert("\  您的用户名格式输入不正确 " )
        fname.username.focus()
        return false;
    }
    return true;
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

function isUsnString (usn)                         //检查用户名是否匹配正则表达式
{
    var re=/^[a-z_][\w.]*[0-9a-z]$/i;
    if(re.test(usn))
        return true;
    else
        return false;
}

function checkusn(gotoURL) {
    var usn=fname.username.value.toLowerCase();
    if (checkUserName(usn)){
        var open_url = gotoURL + "?username=" + usn;
        window.open(open_url,'','status=0,directories=0,resizable=0,toolbar=0,location=0,scrollbars=0,width=322,height=200');
    }
}
