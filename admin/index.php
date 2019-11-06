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
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
      #right-panel {
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }

      #right-panel select, #right-panel input {
        font-size: 15px;
      }

      #right-panel select {
        width: 100%;
      }

      #right-panel i {
        font-size: 12px;
      }
      #right-panel {
        height: 100%;
        float: right;
        width: 390px;
        overflow: auto;
      }
      #map {
        margin-right: 400px;
      }
      #floating-panel {
        position: absolute;
        background: #fff;
        padding: 5px;
        font-size: 14px;
        font-family: Arial;
        border: 1px solid #ccc;
        box-shadow: 0 2px 2px rgba(33, 33, 33, 0.4);
        display: none;
      }
      @media print {
        #map {
          height: 500px;
          margin: 0;
        }
        #right-panel {
          float: none;
          width: auto;
        }
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
        <!-- header area end -->
    <div id="floating-panel" >
    <strong>Start:</strong>
    <select id="start">
      <option value="-7.276595,112.7916688">Politeknik Elektronika Negeri Surabaya</option>
      <option value="-7.4464936,112.7143246">Lapas Kelas IIA Sidoarjo</option>
      <option value="-7.3530947,112.7113467">Rumah Tahanan Kelas I (Medaeng) Surabaya</option>
      <option value="-7.2339242,112.73448">Penjara Kalisosok</option>
      <option value="-7.5494424,112.669167">Penjara Kelas IC Porong</option> 
     
    </select>
    
    <strong>End:</strong>
    <select id="end">
      <option value="-7.276595,112.7916688">Politeknik Elektronika Negeri Surabaya</option>
      <option value="-7.4464936,112.7143246">Lapas Kelas IIA Sidoarjo</option>
      <option value="-7.3530947,112.7113467">Penjara Kelas I Medaeng, Surabaya</option>
      <option value="-7.2339242,112.73448">Penjara Kalisosok</option>
      <option value="-7.5494424,112.669167">Penjara Kelas IC Porong</option>
    </select>
    </div> 
    <div id="right-panel"></div>
    <div id="map"></div>
    <footer>
            <div class="footer-area">
                <p>© Copyright 2019. All right reserved. Politeknik Elektronika Negeri Surabaya</a>.</p>
            </div>
        </footer>
    <script>
      function initMap() {
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var directionsService = new google.maps.DirectionsService;
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: {lat: -7.276595, lng: 112.7916688}
        });
        directionsDisplay.setMap(map);
        directionsDisplay.setPanel(document.getElementById('right-panel'));

        var control = document.getElementById('floating-panel');
        control.style.display = 'block';
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(control);

        var onChangeHandler = function() {
          calculateAndDisplayRoute(directionsService, directionsDisplay);
        };
        document.getElementById('start').addEventListener('change', onChangeHandler);
        document.getElementById('end').addEventListener('change', onChangeHandler);
      }

      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        var start = document.getElementById('start').value;
        var end = document.getElementById('end').value;
        directionsService.route({
          origin: start,
          destination: end,
          travelMode: 'DRIVING',
          avoidTolls:true
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBfJ6iiJY5pN-_8mJhHe6gqoEyCui-KYA8&callback=initMap">
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