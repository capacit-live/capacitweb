<!DOCTYPE html>
<html lang="zxx">

<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://ngp39vpst8.execute-api.us-east-1.amazonaws.com/beta/-map",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "tokenHeader: allow"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
?>


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Map Page</title>
    <meta charset="UTF-8">
    <meta name="description" content="Map/Data Distplay UI">
    <meta name="keywords" content="capacit, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="img/faviconround.png" rel="shortcut icon" />

    <!-- Google font -->
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/slicknav.min.css" />

    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="css/style.css" />


    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header section -->
    <header class="header-section clearfix">
        <a href="index.html" class="site-logo">
            <img src="img/logo_withGT.png  " alt="">
        </a>
        <ul class="main-menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="map.html" style="color: #9fa07a;">Map Demo</a></li>
            <!-- <li><a href="map.html">Try Capacit</a>
				<ul class="sub-menu">
					<li><a href="category.html">Category</a></li>
					<li><a href="playlist.html">Playlist</a></li>
					<li><a href="artist.html">Artist</a></li>
					<li><a href="blog.html">Blog</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul> -->
            </li>
        </ul>
    </header>
    <!-- Header section end -->

    

    <!-- Body section -->
    <div class="map-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 p-0">
                <!-- Maps Section begin-->
                    <div id="map">
                        <script src="map.js"></script>
                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAs6BrQhzVWRXXmoUOF7r8x6aefbPBBKqQ&callback=initMap" async defer></script>

                    </div>
                <!-- Maps Section End -->
                </div>
                
                <div class="col-lg-8 p-0">
                <!-- Data Tabs Section Start-->
                    <div class="right-side">
                        <div class="tabs">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <a class="nav-link active" id="dining-tab" data-toggle="tab" href="#home" role="tab" aria-controls="dining" aria-selected="true">Dining</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <a class="nav-link" id="study-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="study" aria-selected="false">Study Spots</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <a class="nav-link" id="makers-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="makers" aria-selected="false">Maker's Spaces</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="rec-tab" data-toggle="tab" href="#rec" role="tab" aria-controls="rec" aria-selected="false">Recreation</a>
                                  </li>
                              </ul>
                              <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="dining-tab">
                                    
                                    <table class="table table-hover">
                                        <thead>
                                          <tr>
                                            <th>Building</th>
                                            <th>Live Occupancy</th>
                                            <th></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr bgcolor="#fff2cc">
                                            <td style="padding-bottom: 20px;">North Ave Dining Hall</td>
                                            <td>
                                                
                                            <?php
                                                 
                                                 print 'Hello Worldss';
                                             ?>
                                            </td>
                                            <td></td>
                                          </tr>
                                          <tr bgcolor="#fff2cc" style="border-top: 1.5px solid #f5f5f0">
                                            <td style="padding-bottom: 20px;">Brittain Dining Hall </td>
                                            <td>80%</td>
                                            <td></td>
                                          </tr>
                                          <tr bgcolor="#d9ead3" style="border-top: 1.5px solid #f5f5f0">
                                            <td>West Village</td>
                                            <td>26%</td>
                                            <td>
                                                <div class="container">
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                          By Floor
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                          <a class="dropdown-item" href="#">1st Floor</a>
                                                          <a class="dropdown-item" href="#">2nd Floor</a>
                                                          <a class="dropdown-item" href="#">3rd Floor</a>
                                                        </div>
                                                      </div>
                                                </div>

                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>


                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="study-tab">
                                    <table class="table table-hover">
                                        <thead>
                                          <tr>
                                            <th>Building</th>
                                            <th>Live Occupancy</th>
                                            <th></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr bgcolor="#fff2cc" style="border-top: 1.5px solid #f5f5f0">
                                            <td>Crosland Tower</td>
                                            <td>80%</td>
                                            <td>
                                                <div class="container">
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                          By Floor
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                          <a class="dropdown-item" href="#">1st Floor</a>
                                                          <a class="dropdown-item" href="#">2nd Floor</a>
                                                          <a class="dropdown-item" href="#">3rd Floor</a>
                                                        </div>
                                                      </div>
                                                </div>

                                            </td>
                                          </tr>
                                          <tr bgcolor="#d9ead3" style="border-top: 1.5px solid #f5f5f0">
                                            <td>Clough Commons</td>
                                            <td>40%</td>
                                            <td>
                                                <div class="container">
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                          By Floor
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                          <a class="dropdown-item" href="#">1st Floor</a>
                                                          <a class="dropdown-item" href="#">2nd Floor</a>
                                                          <a class="dropdown-item" href="#">3rd Floor</a>
                                                        </div>
                                                      </div>
                                                </div>

                                            </td>
                                          </tr>
                                          <tr bgcolor="#d9ead3" style="border-top: 1.5px solid #f5f5f0">
                                            <td style="padding-bottom: 20px;">Kendeda</td>
                                            <td>60%</td>
                                            <td></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="makers-tab">
                                    <table class="table table-hover">
                                        <thead>
                                          <tr>
                                            <th>Building</th>
                                            <th>Live Occupancy</th>
                                            <th></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr bgcolor="#d9ead3">
                                            <td style="padding-bottom: 20px;">The Hive</td>
                                            <td>10%</td>
                                            <td></td>
                                          </tr>
                                          <tr bgcolor="#d9ead3" style="border-top: 1.5px solid #f5f5f0">
                                            <td style="padding-bottom: 20px;">Invention Studio</td>
                                            <td>10%</td>
                                            <td></td>
                                          </tr>
                                          <tr bgcolor="#d9ead3" style="border-top: 1.5px solid #f5f5f0">
                                            <td>The MILL</td>
                                            <td>10%</td>
                                            <td>
                                                <div class="container">
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                          By Floor
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                          <a class="dropdown-item" href="#">1st Floor</a>
                                                          <a class="dropdown-item" href="#">2nd Floor</a>
                                                          <a class="dropdown-item" href="#">3rd Floor</a>
                                                        </div>
                                                      </div>
                                                </div>

                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                </div>
                                <div class="tab-pane fade" id="rec" role="tabpanel" aria-labelledby="rec-tab">
                                    <table class="table table-hover">
                                        <thead>
                                          <tr>
                                            <th>Building</th>
                                            <th>Live Occupancy</th>
                                            <th></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr bgcolor="#d9ead3">
                                            <td>CRC</td>
                                            <td>10%</td>
                                            <td>
                                                <div class="container">
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                          By Floor
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                          <a class="dropdown-item" href="#">1st Floor</a>
                                                          <a class="dropdown-item" href="#">2nd Floor</a>
                                                          <a class="dropdown-item" href="#">3rd Floor</a>
                                                        </div>
                                                      </div>
                                                </div>

                                            </td>
                                          </tr>
                                          <tr bgcolor="#d9ead3" style="border-top: 1.5px solid #f5f5f0">
                                            <td>North Ave Gym</td>
                                            <td>10%</td>
                                            <td>
                                                <div class="container">
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                          By Floor
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                          <a class="dropdown-item" href="#">1st Floor</a>
                                                          <a class="dropdown-item" href="#">2nd Floor</a>
                                                          <a class="dropdown-item" href="#">3rd Floor</a>
                                                        </div>
                                                      </div>
                                                </div>

                                            </td>
                                          </tr>
                                          <tr bgcolor="#d9ead3" style="border-top: 1.5px solid #f5f5f0">
                                            <td style="padding-bottom: 20px;">Connector Gym</td>
                                            <td>10%</td>
                                            <td></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                </div>
                              </div>
                        </div>

                    </div>


                    <!-- Tabs Section End-->
                    <p style="font-size: 10px;"> *Disclaimer: This is example data.</p>
                </div>
        </div>

    </div>

    </div>


    </div>

    <!-- Javascript Import stuff -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
    
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
<!-- Body section end -->

<!-- Footer section 
	<footer class="footer-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-7 order-lg-2">
					<div class="row">
						<div class="col-sm-4">
							<div class="footer-widget">
								<h2>About us</h2>
								<ul>
									<li><a href="">Our Story</a></li>
									<li><a href="">Sol Music Blog</a></li>
									<li><a href="">History</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="footer-widget">
								<h2>Products</h2>
								<ul>
									<li><a href="">Music</a></li>
									<li><a href="">Subscription</a></li>
									<li><a href="">Custom Music</a></li>
									<li><a href="">Footage</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="footer-widget">
							</div>
						</div>
					</div>
				</div>
                -->
<div class="col-xl-6 col-lg-5 order-lg-1">
  <address>Contact us at: <a href="mailto:capacit.live@gmail.com">capacit.live@gmail.com</a></address>
    <p style="font-size: 15px; color:0a183d;">copyright <img src="img/montdemo.png" alt="" height="20px"
            style="padding-bottom: 2px;"> 2020</p>

    <div class="social-links">
        <a href=""><i class="fa fa-instagram"></i></a>
        <a href=""><i class="fa fa-facebook"></i></a>
        <a href=""><i class="fa fa-twitter"></i></a>
    </div>
</div>
</div>
</div>
</footer>
<!-- Footer section end -->

<!--====== Javascripts & Jquery ======-->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.slicknav.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/main.js"></script>

</body>

</html>