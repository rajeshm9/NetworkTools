<?php

#$body = file_get_contents('http://spicesafar.com');
#var_export($http_response_header);
function validateHost ($ipAddr)
{
    $ValidIpAddressRegex = "^(([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])\.){3}([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])$";
    $ValidHostnameRegex = "^(([a-zA-Z0-9]|[a-zA-Z0-9][a-zA-Z0-9\-]*[a-zA-Z0-9])\.)*([A-Za-z0-9]|[A-Za-z0-9][A-Za-z0-9\-]*[A-Za-z0-9])$";

     	
    if (preg_match('/'.$ValidIpAddressRegex.'/', $ipAddr))
    {
        return true;
    }
    if (preg_match('/'.$ValidHostnameRegex.'/', $ipAddr))
    {
        return true;
    }
    return false;
    
}

$domain = "12stackoverfloo.wom";
$ip = "121.12.12";

var_dump (validateHost ($domain));
var_dump (validateHost ($ip));



require_once "Net/Whois.php";
function  getWhois($domain)
{

      $server = "whois.networksolutions.com";
      $query  = $domain;     // get information about
	      
      $whois = new Net_Whois;
      $data = $whois->query($query, $server);
      echo nl2br($data);
		    
		    
}

getWhois ("spicegsp.com");
?>
