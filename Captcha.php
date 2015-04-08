<?php
require_once('snoopy.php');
    $url='http://210.42.121.241/servlet/CaptchaServlet?action=g';
    $snoopy=new Snoopy;
    $snoopy->get($url);
    $captcha_cookie=$snoopy->res_cookie;
    $captcha_content=$snoopy->results;
    //ob_clean();
    echo $captcha_content;
    $fp=fopen('cookie.txt','w');
    fwrite($fp, $captcha_cookie);
    fclose($fp);
?>
