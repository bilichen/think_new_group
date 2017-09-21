<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="__PUBLIC__/Css/login.css" />
	<title>移动办公自动化系统</title>
	<script>
		var verifyURL = "<?php echo U('Admin/Login/verify','','');?>";
	</script>
</head>
<body>
	<div id="container">
		<div id="bd">
			<div class="login">
            	<div class="login-top"><h1 class="logo"></h1></div>
                <form action="<?php echo U('Admin/Login/login','','');?>" method="post">
					<div class="login-input">
						<p class="user ue-clear">
							<label>用户名</label>
							<input type="text" name="username"/>
						</p>
						<p class="password ue-clear">
							<label>密&nbsp;&nbsp;&nbsp;码</label>
							<input type="text" name="pwd"/>
						</p>
						<p class="verify ue-clear">
							<label>验证码</label>
							<input type="text" name="code"/>
							<img src="<?php echo U('Admin/Login/verify','','');?>" id="code">
							<a href="javascript:void(change_code(this));">看不清</a>
						</p>
					</div>
					<div class="login-btn ue-clear">
						<!-- <a href="index.html" class="btn">登录</a>-->
						<input type="submit" value="登录" class="btn">
						<div class="remember ue-clear">
							<input type="checkbox" id="remember" />
							<em></em>
							<label for="remember">记住密码</label>
						</div>
					</div>
				</form>
            </div>
		</div>
	</div>
    <div id="ft">CopyRight&nbsp;2016&nbsp;&nbsp;版权所有&nbsp;&nbsp;皖ICP备12345678号  更多模板：<a href="http://www.mycodes.net/" target="_blank">源码之家</a></div>
</body>
<script type="text/javascript" src="__PUBLIC__/Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/login.js"></script>

<script type="text/javascript">
var height = $(window).height();
$("#container").height(height);
$("#bd").css("padding-top",height/2 - $("#bd").height()/2);

$(window).resize(function(){
	var height = $(window).height();
	$("#bd").css("padding-top",$(window).height()/2 - $("#bd").height()/2);
	$("#container").height(height);
	
});

$('#remember').focus(function(){
   $(this).blur();
});

$('#remember').click(function(e) {
	checkRemember($(this));
});

function checkRemember($this){
	if(!-[1,]){
		 if($this.prop("checked")){
			$this.parent().addClass('checked');
		}else{
			$this.parent().removeClass('checked');
		}
	}
}
</script>
</html>