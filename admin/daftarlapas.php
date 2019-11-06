<?php
  session_start();

  if(!isset($_SESSION['status'])){
    header("location: ../index.php?pesan=belum_login");
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Police Monitoring System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <title>Directions Service</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 70%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
     <div id="preloader">
        <div class="loader"></div>
    </div>
     <!-- main header area start -->
        <div class="mainheader-area">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.html"><img src="assets/images/icon/dashboard2.png" alt="logo"></a>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-9 clearfix text-right">
                        <div class="clearfix d-md-inline-block d-block">
                            <div class="user-profile m-0">
                                <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                                <h4 class="user-name dropdown-toggle" data-toggle="dropdown">ADMIN<i class="fa fa-angle-down"></i></h4>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Settings</a>
                                    <a class="dropdown-item" href="logout.php">Log Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- main header area end -->
        <!-- header area start -->
        <div class="header-area header-bottom">
                <div class="row align-items-center">
                    <div class="col-lg-9  d-none d-lg-block">
                        <div class="horizontal-menu">
                            <nav>
                                <ul id="nav_menu">
                                    <li>
                                        <a href="javascript:void(0)"><a href="index.php"><i class="ti-dashboard"></i><span>Pendefinisian Rute</span></a>
                                    </li>
                                    <li>
                                        <a href="maps.php"><i class="ti-map-alt"></i> <span>Tracking Kendaraan</span></a></li>
                                    <li>
                                        <a href="foto.php">
                                        <i class="fa fa-eye"></i><span>Foto Tahanan</span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><a href="daftarlapas.php"><i class="fa fa-map"></i><span>Daftar Lapas</span></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
        </div>
        <div id="map"></div>
        <!-- header area end -->
    <footer>
            <div class="footer-area">
                <p>© Copyright 2019. All right reserved. Politeknik Elektronika Negeri Surabaya</a>.</p>
            </div>
    </footer>
    <script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var tengah = {lat: -7.276595, lng: 112.7916688};
  var a = {lat: -7.4464936, lng: 112.7143246};
  var b = {lat: -7.3530947, lng: 112.7113467};
  var c = {lat: -7.2339242, lng: 112.73448};
  var d = {lat: -7.5494424, lng: 112.669167};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 10, center: tengah});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: tengah, map: map});
  var markera = new google.maps.Marker({position: a, map: map});
  var markerb = new google.maps.Marker({position: b, map: map});
  var markerc = new google.maps.Marker({position: c, map: map});
  var markerd = new google.maps.Marker({position: d, map: map});
} 
  </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBfJ6iiJY5pN-_8mJhHe6gqoEyCui-KYA8&callback=initMap">
    </script>
    <!-- maps js -->
    <script src="assets/js/maps.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
    </div>
    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <!-- all map chart -->
    <script src="assets/js/maps.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
  </body>
</html>