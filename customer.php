<!DOCTYPE HTML>
<html>

<head>
  <title>FeelFins-Customer</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/TableCSSCode.css" />
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
          <li class="current"><a href="customer.php"><b>CUSTOMER</b></a></li>
          <li><a href="reservation.php"><b>RESERVATION</b></a></li>
          <li><a href="session.php"><b>SESSION</b></a></li>
          <li><a href="records.php"><b>RECORDS</b></a></li>
        </ul>
      </nav>
    </header>
    <div id="site_content">
    <br><br><br><br><hr>
      <div id="content">
      <br>
        <h2>Add Customer</h2>
        <p>

<?php
  extract($_POST);
  ob_start();

  require_once 'functions/connection.php';

  if($go){
    extract($_POST);
    $sql = "INSERT INTO 'feelfins' .'customer' (
      'Cust_IDCode',
      'Cust_IDNo',
      'Cust_Lname',
      'Cust_FName',
      'Cust_MName',
      'Cust_Gender',
      'Cust_Type',
      'Cust_BDate',
      'Cust_EAdd',
      'Cust_Street',
      'Cust_City',
      'Cust_Brgy',
      'Cust_Region',
      'Cust_ZipCode',
      'Cust_ContactNo'
      )
      VALUES (NULL,'$Cust_Lname','$Cust_FName','$Cust_MName','$Cust_Gender','$Cust_Type','$Cust_BDate','$Cust_EAdd',
      '$Cust_Street','$Cust_City','$Cust_Brgy','$Cust_Region','$Cust_ZipCode','$Cust_ContactNo')";

      $dbc->query($sql);
      
      }

  if ($back) header("location:records.php");
  ?>
        <form method="POST" action="customer.php">
        <table class="table1">
			<tr>
				<td>Last name:</td>
				<td><input type="text" name="Cust_Lname" id="lname"/></td>
				<td>Given name:</td>
				<td><input type="text" name="Cust_FName" id="fname"/></td>
				<td>Middle Name:</td>
				<td><input type="text" name="Cust_MName" id="mname" /></td>
			</tr>
			<tr>
				<td>Gender(M/F):</td>
				<td><input type="text" name="Cust_Gender" id="gender"/></td>
				<td>Type (Member/Regular):</td>
				<td><input type="text" name="Cust_Type" id="type"/></td>
				<td>Contact No:</td>
				<td><input type="text" name="Cust_ContactNo" id="contno"/></td>
			</tr>
      <tr>
        <td>Birthdate:</td>
        <td><input type="text" name="Cust_BDate" id="bdate"/></td>
        <td>E-mail Address:</td>
        <td><input type="text" name="Cust_EAdd" id="eadd"/></td>
        <td>Street:</td>
        <td><input type="text" name="Cust_Street" id="street" /></td>
      </tr>
      <tr>
        <td>City:</td>
        <td><input type="text" name="Cust_City" id="city"/></td>
        <td>Barangay:</td>
        <td><input type="text" name="Cust_Brgy" id="brgy"/></td>
        <td>Zip Code:</td>
        <td><input type="text" name="Cust_ZipCode" id="zipcode"/></td>
      </tr>
      <tr>
        <td>Region:</td>
        <td><input type="text" name="Cust_Region" id="region"/></td>
      </tr>
		</table>
    <br><br> 
		<input class="btn" name="go" type="submit"></button>

        </p>
      </div>
    </div>
   <br><hr>
   <br>
   <div id="content">
      <br>
       
        </p>
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
