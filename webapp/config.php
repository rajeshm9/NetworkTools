<?php

define ('DB_HOST','localhost');
define ('DB_NAME', 'itool');
define ('DB_USER', 'root');
define ('DB_PASS' , 'raj#123');

define ('PING', 1);
define ('TRACE' ,2);
define ('HTTP_HEADER', 1);
define ('SSLINFO' ,2);

/*
textname, icon, link , hits
link, icon,hits, textname,

INSERT INTO `itool`.`menu` (`textname`, `icon`, `link`, `hits`) VALUES ('SS7 MTP3/SCCP Decoder', 'fa-angle-double-down', 'ss7.php', '0');
INSERT INTO `itool`.`menu` (`textname`, `icon`, `link`, `hits`) VALUES ('Ping', 'fa-plug', 'ping.php', '0');
INSERT INTO `itool`.`menu` (`textname`, `icon`, `link`, `hits`) VALUES ('Port Check', 'fa-plug', 'ping.php', '0');
INSERT INTO `itool`.`menu` (`textname`, `icon`, `link`, `hits`) VALUES ('Ping', 'fa-plug', 'ping.php', '0');
INSERT INTO `itool`.`menu` (`textname`, `icon`, `link`, `hits`) VALUES ('Ping', 'fa-plug', 'ping.php', '0');
INSERT INTO `itool`.`menu` (`textname`, `icon`, `link`, `hits`) VALUES ('Ping', 'fa-plug', 'ping.php', '0');
*/
$menuData[0]['textname']='SS7 Decoder';
$menuData[0]['icon']='fa-tty';
$menuData[0]['link']='ss7.php';
$menuData[0]['hits']='0';
$menuData[0]['color']='success';

$menuData[1]['textname']='DNS Information';
$menuData[1]['icon']='fa-plug';
$menuData[1]['link']='dns.php';
$menuData[1]['hits']='0';
$menuData[1]['color']='warning';

$menuData[2]['textname']='Ping Host';
$menuData[2]['icon']='';
$menuData[2]['link']='ping.php';
$menuData[2]['hits']='0';
$menuData[2]['color']='success';

$menuData[3]['textname']='Http Header';
$menuData[3]['icon']='';
$menuData[3]['link']='http.php';
$menuData[3]['hits']='0';

$menuData[4]['textname']='TraceRoute';
$menuData[4]['icon']='';
$menuData[4]['link']='trace.php';
$menuData[4]['hits']='0';




?>
