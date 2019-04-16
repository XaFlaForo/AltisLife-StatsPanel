<!--
 * Author: XaFlaForo
 * Copyright: © XaFlaForo Studios, 2019
 * Website: xaflaforo.co.uk
 * Rights: All Rights Reserved
 * Notice: You're not allowed to use this file without permission from the author!
 *
 * Filename: displayStats.php
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

<!DOCTYPE html>
<html>
<body>
<?php

$SteamID = $_SESSION['steamid'];

//--- Establish Connection
$establish_connection = new mysqli($databaseconfig['ip'], $databaseconfig['user'], $databaseconfig['pass'], $databaseconfig['dbname']);

//--- Get Results
$players_result = "SELECT * FROM players WHERE pid = '$SteamID'";
$wanted_result = "SELECT * FROM wanted WHERE wantedID = '$SteamID'";
$house_result = "SELECT * FROM houses WHERE pid = '$SteamID'";
$vehicle_result = "SELECT * FROM vehicles WHERE pid = '$SteamID'";
$gang_result = "SELECT * FROM gangs WHERE $SteamID IN (members) ";

//--- Define Results
$players_result_details = $establish_connection->query($players_result );
$wanted_result_details = $establish_connection->query($wanted_result);
$house_result_details = $establish_connection->query($house_result);
$vehicle_result_details = $establish_connection->query($vehicle_result);
$gangs_result_details = $establish_connection->query($gang_result);

//--- Finalise Results
if( $players_result_finalised = $players_result_details -> fetch_assoc() )
{
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
      $players_result_details->free();
}
if($wanted_result_finalised = $wanted_result_details->fetch_assoc())
{

      $XaFlaForo_Wanted_ID = $wanted_result_finalised["wantedID"];
      $XaFlaForo_Wanted_Name = $wanted_result_finalised["wantedName"];
      $XaFlaForo_Wanted_Bounty = $wanted_result_finalised["wantedBounty"];
      $XaFlaForo_Wanted_Crimes = $wanted_result_finalised["wantedCrimes"];
	  $XaFlaForo_Wanted_Active = $wanted_result_finalised["active"];
      $XaFlaForo_Wanted_time = $wanted_result_finalised["insert_time"];
      $wanted_result_details->free();

}
if($house_result_finalised = $house_result_details->fetch_assoc())
{

      $XaFlaForo_House_ID = $house_result_finalised["id"];
      $XaFlaForo_House_PID = $house_result_finalised["pid"];
      $XaFlaForo_House_POS = $house_result_finalised["pos"];
      $XaFlaForo_House_Owned = $house_result_finalised["owned"];
      $XaFlaForo_House_hasGarage = $house_result_finalised["garage"];
      $XaFlaForo_House_insert_time = $house_result_finalised["insert_time"];
      $house_result_details->free();
}
/*
if($gangs_result_finalised = $gangs_result_details->fetch_assoc())
{

      $XaFlaForo_Gangs_ID = $gangs_result_finalised["id"];
      $XaFlaForo_House_POS->free();
}
*/
$XaFlaForo_House_hasGarage = $house_result_finalised["garage"];
if ($XaFlaForo_House_hasGarage == 1) {
  $XaFlaForo_House_hasGarage = "Yes";
}
else
{
  $XaFlaForo_House_hasGarage = "No";
}

//--- Convert INT to STRING for Cop Level
$XaFlaForo_Player_coplevel = $players_result_finalised["coplevel"];
switch ($XaFlaForo_Player_coplevel)
{
  case 0:
    $XaFlaForo_Player_coplevel = "Not Whitelisted";
    break;
  case 1:
    $XaFlaForo_Player_coplevel = "PCSO";
    break;
  case 2:
    $XaFlaForo_Player_coplevel = "PC";
    break;
  case 3:
    $XaFlaForo_Player_coplevel = "SPC";
    break;
  case 4:
    $XaFlaForo_Player_coplevel = "SGT";
    break;
  case 5:
    $XaFlaForo_Player_coplevel = "INSP";
    break;
  case 6:
    $XaFlaForo_Player_coplevel = "C/INSP";
}

//--- Convert INT to STRING for Medic Level
$XaFlaForo_Player_mediclevel = $players_result_finalised["mediclevel"];
switch ($XaFlaForo_Player_mediclevel)
{
  case 0:
    $XaFlaForo_Player_mediclevel = "Not Whitelisted";
    break;
  case 1:
    $XaFlaForo_Player_mediclevel = "Field Medic";
    break;
  case 2:
    $XaFlaForo_Player_mediclevel = "War Medic";
    break;
  case 3:
    $XaFlaForo_Player_mediclevel = "War Medic";
    break;
  case 4:
    $XaFlaForo_Player_mediclevel = "War Medic";
    break;
  case 5:
    $XaFlaForo_Player_mediclevel = "War Medic";
    break;
  case  6:
    $XaFlaForo_Player_mediclevel = "War Medic";
}



//$establish_connection->close();
?>

  </body>
</html>
