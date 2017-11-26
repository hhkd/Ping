<html>
<head>
	<title>Welcome to EIU</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
	<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/tan.PNG');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div class="fl_left">
        <ul class="nospace inline pushright">
          <li><i class="fa fa-phone"></i> (+84.650)222 0341</li>
          <li><i class="fa fa-envelope-o"></i> info@eiu.edu.vn</li>
        </ul>
      </div>
      <div class="fl_right">
        <ul class="faico clear">
          <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a class="faicon-pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
          <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
          <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>
        </ul>
      </div>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.html">EASTERN INTERNATIONAL UNIVERSITY</a></h1>
      </div>
      <div id="quickinfo" class="fl_right">
        <ul class="nospace inline">
          <li><strong>Phone:</strong><br>
            (+84.650)222 0341</li>
          <li><strong>Fax:</strong><br>
          (+84.650) 222 0313</li>
        </ul>
      </div>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article class="introtxt">
      <h2 class="heading">Welcome to EIU E-Learning</h2>
      <p>We proudly serve the community.</p>
      <footer><a class="btn" href="http://localhost:4200/login">Back Home Page</a></footer>
    </article>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<div class="wrapper row3">
  <section id="introblocks" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <h4 class="heading">Your Information</h4>
	<?php
 //------Connect data
  $servername = "localhost";
  $username = "root";
  $password = "vertrigo";
  $dbname = "hackathon";
  //------
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  //
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }




// get from EIU
include("simple_html_dom.php");
//------get from browser ---
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://"; 
$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
//echo $url;
//------ end get from browser-------
// ---- get MSSV from URL ------
$mssv = explode("=", $url);
/// ---- end get MSSV ---
$eiu = "http://aao.eiu.edu.vn:8086/Default.aspx?page=xemlichthi&id=";
$full_link = $eiu.$mssv[1];
$t=time();
//echo $t;
//echo $mssv[2];
$html = file_get_html($full_link);
// end get from EIU
$table = $html->find('table', 4);
echo $table;
// $sql = "REPLACE INTO log_time (ID, username2, timelogin) VALUES ('$mssv[1]', '$mssv[2]', FROM_UNIXTIME($t))";

//   if (mysqli_query($conn, $sql)) {
//    // echo "New record created successfully";
//   } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//   }

//$sql.= "DELETE n1 FROM log n1, log n2 WHERE n1.timelogin < n2.timelogin AND n1.ID = n2.ID AND n1.username2 = n2.username2";




  mysqli_close($conn);

?>
    <!-- ################################################################################################ -->
    
  </section>
</div>
<div class="footer">
  <p><b>Ping Team</b></p><p>
  Copyright © 2017. All right reserved</p>
<p></p>
</div>
</body>

</html>