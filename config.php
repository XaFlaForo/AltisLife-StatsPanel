<!--
 * Author: XaFlaForo
 * Copyright: © XaFlaForo Studios, 2019
 * Website: xaflaforo.co.uk
 * Rights: All Rights Reserved
 * Notice: You're not allowed to use this file without permission from the author!
 *
 * Filename: config.php
 *
 * Parameter(s): Too many for me to bother to write out
 *
 * Description:
 * Display stats from the database.
 *
 * Dependencies:
 * Apache OR Nginx OR ISS, PHP, MYSQL with connection to a altislife DB
 *
 * Donate:
 * If you would like to donate to recieve products first, technical suppport and no advertising in the products donate below.
 * paypal.me/EthanSolutions
-->
<?php

//--- Steam Login Config
$steamauth['apikey'] = "77A30D5AD95C6D35AC745CC26EAC1A3F"; // Your Steam WebAPI-Key found at https://steamcommunity.com/dev/apikey
$steamauth['domainname'] = "http://localhost/Portal/";
$steamauth['loginpage'] = "http://localhost/Portal/";
$steamauth['logoutpage'] = "http://localhost/Portal/";

//--- Database Config
$databaseconfig['ip'] = "localhost";
$databaseconfig['user'] = "root";
$databaseconfig['pass'] = "";
$databaseconfig['dbname'] = "altislife";

$communityinfo['name'] = "Gaming Down Under";
$communityinfo['currency'] = "£";

?>
