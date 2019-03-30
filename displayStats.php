<!--
 * Author: XaFlaForo
 * Copyright: © XaFlaForo Studios, 2019
 * Website: xaflaforo.co.uk
 * Rights: All Rights Reserved
 * Notice: You're not allowed to use this file without permission from the author!
 *
 * Filename: displayStats.php
 *
 * Parameter(s): NONE
 *
 * Description:
 * Display stats from the database.
 *
 * Dependencies:
 * Apache/Nginx/ISS
 *
 * Donate:
 * If you would like to donate to recieve products first, technical suppport and no advertising in the products donate below.
 * paypal.me/EthanSolutions
-->

<!DOCTYPE html>
<html>
  <body>

<?php

//--- Connection Details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "altislife";

//--- Get Steam ID
$steamprofile['steamid']

//--- Establish Connection
$establish_connection = new mysqli($servername, $username, $password, $dbname);

//--- Get Results
$players_result = "SELECT uid, pid, name, cash, bankacc, coplevel, mediclevel, civ_licenses, cop_licenses, med_licenses, adminlevel, donorlevel, playtime, insert_time, last_seen FROM Players";

//--- Define Results
$players_result_details = $establish_connection->query($players_result);

//--- Finalise Results
while($players_result_finalised = $players_result_details->fetch_assoc())
{
    //  echo "id: " . $players_result_finalised["uid"]. " - Name: " . $players_result_finalised["pid"]. " " . $players_result_finalised["name"]. "<br>";

      $XaFlaForo_Player_UID = $players_result_finalised["uid"];
      echo "id: " . $XaFlaForo_Player_UID ;
}


$establish_connection->close();
?>

  </body>
</html>
