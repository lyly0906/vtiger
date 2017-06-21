<?php
function login($url, $post)
{
    $headers = array();
    $header[] = 'Authorization: YWRtaW46Mzk3MTI2ODQ1bHk=';
    $header[] = 'Cache-Control: max-age=0';
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HEADER, true);//是否显示头信息
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 0);
    curl_setopt($curl, CURLOPT_COOKIE,1);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($post));//要提交的信息
    $result = curl_exec($curl);
    curl_getinfo($curl);
    curl_close($curl);

}



//设置post的数据
$post = array(
    'user_id' => '1',
    'status' => 'true',
    'r' => 'user/account'
);


$url = "http://live.vtiger.com/index.php/restapi/loginbytoken?token=ecb03bd30012e0332038b0ccb1eb8090&api=1&r=user/account";
login($url, $post);
?>