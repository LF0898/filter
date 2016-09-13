var $document = $(document);

// 省市联动
(function () {

    var $setCity = $('#J-set-city');

    // 创建省份
    function getProvince(preProvinceCode) {
        $.ajax({
            url: '/api/user/GetProvince',
            dataType: 'json',
            data: {
                preProvinceCode: preProvinceCode
            },
            success: function (data) {
                var items = '';
                var selected = '';
                var selectedKey = '';
                for (var i = 0; i < data.length; i++) {
                    selected = data[i].ProvinceName;
                    selectedKey = data[i].ProvinceCode;
                    if (data[i].select) {
                        preSelected = data[i].ProvinceName;
                        preSelectedKey = data[i].ProvinceCode;
                        items += '<li class="selected" data-key="' + preSelectedKey + '">' + preSelected + '</li>'
                    } else {
                        items += '<li data-key="' + selectedKey + '">' + selected + '</li>'
                    }
                }
                var province = '<strong>城市<i class="notleft" >*</i>：</strong>' +
                                '<div class="select select-province" id="Admin[provinceCode]" style="width:148px;">' +
                                    '<div>' +
                                        '<span data-key="' + preSelectedKey + '">' + preSelected + '</span>' +
                                        '<em><i class="icon-css icon-css-tb"></i></em>' +
                                    '</div>' +
                                    '<ul>' + items + '</ul>' +
                                '<input type="hidden" name="Admin[provinceCode]" value="' + preSelectedKey + '"></div>';

                $setCity.html(province);
                $('.select-province').select();
                getCity(preSelectedKey, preCityCode)
            }
        });
    }

    // 加载城市
    function getCity(key, preCityCode) {
        $.ajax({
            url: '/api/user/GetCity',
            dataType: 'json',
            data: {
                provinceCode: key,
                preCityCode: preCityCode
            },
            success: function (data) {
                var items = '';
                var selected = '';
                var selectedKey = '';
                var preSelected = '';
                var preSelectedKey = '';
                for (var i = 0; i < data.length; i++) {
                    selected = data[i].CityName;
                    selectedKey = data[i].CityCode;
                    if (data[i].select) {
                        preSelected = data[i].CityName;
                        preSelectedKey = data[i].CityCode;
                        items += '<li class="selected" data-key="' + preSelectedKey + '">' + preSelected + '</li>'
                    } else {
                        items += '<li data-key="' + selectedKey + '">' + selected + '</li>'
                    }
                }
                if (!preSelectedKey.length) {
                    preSelectedKey = selectedKey;
                }
                if (!preSelected.length) {
                    preSelected = selected;
                }
                var province = '<div class="select select-city" id="Admin[cityCode]" style="width:148px;">' +
                                    '<div>' +
                                        '<span data-key="' + preSelectedKey + '">' + preSelected + '</span>' +
                                        '<em><i class="icon-css icon-css-tb"></i></em>' +
                                    '</div>' +
                                    '<ul>' + items + '</ul>' +
                                '<input type="hidden" name="Admin[cityCode]" value="' + preSelectedKey + '"></div>';
                var city = $('.select-city');
                if (!city.length) {
                    $setCity.append(province);
                } else {
                    city.remove();
                    $setCity.append(province);
                }
                $('.select-city').select();
            }
        });
    }


    // 默认加载省份和城市
    getProvince(preProvinceCode);

    // 点击获取城市
    $setCity.on('click', '.select-province li', function () {
        var key = $(this).attr('data-key');
        getCity(key, preCityCode);
        return false;
    });

})();


// 修改个人信息
(function () {

    var $userForm = $('#userInfoForm');
    if ($userForm.length) {
        var $error = $userForm.find('#J-error-tips');
        var $submit = $('#J-submit');

        // 单位名称、联系人、地址
        function veri(val) {
            var reg = /^[A-Za-z0-9\-\ _·.,\u4e00-\u9fa5]+$/; //字母、数字、中文、下划线、横线、空格、逗号、·.
            if (reg.test(val)) {
                return true;
            } else {
                return false;
            }
        }

        function getByte(val) {
            var len = 0;
            for (var i = 0; i < val.length; i++) {
                if (val[i].match(/[^\x00-\xff]/ig) != null) {
                    len += 2;
                } else {
                    len += 1;
                }
            };
            return len;
        }

        // 个人信息
        $submit.on('click', function () {
            var arr = [];
            var username = $('#J-username').find('input');
            var realname = $('#J-realname').find('input');
            var password = $('#J-password').find('input');
            var contact = $('#J-contact').find('input');
            //var phone = $('#J-phone').find('input');
            var cellPhone = $('#J-cell-phone').find('input');
            var qq = $('#J-qq').find('input');
            //var fax = $('#J-fax').find('input');
            var email = $('#J-email').find('input');
            var address = $('#J-address').find('input');
            var bd = $('#J-bdId-select');
            //var J_isAdmin = $('#J_isAdmin').val();
            var J_action = $('#J_action').val();
            var $hidden1 = $('#J-password').find('input[type=hidden]').eq(0);
            var $hidden2 = $('#J-password').find('input[type=hidden]').eq(1);
            var message = '';

            $userForm.find('li').removeClass('error');
            $error.html('');

            // 登录名
            var usernameVal = $.trim(username.val());

            var length = 0;

            //一个中文等于两个字符
            for (var i = 0, len = usernameVal.length; i < len; i++) {
                if (usernameVal.charCodeAt(i) > 127 || usernameVal.charCodeAt(i) == 94) {
                    length += 2;
                } else {
                    length++;
                }
            }

            // 不能为空切小于4位
            if (usernameVal == '' || length < 4) {
                username.parent('li').addClass('error');
                arr.push(1);
            }

            if ( ''==$.trim(realname.val())) {
                realname.parent('li').addClass('error');
                arr.push(1);
            }
            if (J_action == "create") {
                    if (password.val() == '' || !/^(?![^a-zA-Z]+$)(?!\D+$)(?![a-zA-Z0-9]+$).{8,12}$/.test(password.val()) || password.val().indexOf(' ') > -1) {
                        password.parent('li').addClass('error');
                        arr.push(1);
                }
            }


            // 手机号码
            var cellPhoneVal = $.trim(cellPhone.val());
            if (isNaN(cellPhoneVal) || cellPhoneVal == '') {
                cellPhone.parent('li').addClass('error');
                arr.push(1);
            }

            // qq
            var qqVal = $.trim(qq.val());
            if (qqVal != '' && qqVal != qq[0].defaultValue) {
                if (!/^[0-9]\d*$/.test(qqVal)) {
                    qq.parent('li').addClass('error');
                    arr.push(1);
                }
            }

            // 邮箱
            var emailVal = $.trim(email.val());
            if (!/\w+((-w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+/.test(emailVal) || emailVal == '') {
                email.parent('li').addClass('error');
                arr.push(1);
            }

			var userId = $('#J-id').val();
			if(userId == undefined){
				userId = '';
			}
			var form = $(this);

			$.ajax({
                url: '/ycfad2014/user/checkEmail',
                dataType: 'json',
                type: 'post',
                data: {
                    email: emailVal,
					id : userId
                },
                success: function (data) {
					var emailMessage = '';
                   if(data.success == false){
					   arr.push(1);
					   emailMessage = '<br>' + data.message;
					   email.parent('li').addClass('error');
				   }
					if (arr.length) {
						var str = '填写的内容有误，请仔细填写；' + message;
                        if ($('#J-username').is('.error')) {
                            str += '<br>登录名长度必须大于4!';
                        }
						if ($('#J-password').is('.error')) {
							str += '<br>登录密码长度必须为8至12位,且必须包含数字，字母和特殊字符（如@#$%^()~!）';
						}
						str += emailMessage;
						$error.html(str);
						return false;
					} else {
                        
					    var $form = form.closest('form');
					    if ($form.data('account') == 'manage') { // 个人信息的表单不用加密
					        var rsakey = new RSAKey();
					        rsakey.setPublic(publickey, '10001');

					        $hidden1.val(rsakey.encrypt(password.val()));
					        $hidden2.val(rsakey.encrypt(password.val() + '#' + uuid));
					    }

						$form.submit();
					}
                }
            });
			return false;


        });
    }

})();


///* 结算方式 */
//(function () {
//
//    var settlement = $('#J-settlement');
//    var settlementSelect = $('#J-settlement-select');
//    var addSelect = $('#J-add-select');
//    var week = ['周一', '周二', '周三', '周四', '周五', '周六', '周日'];
//    var addZero = function (n) {
//        var n = parseInt(Number(n));
//        if (n < 10) n = 0 + '' + n;
//        return n;
//    }
//
//    settlementSelect.on('change', function () {
//
//        var select = '';
//        var $this = $(this);
//        var dataKey = $this.find('option:selected').val();
//        addSelect.html();
//
//        // 半周结
//        if (dataKey == 6) {
//            select = '<select name="Admin[capitalSettlementDay]"><option value="3">' + week[2] + '</option><option value="7">' + week[6] + '</option></select>';
//        }
//
//        // 周结
//        if (dataKey == 2) {
//            var weekOptions = '';
//            for (var w = 0; w < week.length; w++) {
//                weekOptions += '<option value="' + (w + 1) + '">' + week[w] + '</option>';
//            }
//            select = '<select name="Admin[capitalSettlementDay]">' + weekOptions + '</select>';
//        }
//
//        // 月结
//        if (dataKey == 4) {
//            var monthOption = '';
//            for (var m = 0; m < 30; m++) {
//                monthOption += '<option value="' + (m + 1) + '">' + (m + 1) + '</option>';
//            }
//            select = '<select name="Admin[capitalSettlementDay]">' + monthOption + '</select>';
//        }
//
//        // 半月结
//        if (dataKey == 3) {
//            var halfMonthOption = '';
//            for (var m = 0; m < 30; m++) {
//                halfMonthOption += '<option value="' + (m + 1) + '">' + (m + 1) + '</option>';
//            }
//            select = '<select name="Admin[capitalSettlementDay][]">' + halfMonthOption + '</select><select name="Admin[capitalSettlementDay][]">' + halfMonthOption + '</select>';
//        }
//
//
//        if (dataKey == 1 || dataKey == 5) {
//            addSelect.html(select);
//        } else {
//            addSelect.html('<strong class="settlement-day">结算日：</strong>' + select);
//        }
//
//    });
//
//})();


// 修改登录密码
(function () {

    var $form = $('#J-change-login-pw');
    var $submit = $form.find('button[type=submit]');
    var $curInput = $form.find('.cur-pw');
    var $newInput = $form.find('.new-pw');
    var $reInput = $form.find('.re-pw');
    var $curLi = $curInput.parent('li');
    var $newLi = $newInput.parent('li');
    var $reLi = $reInput.parent('li');
    var $curTips = $curLi.find('.error').find('em');
    var $newTips = $newLi.find('.error').find('em');
    var $reTips = $reLi.find('.error').find('em');
    var $hidden1 = $form.find('input[type=hidden]').eq(0);
    var $hidden2 = $form.find('input[type=hidden]').eq(1);
    var $hidden3 = $form.find('input[type=hidden]').eq(2);
    var $hidden4 = $form.find('input[type=hidden]').eq(3);
    var curLock = true;

    $curInput.on('blur', function () {

        var $input = $(this);
        var val = $.trim($input.val());

        //$curLi.addClass('error');

        // 如果旧密码为空
        if (val == '') {
            $curLi.addClass('error');
            $curTips.html('请输入旧登录密码');
            return false;
        }

        // 校验旧密码是否正确
        if (curLock) {
            curLock = false;
            var rsakey = new RSAKey();
            rsakey.setPublic(publickey, '10001');
            $.ajax({
                url: '/ycfad2014/admin/checkPwd',
                dataType: 'json',
                type: 'post',
                data: {
                    oldPwd: rsakey.encrypt(val)
                },
                success: function (data) {
                    if (data.code != 1000) {
                        $curLi.addClass('error');
                    } else {
                        $curLi.removeClass('error');
                    }
                    $curTips.html(data.message);
                    curLock = true;
                }
            });
        }

        //$newInput.triggerHandler('blur');

    });

    // 新密码
    $newInput.on('blur', function () {

        var $input = $(this);
        var curVal = $.trim($curInput.val());
        var val = $.trim($input.val());

        if (val == '' || !/^(?![^a-zA-Z]+$)(?!\D+$)(?![a-zA-Z0-9]+$).{8,12}$/.test(val) || val.indexOf(' ') > -1) {
            $newLi.addClass('error');
            $newTips.html('登录密码长度必须为8至12位,且必须包含数字，字母和特殊字符（如@#$%^()~!）');
        } else if (curVal == val && val != '') {
            $newLi.addClass('error');
            $newTips.html('新旧密码不能相同');
        } else {
            $newLi.removeClass('error');
        }


    }).on('focus', function () {

        // 检测旧密码框是否为空
        if ($.trim($curInput.val()) == '') {
            $curInput.triggerHandler('blur');
        }

    });

    // 确认密码
    $reInput.on('blur', function () {

        var $input = $(this);
        var curVal = $.trim($curInput.val());
        var newVal = $.trim($newInput.val());
        var val = $.trim($input.val());

        if (val == '') {
            $reLi.addClass('error');
            $reTips.html('请再次输入登录密码');
        } else if (val != newVal) {
            $reLi.addClass('error');
            $reTips.html('确认密码不一致，请重新输入');
        } else {
            $reLi.removeClass('error');
        }

    }).on('focus', function () {

        $curInput.triggerHandler('blur');
        $newInput.triggerHandler('blur');

    });

    // 提交
    $submit.on('click', function () {

        $curInput.triggerHandler('blur');
        $newInput.triggerHandler('blur');
        $reInput.triggerHandler('blur');

        setTimeout(function () {
            if (!$form.find('li.error').length) {

                var rsakey = new RSAKey();
                rsakey.setPublic(publickey, '10001');

                $hidden1.val(rsakey.encrypt($curInput.val()));
                $hidden2.val(rsakey.encrypt($newInput.val()));
                $hidden3.val(rsakey.encrypt($reInput.val()));
                $hidden4.val(rsakey.encrypt($newInput.val() + '#' + uuid));

                $form.submit();
            }
        }, 400);

        return false;

    });

})();


//// 修改支付密码
//(function () {
//
//    var $form = $('#J-change-pay-pw');
//    var $submit = $form.find('button[type=submit]');
//    var $curInput = $form.find('.cur-pw');
//    var $newInput = $form.find('.new-pw');
//    var $reInput = $form.find('.re-pw');
//    var $curLi = $curInput.parent('li');
//    var $newLi = $newInput.parent('li');
//    var $reLi = $reInput.parent('li');
//    var $curTips = $curLi.find('.error').find('em');
//    var $newTips = $newLi.find('.error').find('em');
//    var $reTips = $reLi.find('.error').find('em');
//    var $hidden1 = $form.find('input[type=hidden]').eq(0);
//    var $hidden2 = $form.find('input[type=hidden]').eq(1);
//    var $hidden3 = $form.find('input[type=hidden]').eq(2);
//    var $hidden4 = $form.find('input[type=hidden]').eq(3);
//    var curLock = true;
//
//    $curInput.on('blur', function () {
//
//        var $input = $(this);
//        var val = $.trim($input.val());
//
//        $curLi.addClass('error');
//
//        // 如果旧密码为空
//        if (val == '' || val.length < 6) {
//            $curLi.addClass('error');
//            $curTips.html('请输入旧支付密码，默认为登录密码');
//            return false;
//        }
//
//        // 校验旧密码是否正确
//        if (curLock) {
//            curLock = false;
//            var rsakey = new RSAKey();
//            rsakey.setPublic(publickey, '10001');
//            $.ajax({
//                url: '/ycfad2014/admin/checkPayPwd',
//                dataType: 'json',
//                type: 'post',
//                data: {
//                    oldPwd: rsakey.encrypt(val)
//                },
//                beforeSend: function () {
//                    //$submit.prop('disabled', true);
//                },
//                success: function (data) {
//                    if (data.code != 1000) {
//                        $curLi.addClass('error');
//                    } else {
//                        $curLi.removeClass('error');
//                        //$submit.prop('disabled', false);
//                    }
//                    $curTips.html(data.message);
//                    curLock = true;
//                }
//            });
//        }
//
//        $newInput.triggerHandler('blur');
//
//    });
//
//    // 新密码
//    $newInput.on('blur', function () {
//
//        var $input = $(this);
//        var curVal = $.trim($curInput.val());
//        var val = $.trim($input.val());
//
//        if (val == '') {
//            $newLi.addClass('error');
//            $newTips.html('请输入新的支付密码');
//        } else if (val.length < 6 || val.length > 18 || (val.indexOf(' ') > -1)) {
//            $newLi.addClass('error');
//            $newTips.html('支付密码长度必须为6至18位，且不能为空格');
//        } else if (curVal == val && val != '') {
//            $newLi.addClass('error');
//            $newTips.html('新旧密码不能相同');
//        } else {
//            $newLi.removeClass('error');
//        }
//
//
//    }).on('focus', function () {
//
//        // 检测旧密码框是否为空
//        if ($.trim($curInput.val()) == '') {
//            $curInput.triggerHandler('blur');
//        }
//
//    });
//
//    // 确认密码
//    $reInput.on('blur', function () {
//
//        var $input = $(this);
//        var curVal = $.trim($curInput.val());
//        var newVal = $.trim($newInput.val());
//        var val = $.trim($input.val());
//
//
//        if (val == '') {
//            $reLi.addClass('error');
//            $reTips.html('请再次输入支付密码');
//        } else if (val != newVal) {
//            $reLi.addClass('error');
//            $reTips.html('确认密码不一致，请重新输入');
//        } else {
//            $reLi.removeClass('error');
//        }
//
//    }).on('focus', function () {
//
//        $curInput.triggerHandler('blur');
//        $newInput.triggerHandler('blur');
//
//    });
//
//    // 提交
//    $submit.on('click', function () {
//
//        $curInput.triggerHandler('blur');
//        $newInput.triggerHandler('blur');
//        $reInput.triggerHandler('blur');
//
//        setTimeout(function () {
//            if (!$form.find('li.error').length) {
//
//                var rsakey = new RSAKey();
//                rsakey.setPublic(publickey, '10001');
//
//                $hidden1.val(rsakey.encrypt($curInput.val()));
//                $hidden2.val(rsakey.encrypt($newInput.val()));
//                $hidden3.val(rsakey.encrypt($reInput.val()));
//                $hidden4.val(rsakey.encrypt($newInput.val() + '#' + uuid));
//
//                $form.submit();
//            }
//        }, 400);
//
//        return false;
//
//    });
//
//})();


// 选择用户组去掉部分填写信息 
(function () {

    var $settlement = $("#J-settlement");
    var $setCity = $("#J-set-city");
    var $address = $("#J-address");
    var $bid = $("#J-bd-id");
    var $isAdmin = $("#J_isAdmin");
    var $sendSms = $('#J-send-sms');

    function show() {
        $settlement.hide();
        $setCity.hide();
        $address.hide();
        $bid.hide();
        $sendSms.hide();
        $isAdmin.val(0);
    }

    ////默认不加载分销商信息
    //if ($isAdmin.val() == 0) {
    //    show();
    //}

    // 切换显示
    var $groupId = $('#group_id');
    $groupId.change(function () {
        var groupId = $("#group_id").val();
        $.ajax({
            type: 'post',
            url: '/ycfad2014/commercial/isAdmin',
            dataType: 'json',
            data: {
                groupId: groupId
            },
            success: function (data) {
                if (data.success) {
                    $settlement.show();
                    $setCity.show();
                    $address.show();
                    $bid.show();
                    $sendSms.show();
                    $isAdmin.val(1);
                } else {
                    show();
                }
            }
        });
    });

})();
