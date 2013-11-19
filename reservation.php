<!DOCTYPE HTML>
<html>

<head>
  <title>FeelFins-Reservation</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">
    <header>
      <div id="logo"><h1><a href="#"><img src="images/logo.png"></img></a></h1></div>
      <nav>
        <ul class="lavaLampWithImage" id="lava_menu">
          <li><a href="home.php"><b>HOME</b></a></li>
          <li><a href="customer.php"><b>CUSTOMER</b></a></li>
          <li class="current"><a href="reservation.php"><b>RESERVATION</b></a></li>
          <li><a href="session.php"><b>SESSION</b></a></li>
          <li><a href="records.php"><b>RECORDS</b></a></li>
        </ul>
      </nav>
    </header>
    <div id="site_content">
     <br><br><br><br><hr>
      <div id="content">
        <br><h2>Reservation</h2>
      </div>
    </div>
  </div>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="js/jquery.lavalamp.min.js"></script>
  <script type="text/javascript" src="js/image_fade.js"></script>
  <script type="text/javascript">
    $(function() {
      $("#lava_menu").lavaLamp({
        fx: "backout",
        speed: 700
      });
    });
  </script>
</body>
</html>
