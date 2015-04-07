# -analog-login
snoopy实现有验证码的模拟登录
将snoopy类稍作改变：get()代替fecth()，post()代替submit，对于此类有些其他部分的修改
使用软件fiddler可以得到post/get过程中传输的数据包

*captcha.php文件在获得验证码的内容的同时获得了验证码的cookie，此cookcie在模拟登录时用到。
