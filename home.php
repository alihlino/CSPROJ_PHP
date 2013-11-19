<!DOCTYPE HTML>
<html>

<head>
  <title>FeelFins-Home</title>
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
          <li class="current"><a href="home.php"><b>HOME</b></a></li>
          <li><a href="customer.php"><b>CUSTOMER</b></a></li>
          <li><a href="reservation.php"><b>RESERVATION</b></a></li>
          <li><a href="session.php"><b>SESSION</b></a></li>
          <li><a href="records.php"><b>RECORDS</b></a></li>
        </ul>
      </nav>
    </header>
    <div id="site_content">
      <br><br><br><br>
      <hr>
      <div id="content">
      <center><h1>Welcome to FeelFins Management System</h1></center>
        <p>
        <center>
        <table class="table1">
			<tr>
				<td><a href="home.php"><img src="images/home.png"></img></a></td>
				<td>Home</td>
				<td><a href="records.php"><img src="images/records.png"></img></a></td>
				<td>View Records</td>
				<td><a href="records.php"><img src="images/reservation.png"></img></a></td>
				<td>View Reservation</td>
			</tr>
			<tr>
				<td><a href="records.php"><img src="images/customer.png"></img></a></td>
				<td>View Customer</td>
				<td><a href="customer.php"><img src="images/newCustomer.png"></img></a></td>
				<td>Add Customer</td>
				<td><a href="session.php"><img src="images/newSession.png"></a></img></td>
				<td>New Session</td>
			</tr>
		</table>
		</center>
        </p>
        
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
