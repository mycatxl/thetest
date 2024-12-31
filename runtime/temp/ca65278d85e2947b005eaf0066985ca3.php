<?php /*a:1:{s:51:"D:\phpEnv\www\cz_pay\view\index\wallet_address.html";i:1728305557;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN" style="--status-bar-height: 0px; --top-window-height: 0px; --window-left: 0px; --window-right: 0px; --window-margin: 0px; --window-top: calc(var(--top-window-height) + calc(44px + env(safe-area-inset-top))); --window-bottom: 0px;">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>钱包地址</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, viewport-fit=cover">
		<link rel="stylesheet" href="/static/index/css/wallet_address.css">

        <link rel="stylesheet" href="/static/index/css/base.css"><!-- 提示弹出 -->
        <script src="/static/index/js/message.js"></script><!-- 提示弹出 -->

	</head>
	<body class="uni-body pages-user-walletAddress" style="overflow: visible;">

        <header header-type="default">
            <div class="header" style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                <div class="header-hd" onclick="window.history.back()">
                    <div class="header-btn">
                        <i class="uni-btn-icon" style="color: rgb(0, 0, 0); font-size: 27px;"></i>
                    </div>
                    <div class="header-ft"></div>
                </div>
                <div class="header-bd">
                    <div class="header__title" style="font-size: 16px; opacity: 1;">
                        钱包地址
                    </div>
                </div>
                <div class="header-ft"></div>
            </div>
            <div class="uni-placeholder"></div>
        </header>
        <div class="container">

            <div class="main">
                <div class="title">虚拟币协议</div>
                <div class="tag flexJA">TRC20</div>
                <div class="title star">绑定USDT地址</div>
                <uni-input class="input">
                    <div class="uni-input-wrapper">
                        <input maxlength="140" step="" enterkeyhint="done" autocomplete="off" type="" class="uni-input-input" placeholder="请输入或黏贴您的提币地址" value="<?php echo htmlentities((isset($user_info['trc20']) && ($user_info['trc20'] !== '')?$user_info['trc20']:"")); ?>" id="address">
                    </div>
                </uni-input>
            </div>
            <div class="button flexJA" id="btnBottom" onclick="save()">保存</div>
        </div>
        <div class="wrap">
            <div class="layer-bottom">
                <div class="uni-popup__wrapper bottom" style="background-color: transparent;">
                    <div class="popup">
                        <div class="box">
                            <div class="title">为了您的账号安全，本次操作需输入密码</div>
                            <div class="tips">请输入您的账号登录密码</div>
                            <div class="input">
                                <div class="uni-input-wrapper">
                                    <input maxlength="140" step="" enterkeyhint="done" autocomplete="off" type="password" class="uni-input-input" placeholder="请输入登录密码" id="password">
                                </div>
                            </div>
                        </div>
                        <div class="button flexJA" onclick="submit()">确认</div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/static/index/js/jquery.min.js"></script>
        <script src="/static/index/js/mSlider.min.js"></script>
        <script>
            function save() {
                var address = $('#address').val();
                if(!address){
                    toast({time: 3000, msg: '请输入提币地址'});
                }else{
                    new mSlider({
                        dom: ".layer-bottom",
                        direction: "bottom"
                    }).open();
                }
            }

            function submit() {
                $.ajax({
                    url: "/account_settings_post/wallet_address",
                    method: 'POST',
                    data: {
                        password: $('#password').val(),
                        address: $('#address').val(),
                    },
                    dataType: 'json',
                    success: function(res) {
                        if (res.code === 200) {
                            toast({time: 3000, msg: res.message});
                            setTimeout(function (){
                                window.location.reload();
                            },1500);
                        }else{
                            toast({time: 3000, msg: res.message});
                        }

                    }
                });
            }
            


            window.onload = function () {
                //移动端使用touchend
                var event = navigator.userAgent.match(/(iPhone|iPod|Android|ios)/i) ? 'touchend' : 'click';
                // 选择器
                var Q = function (id) {
                    return document.getElementById(id)
                };
            }
        </script>
	</body>
</html>