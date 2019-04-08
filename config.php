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
$steamauth['apikey'] = "D26C50C183FE1151ADBBE0191F2F37C4"; // Your Steam WebAPI-Key found at https://steamcommunity.com/dev/apikey
$steamauth['domainname'] = "http://localhost/Portal/";
$steamauth['loginpage'] = "http://localhost/Portal/";

//--- Database Config
$databaseconfig['ip'] = "localhost";
$databaseconfig['user'] = "root";
$databaseconfig['pass'] = "";
$databaseconfig['dbname'] = "altislife";

?>
