<!--
 * Author: XaFlaForo
 * Copyright: © XaFlaForo Studios, 2019
 * Website: xaflaforo.co.uk
 * Rights: All Rights Reserved
 * Notice: You're not allowed to use this file without permission from the author!
 *
 * Filename: displayStats.php
 *
 * Parameter(s): Too Many To Name xD
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

<!DOCTYPE html>
<html>
  <body>

<?php

//--- Ensure Steam Is Authenticated
require 'steamauth.php';

//--- Connection Details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "altislife";

if(!isset($_SESSION['steamid'])) {

      //--- Make Player Login
      loginbutton();
}
else
{

$SteamID = $_SESSION['steamid'];

//--- Establish Connection
$establish_connection = new mysqli($servername, $username, $password, $dbname);

//--- Get Results
$players_result = "SELECT uid, pid, name, cash, bankacc, coplevel, mediclevel, civ_licenses, cop_licenses, med_licenses, adminlevel, donorlevel, playtime, insert_time, last_seen FROM Players WHERE pid = '$SteamID'";

//--- Define Results
$players_result_details = $establish_connection->query($players_result);

//--- Finalise Results
while($players_result_finalised = $players_result_details->fetch_assoc())
{
      echo "id: " . $players_result_finalised["uid"]. " - Name: " . $players_result_finalised["pid"]. " " . $players_result_finalised["name"]. "<br>";

      $XaFlaForo_Player_UID = $players_result_finalised["uid"];
      $XaFlaForo_Player_PID = $players_result_finalised["pid"];
      $XaFlaForo_Player_name = $players_result_finalised["name"];
      $XaFlaForo_Player_cash = $players_result_finalised["cash"];
      $XaFlaForo_Player_bankacc = $players_result_finalised["bankacc"];
      $XaFlaForo_Player_coplevel = $players_result_finalised["coplevel"];
      $XaFlaForo_Player_mediclevel = $players_result_finalised["mediclevel"];
      $XaFlaForo_Player_civ_licenses = $players_result_finalised["civ_licenses"];
      $XaFlaForo_Player_cop_licenses = $players_result_finalised["cop_licenses"];
      $XaFlaForo_Player_med_licenses = $players_result_finalised["med_licenses"];
      $XaFlaForo_Player_adminlevel = $players_result_finalised["adminlevel"];
      $XaFlaForo_Player_playtime = $players_result_finalised["playtime"];
      $XaFlaForo_Player_insert_time = $players_result_finalised["insert_time"];
      $XaFlaForo_Player_last_seen = $players_result_finalised["last_seen"];
}

//--- Convert INT to STRING for Cop Level
switch ($XaFlaForo_Player_coplevel)
{
  case 0:
    $XaFlaForo_Player_coplevel = "Not Whitelisted";
    break;
  case 1:
    $XaFlaForo_Player_coplevel = "Whitelisted";
    break;
  case 2:
    $XaFlaForo_Player_coplevel = "Whitelisted";
    break;
  case 3:
    $XaFlaForo_Player_coplevel = "Whitelisted";
    break;
  case 4:
    $XaFlaForo_Player_coplevel = "Whitelisted";
    break;
  case 5:
    $XaFlaForo_Player_coplevel = "Whitelisted";
    break;
  case  6:
    $XaFlaForo_Player_coplevel = "Whitelisted";
}

//--- Convert INT to STRING for Medic Level
switch ($XaFlaForo_Player_mediclevel)
{
  case 0:
    $XaFlaForo_Player_mediclevel = "Not Whitelisted";
    break;
  case 1:
    $XaFlaForo_Player_mediclevel = "Whitelisted";
    break;
  case 2:
    $XaFlaForo_Player_mediclevel = "Whitelisted";
    break;
  case 3:
    $XaFlaForo_Player_mediclevel = "Whitelisted";
    break;
  case 4:
    $XaFlaForo_Player_mediclevel = "Whitelisted";
    break;
  case 5:
    $XaFlaForo_Player_mediclevel = "Whitelisted";
    break;
  case  6:
    $XaFlaForo_Player_mediclevel = "Whitelisted";
}


}
$establish_connection->close();
?>

  </body>
</html>
