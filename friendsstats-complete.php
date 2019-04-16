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
            <link rel="stylesheet" href="assets/css/Footer-with-button-logo.css">

            <style>
            .sidenav {
              background-color: #272C33;
            }


            </style>

        </head>
        <body class="bg-dark">
    		<?php
          require 'steamauth.php';
          require 'config.php';
          if(isset($_SESSION['steamid']))
          {
              include ('userInfo.php');
          }
          require 'getFriendsStats.php';
        ?>



            <div class="wrapper">
                <!-- Sidebar Holder -->
                <nav id="sidebar">
                    <div class="sidebar-header">
                        <h3><?php echo $communityinfo['name']; ?></h3>
                    </div>

                    <ul class="list-unstyled components">
                        <p>PUBLIC PORTAL</p>

                        <li>
                            <a href="/">Home</a>
                            <ul class="collapse list-unstyled" id="homeSubmenu">
                            </ul>
                        </li>

                        <li class="active">
                            <a href="yourstats.php">Your Stats</a>
                        </li>
                        <li>
                            <a href="#">Friends Stats</a>
                        </li>
                    <ul class="list-unstyled CTAs">
                        <li><a href="https://forum.localhost.com" class="article">Back to forums</a></li>
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
                              <?php    //echo "Welcome back " . $steamprofile['personaname'] . "</br>"; ?>
                                <ul class="nav navbar-nav navbar-right">
                                    <li><?php if(!isset($_SESSION['steamid'])) { loginbutton("rectangle"); } else { logoutbutton(); } ?></li>
                                </ul>
                            </div>
                        </div>
                    </nav>

                    <h2>Welcome to the <?php echo $communityinfo['name']; ?> Public Portal - Friends Stats</h2>
                    <p>Portal is an advanced tool that allows you to see your in-game stats, friends stats, leaderboards, world-stats, check application status on factions and deperatments in your browser. Ensured you are signed in to steam for the site to function propely.</p>

                    <h3>General Information</h3>
                    <div class="line"></div>

                      <table class="table">
                        <thead>
                            <tr>
                              <th scope="col">UID</th>
                              <th scope="col">Name</th>
                              <th scope="col">Cash</th>
                              <th scope="col">Bank Account</th>
                              <th scope="col">Cop Rank</th>
                              <th scope="col">Medic Rank</th>
                              <th scope="col">Join Date</th>
                              <th scope="col">Last Seen</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row"><?php echo $players_result_finalised["uid"]; ?></th>
                              <th scope="row"><?php echo $players_result_finalised["name"]; ?></th>
                              <th scope="row"><?php echo $players_result_finalised["cash"]; ?></th>
                              <th scope="row"><?php echo $players_result_finalised["bankacc"]; ?></th>
                              <th scope="row"><?php echo $XaFlaForo_Player_coplevel ?></th>
                              <th scope="row"><?php echo $XaFlaForo_Player_mediclevel ?></th>
                              <th scope="row"><?php echo $players_result_finalised["insert_time"]; ?></th>
                              <th scope="row"><?php echo $players_result_finalised["last_seen"]; ?></th>
                            </tr>
                          </tbody>
                        </table>



                    <div class="line"></div>

                    <h3>Criminal Record</h3>
                    <div class="line"></div>

                    <table class="table">
                      <thead>
                          <tr>
                            <th scope="col">Wanted ID</th>
                            <th scope="col">Name In Database</th>
                            <th scope="col">Current Bounty</th>
                            <th scope="col">Warrants</th>
                            <th scope="col">Time Of Last Crime Commited</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row"><?php echo $wanted_result_finalised["wantedID"]; ?></th>
                            <th scope="row"><?php echo $wanted_result_finalised["wantedName"]; ?></th>
                            <th scope="row"><?php echo $wanted_result_finalised["wantedBounty"]; ?></th>
                            <th scope="row"><?php echo $wanted_result_finalised["active"]; ?></th>
                            <th scope="row"><?php echo $wanted_result_finalised["insert_time"]; ?></th>



                          </tr>
                        </tbody>
                      </table>


                    <div class="line"></div>

                    <h3>Housing Portfolio</h3>

                    <div class="line"></div>

                    <table class="table">
                      <thead>
                          <tr>
                            <th scope="col">Lease Number</th>
                            <th scope="col">Coordinates </th>
                            <th scope="col">Has Garage</th>
                            <th scope="col">Time Purchased</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row"><?php echo $house_result_finalised["id"]; ?></th>
                            <th scope="row"><?php echo "Classified Information" ?></th>
                            <th scope="row"><?php echo $house_result_finalised["garage"]; ?></th>
                            <th scope="row"><?php echo $house_result_finalised["insert_time"]; ?></th>



                          </tr>
                        </tbody>
                      </table>
                      <div class="line"></div>


                    <br><br><br><br><br><br><br><br><br><br>
                    <br><br><br><br><br>


                  <div class="content">
    </div>
        <footer id="myFooter">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 myCols">
                        <h5><?php echo $communityinfo['name']; ?></h5>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Sign up</a></li>
                            <li><a href="#">Downloads</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3 myCols">
                        <h5>About us</h5
                        <ul>
                            <li><a href="#">Company Information</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Reviews</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3 myCols">
                        <h5>Support</h5>
                        <ul>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Help desk</a></li>
                            <li><a href="#">Forums</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3 myCols">
                        <h5>Legal</h5>
                        <ul>
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="social-networks">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook-official"></i></a>
                <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
            </div>
            <div class="footer-copyright">
                <p> Portal created by XaFlaForo For <?php echo $communityinfo['name']; ?>  </p>
            </div>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
