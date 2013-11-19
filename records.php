<!DOCTYPE HTML>
<html>

<head>
  <title>FeelFins-Records</title>
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
          <li><a href="customer.php"><b>CUSTOMER</b></a></li>
          <li><a href="reservation.php"><b>RESERVATION</b></a></li>
          <li><a href="session.php"><b>SESSION</b></a></li>
          <li class="current"><a href="records.php"><b>RECORDS</b></a></li>
        </ul>
      </nav>
    </header>
      <div id="site_content">
    <br><br><br><br><hr>
      <div id="content">
        <br><h2>Records / Reports</h2>
        <br><center><h3>CUSTOMER</h3></center>
        <table class="CSSTableGenerator" style="overflow-y:scroll" id="customer-table">

    <?php
        require_once 'functions/connection.php';
        
        $query = "SELECT * FROM customer";     
        $result= $dbc->query($query);
    ?>    
        <table class="CSSTableGenerator">
        <tr>
        <td>Cust_IDCode</td>
        <td>Cust_IDNo</td>
        <td>Cust_FName</td>
        <td>Cust_MName</td>
        <td>Cust_ContactNo</td>
        <td>Cust_EAdd</td>
        </tr>

      <?php 
          for($a=0; $a<$result->num_rows; $a++)
          {
            $data = $result->fetch_assoc(); 
            extract($data);
    
            echo '<tr>';
            echo '<td>' . $Cust_IDCode . '</td>';
            echo '<td>' . $Cust_IDNo . '</td>';
            echo '<td>' . $Cust_FName . '</td>';
            echo '<td>' . $Cust_MName . '</td>';
            echo '<td>' . $Cust_ContactNo . '</td>';
            echo '<td>' . $Cust_EAdd . '</td>';
            echo '</tr>';
          }
        ?>
      </table>


      <br><center><h3>EQUIPMENT</h3></center>
        <table class="CSSTableGenerator">
    <?php
        require_once 'functions/connection.php';
        
        $query = "SELECT * FROM equipment";     
        $result= $dbc->query($query);
    ?>    
        <table class="CSSTableGenerator">
        <tr>
        <td>Item_Code</td>
        <td>Item_No</td>
        <td>Item_Name</td>
        <td>Item_Color</td>
        <td>Game_Code</td>
        <td>Game_Title</td>
        </tr>

      <?php 
          for($a=0; $a<$result->num_rows; $a++)
          {
            $data = $result->fetch_assoc(); 
            extract($data);
    
            echo '<tr>';
            echo '<td>' . $Item_Code . '</td>';
            echo '<td>' . $Item_No . '</td>';
            echo '<td>' . $Item_Name . '</td>';
            echo '<td>' . $Item_Color . '</td>';
            echo '<td>' . $Game_Code . '</td>';
            echo '<td>' . $Game_Title . '</td>';
            echo '</tr>';
          }

        ?>
      </table>

      <br><center><h3>RESERVATION</h3></center>
        <table class="CSSTableGenerator">
    <?php
        require_once 'functions/connection.php';
        
        $query = "SELECT * FROM reservation_line";     
        $result= $dbc->query($query);
    ?>    
        <table class="CSSTableGenerator">
        <tr>
        <td>Res_Code</td>
        <td>Time_Reserved</td>
        <td>Time_Expired</td>
        <td>Res_Date</td>
        <td>Cust_IDNo</td>
        <td>Emp_IDNo</td>
        </tr>

      <?php 
          for($a=0; $a<$result->num_rows; $a++)
          {
            $data = $result->fetch_assoc(); 
            extract($data);
    
            echo '<tr>';
            echo '<td>' . $Res_Code . '</td>';
            echo '<td>' . $Time_Reserved . '</td>';
            echo '<td>' . $Time_Expired . '</td>';
            echo '<td>' . $Res_Date . '</td>';
            echo '<td>' . $Cust_IDNo . '</td>';
            echo '<td>' . $Emp_IDNo . '</td>';
            echo '</tr>';
          }

        ?>
      </table>

      <br><center><h3>TRANSACTION</h3></center>
        <table class="CSSTableGenerator">
    <?php
        require_once 'functions/connection.php';
        
        $query = "SELECT * FROM transaction_line";     
        $result= $dbc->query($query);
    ?>    
        <table class="CSSTableGenerator">
        <tr>
        <td>Trans_Number</td>
        <td>Rcpt_No</td>
        <td>Cust_IDCode</td>
        <td>Cust_IDNo</td>
        <td>Trans_Date</td>
        <td>Session_Rate</td>
        </tr>

      <?php 
          for($a=0; $a<$result->num_rows; $a++)
          {
            $data = $result->fetch_assoc(); 
            extract($data);
    
            echo '<tr>';
            echo '<td>' . $Trans_Number . '</td>';
            echo '<td>' . $Rcpt_No . '</td>';
            echo '<td>' . $Cust_IDCode . '</td>';
            echo '<td>' . $Cust_IDNo . '</td>';
            echo '<td>' . $Trans_Date . '</td>';
            echo '<td>' . $Session_Rate . '</td>';
            echo '</tr>';
          }

        ?>
      </table>


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