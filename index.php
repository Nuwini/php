<?php
include 'model/config.php';

$sql = "SELECT * FROM info";

$result = mysqli_query($connect, $sql);

                if (!$result) {
                    echo "Error";
                    die();
				}
				
                $record = mysqli_fetch_assoc($result);


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<title>PET SHOP</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" id="stylesheet" href="view/layout/styles/theme-default.css"/>
<script type="text/javascript" src="view/layout/scripts/jquery.mCustomScrollbar.min.js"></script>
<script type="text/javascript" src="view/layout/settings.js"></script>

<link rel="stylesheet"  href="view/layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="view/layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="view/layout/scripts/jquery-s3slider.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$("#featured_slide_").s3Slider({
		timeOut:10000
	});
});
</script>

</head>
<body id="top">
<script type="text/javascript" src="view/layout/scripts/jquery.mCustomScrollbar.min.js"></script>
<script type="text/javascript" src="view/layout/settings.js"></script>
<div class="wrapper row1">
  <div id="topnav">
    <ul>
      <li class="active"><a href="index.php"><strong>Home</strong></a></li>
      <li><a href="view/pages/pets.php"><strong>Pets</strong></a></li>
      <li><a href="view/pages/purchase.php"><strong>Purchase</strong></a></li>
      <li><a href="view/pages/sell.php"><strong>Sell</strong></a></li>
      <li><a href="view/pages/community.php"><strong>Community</strong></a></li>
	  </ul>
  </div>
</div>
<div class="wrapper row2">
  <div id="header" class="clear">
    <div class="img">
      <h1><a href="index.php"><img src="view/images/general/logo.png"/></a></h1>
          </div>
    <div class="fl_right">
      <form action="view/pages/normalSearch.php" method="post" id="sitesearch">
        <fieldset>
          <legend>Site Search</legend>
          <input type="text" name="searchText" />
          <input type="image" src="view/images/demo/search.gif" id="search" alt="Search" />
        </fieldset>
      </form>
      <p><a href="view/pages/advanceSearch.php">advance-search</a></p>
      <p><a href="view/pages/sitemap.php">Site Map</a> | <a href="view/pages/login_index.php">Login</a></p>
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div id="featured_slide_">
    <ul id="featured_slide_Content">
      <li class="featured_slide_Image"><a href="#"><?php echo '<img width="20%" alt="avatar" src="./view/images/general/' . $record['image1'] . '"/>' ?></a>
        <div class="introtext">
          <h2>Vision</h2>
          <p><?php echo $record['vision']; ?></p>
        </div>
      </li>
      <li class="featured_slide_Image"><a href="#"><?php echo '<img width="20%"  alt="avatar" src="./view/images/general/' . $record['image2'] . '"/>' ?></a>
        <div class="introtext">
          <h2>Mission</h2>
          <p><?php echo $record['mission']?></p>
        </div>
      </li>
      <li class="featured_slide_Image"><a href="#"><?php echo '<img width="20%" alt="avatar" src="./view/images/general/' . $record['image3'] . '"/>' ?></a>
        <div class="introtext">
          <h2>Message from the Director</h2>
          <p><?php echo $record['owner mg']; ?></p>
        </div>
      </li>
      <li class="clear featured_slide_Image"></li>
    </ul>
  </div>
  <!--<div id="hpage_featured_info" class="clear">
    <ul>
      <li><a href="view/pages/undergraduate_studies.php"><img src="view/images/general/undergraduate_programmes.jpg" alt="" /> <strong>Undergraduate Programmes</strong></a></li>
      <li><a href="view/pages/postgraduate_studies.php"><img src="view/images/general/postgraduate_programmes.jpg" alt="" /> <strong>Postgraduate Programmes</strong></a></li>
      <li class="last"><a href="view/pages/FIT.php"><img src="view/images/general/external.jpg" alt="" /> <strong>External and Online Programmes</strong></a></li>
    </ul>
  </div>-->
</div>
<div class="wrapper row5">
  <div id="container" class="clear">
    <!-- ####################################################################################################### -->
    <div id="homepage" class="clear">
      <!--<div class="fl_left">
        <ul id="hpage_latestnews">
          <li class="odd clear">
            <div class="imgholder"><img src="view/images/general/faq.png" alt="" /></div>
            <a href="view/pages/faq.php">Frequently Asked Questions</a>
            <p></p>
          </li>
          <li class="even clear">
            <div class="imgholder"><img src="view/images/general/location.png" alt="" /></div>
            <a href="#">Research</a>
            <p></p>
          </li>
          <li class="odd clear">
            <div class="imgholder"><img src="view/images/general/uoc.png" alt="" /></div>
            <a href="http://www.cmb.ac.lk/">University of Colombo</a>
            <p></p>
          </li>
          <li class="even clear">
            <div class="imgholder"><img src="view/images/general/calendar.png" alt="" /></div>
            <a href="#">Academic Calendar</a>
            <p></p>
          </li>
          <li class="odd clear">
            <div class="imgholder"><img src="view/images/general/wiki.png" alt="" /></div>
            <a href="view/pages/resources.php">Resources</a>
            <p></p>
          </li>
          <li class="even clear">
            <div class="imgholder"><img src="view/images/general/tv.png" alt="" /></div>
            <a href="#">UCSC TV</a>
            <p></p>
          </li>
        </ul>
      </div>-->
      <!--<div class="fl_right">
        <h2></h2>
        <img src="view/images/general/virtual.png" alt="" />
        <p></p>
        <p class="readmore"><a href="#">Virtual Tour &raquo;</a></p>
      </div>-->
    </div>
    <!-- ####################################################################################################### -->
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <!--<div id="academiclinks" class="clear">
    <div class="linkbox">
      <h2>Degrees</h2>
      <ul>
        <li><a href="#">&raquo; Undergraduate Progammes</a></li>
        <li><a href="#">&raquo; Postgraduate progammes</a></li>
        <li><a href="#">&raquo; Research Degrees</a></li>
        <li><a href="view/pages/BIT.php">&raquo; External Degrees</a></li>
        <li><a href="#">&raquo; Online Programmes</a></li>
      </ul>
    </div>
    <div class="linkbox">
      <h2>Management</h2>
      <ul>
        <li><a href="#">&raquo; Academic & Publication</a></li>
        <li><a href="#">&raquo; Establishments & Administration </a></li>
        <li><a href="#">&raquo; Examination and Registraton</a></li>
        <li><a href="#">&raquo; Engineering Division</a></li>
        <li><a href="#">&raquo; Finance Division</a></li>
        <li><a href="#">&raquo; Information Systems(NOC)</a></li>
        <li><a href="#">&raquo; Strategic Plan</a></li>
      </ul>
    </div>
    <div class="linkbox">
      <h2>UCSC Centres</h2>

	  <?php
	  if (mysqli_num_rows($result1) > 0) {

    while($row = mysqli_fetch_assoc($result1)) {

		echo "<ul>";
        echo "<li><a href='view/pages/centers.php'>".$row["center_name"]."</a></li><br>";
		echo "</ul>";
	}
}
	  ?>
      </div>
    <div class="linkbox last">
      <h2>Departments</h2>
      <?php
	  if (mysqli_num_rows($result2) > 0) {

    while($row = mysqli_fetch_assoc($result2)) {

		echo "<ul>";
        echo "<li><a href='view/pages/departments.php'>".$row["dep_name"]."</a></li><br>";
		echo "</ul>";
	}
}
	  ?>
    </div>
  </div>-->
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="footer" class="clear">
    <!-- ####################################################################################################### -->
    <div class="fl_left clear">
      <div class="fl_left center"><img src="view/images/general/google.png" alt="" /><br />
        <a href="#">Find Us With Google Maps &raquo;</a></div>
      <address>
      15<br />
      Railway Avenue<br />
      Colombo 07<br />
      SRI LANKA<br />
      <br />
      Tel: +94 -11- 2581245/ 7<br />
      Fax: +94 -11- 2587239<br />
      Email: <a href="#">info@petshop.lk</a>
      </address>
    </div>
    <div class="fl_right">
      <div id="social" class="clear">
        <p>Stay Up to Date With Whats Happening</p>
        <ul>
          <li><a style="background-position:0 0;" href="#">Twitter</a></li>
          <li><a style="background-position:-72px 0;" href="#">LinkedIn</a></li>
          <li><a style="background-position:-142px 0;" href="#">Facebook</a></li>
          <li><a style="background-position:-212px 0;" href="#">Flickr</a></li>
          <li><a style="background-position:-282px 0;" href="#">RSS</a></li>
          <li><a style="background-position:-352px 0;" href="#">YouTube</a></li>
        </ul>
      </div>
      <div id="newsletter">
        <form action="#" method="post">
          <fieldset>
            <legend>Subscribe To Our Newsletter:</legend>
            <input type="text" value="Enter Email Here&hellip;" onfocus="this.value=(this.value=='Enter Email Here&hellip;')? '' : this.value ;" />
            <input type="text" id="subscribe" value="Submit" />
          </fieldset>
        </form>
      </div>
    </div>

    <!-- ####################################################################################################### -->
  </div>
</div>

</body>
</html>
