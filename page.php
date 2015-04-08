<?php
header("Content-Type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GB2312" />
<title>登陆页面</title>
<body>     
<div>
    <div id="main_contaier">
        <div id="loginBox">
            <form action="login.php" method="post">
            <table id="loginInputBox">
            <tr>
                <td><div class="label">用户名：</div></td>
   
                <td colspan="2"><input name="id" type="text" tabindex="1"  /></td>
                <td rowspan="2"><input type="submit" value="登 录" tabindex="4"/></td>
            </tr>
            <tr>
                <td ><div class="label">密&nbsp;&nbsp;码：</div></td>
                <td colspan="2"><div><input name="pwd" type="password" tabindex="2"/></div></td>
            </tr>
            <tr>
                <td><div class="label">验证码：</div></td>
                <td style=" width: 75px;"><input name="xdvfb" tabindex="3"/></td>
                <td style="text-align: left; width: 160px;">
                    <div style="height:20px;margin-left:5px;margin-top:10px;float:left;">
                        <img id="chkcode" alt="验证码" src="./Captcha.php"/>
                    </div>
                    <div style="float:right;font-size:10px;margin-top:5px;">
                        <a style="line-height:30px;margin-top:10px;font-size:13px;font:宋体;" href="javascript:void(0);" 
                         onclick="document.getElementById('chkcode').src='./Captcha.php?r='+Math.random()">看不清,换一张</a>
                    </div>
                </td>
            </tr> 
            </table>
            </form>   
        </div>
    </div>
</div>
</body>
</html>