<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>COA - PUBLIC PORTAL</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="style5.css">
        <!-- Your custom styles (optional) -->
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

		<?php

			require 'steamauth.php';

		?>
		
		<?php
if(!isset($_SESSION['steamid'])) {


    include ('steamauth/userInfo.php');
    //Protected content

    logoutbutton(); //Logout Button
}     
?>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>CALL OF ARMA</h3>
                </div>

                <ul class="list-unstyled components">
                    <p>PUBLIC PORTAL</p>

                    <li class="active">
                        <a href="/Portal">Home</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                        </ul>
                    </li>

                    <li>
                        <a href="#">Your Stats</a>
                    </li>
                    <li>
                        <a href="#">Friends Stats</a>
                    </li>

                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Police</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="#">Handbook</a></li>
                            <li><a href="#">Roster</a></li>
                            <li><a href="#">Page 3</a></li>
                        </ul>
                    </li>

                </ul>

                <ul class="list-unstyled CTAs">
                    <li><a href="https://callofarma.com" class="article">Back to forums</a></li>
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="?login">Sign In With Steam</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <h2>Welcome to the Call Of ArmA Public Portal</h2>
                <p>Portal is an advanced tool that allows you to see your in-game stats, friends stats, leaderboards, world-stats, check application status on factions and deperatments in your browser. Ensured you are signed in to steam for the site to function propely.</p>
   

                <div class="line"></div>


              <br><br><br><br><br><br><br><br><br><br>





        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                     $(this).toggleClass('active');
                 });
             });
         </script>
    </body>
</html>
