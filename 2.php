<?php
function login($url, $cookie, $post)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HEADER, 0);//是否显示头信息
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 0);
    curl_setopt($curl, CURLOPT_COOKIE,1);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($curl, CURLOPT_COOKIEJAR, $cookie); //设置Cookie信息保存在指定的文件中
    curl_setopt($curl, CURLOPT_POST, 1);//post方式提交
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($post));//要提交的信息
    $result = curl_exec($curl);
    curl_getinfo($curl);
    if(file_exists($cookie)){
        $fp = fopen($cookie,"r");
        $str = fread($fp,filesize($cookie));//指定读取大小，这里把整个文件内容读取出来
        preg_match('/PHPSESSID.*/',$str,$m);
        $cookie = trim(str_replace('PHPSESSID','',$m[0]));
        setcookie('PHPSESSID','',time()-31*24*3600,'/','live.vtiger.com');
        setcookie('PHPSESSID',$cookie,time()+31*24*3600,'/','*.vtiger.com');
    }

    curl_close($curl);


}
function get_content($url, $cookie) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie); //读取cookie
    $rs = curl_exec($ch);

    curl_close($ch);
    return $rs;
}


//设置post的数据
$post = array(
    'username' => 'admin',
    'password' => '397126845',
    'generate_token' => 'true',
    'device' => 'unknown',
    'device_token' => 'asdfqwerfk111111111111',
);;


$url = "http://live.vtiger.com/index.php/restapi/login";
$cookie = dirname(__FILE__) . '/cookie_oschina.txt';
$url2 = "http://live.vtiger.com/index.php/site_admin/user/account";
login($url, $cookie, $post);
$content = get_content($url2, $cookie);
//删除cookie文件
//@ unlink($cookie);
//echo $content;
?>