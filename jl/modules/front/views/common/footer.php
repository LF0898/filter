<!-- 公用底部 -->
<div class="footer bt">
    <!--        <ul class="phone">-->
    <!--            <li class="first">订单咨询：020-61788369 / 020-61788370</li>-->
    <!--            <li>财务对账：020-22103972</li>-->
    <!--            <li>技术热线：020-85603622</li>-->
    <!--        </ul>-->
    <p class="copyright">中华人民共和国增值电信业务经营许可证编号：粤B2-20130613<br>旅行社业务经营许可证编号：L-GD01685<br>2016 © 广州酷旅旅行社有限公司 粤ICP备11008339号</p>
</div>

<script src="/static/js/dialog.js"></script>
<script src="/static/js/calendar.js"></script>
<script src="/static/js/common.js"></script>
<script src="/static/js/tingyun-rum.js"></script>
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
</script><script src="/static/js/kindeditor-min-ubb.js"></script>
<script src="/static/js/zh_CN_002.js"></script>
</script>    <script src="/static/js/notice.js"></script>
<script>
    // 打开弹窗
    $('#J-change-dist').on('click',function (){
        var dialog = $.dialog();
        $.ajax({
            url:'/ycfad2014/OrderManger/Supporter?supplier=57%2C44%2C',
            dataType: 'html',
            beforeSend: function () {
                dialog.content('<div class="loading"><img src="http://cdn7.jinxidao.com/www/images/loading.gif" alt="加载中..."></div>');
            },
            success: function (data) {
                dialog.content(data);
            }
        });
        return false;
    })
</script>
<script type="text/javascript" src="/static/js/kindeditor-min.js"></script>
<script type="text/javascript" src="/static/js/zh_CN.js"></script>
<script type="text/javascript">
    /*<![CDATA[*/

    KindEditor.ready(function(K) {
        __content = K.create("#content", {
            width:'100%',filterMode:true,'height':'180px' ,'uploadJson':'/ycfad2014/ordermanger/upload' ,'readonly':'1'
        });
        __content.sync();

        //$editObj中iframe中body元素
        $(__content["srcElement"][0]).prev(".ke-container").find("iframe.ke-edit-iframe").contents().find("body.ke-content").on("paste", function(e){
            //chrome：粘帖后自动上传粘帖板中的二进制图片数据(firefox浏览器可自行解析成img元素,ie系暂无api实现)
            if(e.originalEvent.clipboardData.items){
                items=e.originalEvent.clipboardData.items;
                item=items[0]
                if( item && item.kind === 'file' && item.type.match(/^image\//i) ){
                    file=item.getAsFile();
                    var formData = new FormData();
                    formData.append('imgFile', file,"image.png");

                    $.ajax({
                        url:'http://help-t.yaochufa.com/ycfad2014/ordermanger/upload',
                        type:'POST',
                        data:formData,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success:function(data){
                            result=jQuery.parseJSON(data)
                            if(result && 0===result["error"]){
                                console.log(result["url"]);
                                __content.exec("insertimage", result["url"], "", "", "", "", "");
                            }
                        }
                    });
                }
            }
            //粘帖后检查，若内容中的图片为本地文件,删除该img元素并弹出上传框
            setTimeout(function () {
                __content.sync();
                var exp=new RegExp("<img src=.file.*?\/>","g");
                if(exp.test(__content.html())){
                    __content.html(__content.html().replace(exp,''));
                    __content.loadPlugin('image', function() {
                        __content.plugin.imageDialog({
                            showLocal : false,
                            imageUrl : K('#url2').val(),
                            clickFn : function(url, title, width, height, border, align) {
                                __content.html(__content.html()+"<img src=\""+url+"\" alt=\"\" />");
                                __content.hideDialog();
                            }
                        });
                    });
                }
            }, 100);

        });__content.readonly(true)});
    /*]]>*/
</script>
<script type="text/javascript">
    ///**
    // * 提交搜索表单
    // * <input type="text" />的input必须有name属性，form才能成功提交。
    // */
    //function submitForm ( ) {
    //	var keyWords = $("#keyWords").val();
    //	if ( !keyWords.length ) {
    //		alert ( "请输入公告标题、内容" );
    //		return false;
    //	} else {
    //		document.getElementById("searchForm").submit();
    //	}
    //}

    $('#J-calendar').calendar({
        minDate : "all",
        setTime : $('#J-calendar').val(),
    });
    $('#J-calendar2').calendar({
        minDate : "all",
        setTime : $('#J-calendar2').val(),
    });
    $(function(){
        $('#no-time-btn').on('click',function(){
            $('#isTimeSearch').val(0);
            return true;
        })
    })
</script>
</body>
</html>
