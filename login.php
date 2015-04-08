
<?php
require_once('snoopy.php');
if(isset($_POST['id'])){
    $snoopy=new Snoopy;
    $url='http://210.42.121.241/servlet/Login';
    $post_data=array(
    	'id'=>$_POST['id'],
    	'pwd'=>$_POST['pwd'],
    	'xdvfb'=>$_POST['xdvfb'],
    	);
    $captcha_cookie;
    $handle=fopen('cookie.txt', 'r');
    if($handle){
        while(($buffer=fgets($handle,4096))!==false){
            $captcha_cookie=trim($buffer);
        }
        fclose($handle);
    }
    if(isset($captcha_cookie)){
        $snoopy->cookie=$captcha_cookie;
        $snoopy->post($url,$post_data);
        $rs=$snoopy->results;
        $login_cookie=$snoopy->res_cookie;
    }else{
        echo 'Not Exiting captcha Cookie';
    }
}else{
    echo 'Not Exiting Post Data';
}


$snoopy=new Snoopy;
$snoopy->cookie=$login_cookie;
$course_url='http://210.42.121.241/servlet/Svlt_QueryStuLsn?action=queryStuLsn';
$snoopy->get($course_url);
$rs=$snoopy->results;
echo $rs;
?>