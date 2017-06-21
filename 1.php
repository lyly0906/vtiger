<?php
$host = 'http://live.ok.com/index.php';


$params = array(
    'username' => 'admin',
    'password' => '397126845',
    'generate_token' => 'true',
    'device' => 'unknown',
    'device_token' => 'frefref43r43r34r43',
);
executeRequest('login',$params,array(),'POST','');


function executeRequest($function, $params, $uparams = array(), $method = 'GET', $manualAppend = '')
{
    $ch = curl_init();
    $headers = array(
        "Content Type:application/x-www-form-urlencoded",
    );

    $uparamsArg = '';

    if (!empty($uparams) && is_array($uparams)) {
        $parts = array();
        foreach ($uparams as $param => $value) {
            $parts[] = '/('.$param .')/'.$value;
        }
        $uparamsArg = implode('', $parts);

    }

    $requestArgs = ($method == 'GET') ? '?' .http_build_query($params) : '';

    if ($method == 'POST') {
        curl_setopt($ch,CURLOPT_POST,1);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$params);
    }

    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_URL, 'http://live.ok.com/index.php/restapi/' . $function . $manualAppend . $uparamsArg . $requestArgs);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT , 5);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // Some hostings produces wargning...
    $content = curl_exec($ch);
    echo $content;
    return $content;
}
?>
