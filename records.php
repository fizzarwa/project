<!doctype html>
<html>
<head>
    <?php
    include "includes/connection.php";

    // print_r($_SESSION);
    ?>
    

<meta charset="utf-8">
<title>College Website</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/ddsmoothmenu.js" type="text/javascript"></script>
<script src="js/contentslider.js" type="text/javascript"></script>
<script type="text/javascript" src="js/menu.js"></script>
<script type="text/javascript" src="js/tabs.js"></script>
</head>
<body>
<div class="bg">
  <div class="wrapper"> 
   <?php
   include "includes/header.php";
   ?>
      <div class="col1 white_bg1">
        <div class="sheading pad">
          <div class="sheadings">
            <h2>Login</h2>
          </div>
         <h1>Form Signup</h1>
            <div class="clear"></div>
            <div class="block2">
              <h5>Our Location</h5>
              <div class="map"><iframe width="692" height="222" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=+&amp;q=pakistan,+182+-+Z,+Iqbal+Colony+Sargodha&amp;ie=UTF8&amp;hq=&amp;hnear=Iqbal+Colony,+Sargodha,+Sargodha+District,+Punjab,+Pakistan&amp;t=m&amp;z=14&amp;iwloc=A&amp;ll=32.094961,72.675177&amp;output=embed"></iframe><br /> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col2 border_none">
        <div class="ads"> <a href="#"><img src="images/ads.gif"  alt="" /></a> </div>
        
        <!--<div class="newsletter">
            <h2>Site NewsLetters</h2>
            <input type="text" value="Enter Email Address" onfocus="if(this.value == 'Enter Email Address') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Enter Email Address'; }"  />
           <input class="submit" type="submit" name="submit" value="Submit">
        </div>-->
        
         
        <?php
        include "includes/sidebar.php";
        ?>
        <!--<div class="sidebar_events">
        	<h4>Campus & Community</h4>
            <img src="images/campus_community.png" title="Campus & Community">
            <div class="heading">Lorem ipsum dolor sit amet,</div>
            <div class="clear"></div>
            <div class="des">Lorem ipsum dolor sit amet, consectetur
adipiscing elit adipiscing elit. Lorem ipsu
dolor sit amet, consectetur۔ Lorem ipsum dolor sit amet, consectetur
adipiscing elit adipiscing elit.</div>
        </div>--> 
      </div>
    </div>
    <div class="clear"></div>
<?php
include "includes/footer.php";
?>
  </div>
</div>
</body>
</html>
