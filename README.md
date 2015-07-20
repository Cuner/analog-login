# -analog-login
snoopy实现有验证码的模拟登录

将snoopy类稍作改变：get()代替fecth()，post()代替submit，对于此类有些其他部分的修改，请自行体会.

使用软件fiddler可以得到post/get过程中传输的数据包

文件描述
===============================================
1.snoopy.php
    php扩展类库，个人对其做了部分更改
    
2.page.php
    用户登录的html页面
    
3.Captcha.php
    获取模拟登录网站的验证码，获取验证码cookie之后，把获取验证码内容在page.php中显示
    
4.login.php
    登录的后台处理

相关说明
===============================================
1.captcha.php文件在获得验证码的内容的同时获得了验证码的cookie，此cookcie存在本地cookie.txt文件里，在模拟登录时用到。

2.page.php为一个html页面，其中包含账号、密码、验证码（此时的验证码图片正是captcha.php中获取的验证码），然后将这些数据post到login.php页面。

3.login.php 使用snoopy类进行模拟登录，除了向登陆url进行三个数据的post，还有设置当前cookie为之前保存到本地cookie.txt文件里验证码的cookie。
