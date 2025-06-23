<!doctype html>
<html>
<head>
    <?php
    include "includes/connection.php";
    ?>
    <?php


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
          <form method="post" action="">
          <div class="contactblock">
          
            <div class="block1 contact_width">
              
              <ul class="inquiry">
                <li>
                  <div class="frmlbl">Email:</div>
                  <input name="email" placeholder="Email" type="text"/>
                </li>
               <li>
                  <div class="frmlbl">Password:</div>
                  <input name="password" placeholder="Password" type="password"/>
                </li>
              </ul>
              <div class="action1"> 
                <input class="btn1 left" type="submit" value="Login" name="submit">
               </div>
            </div>
            </form>
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
   
         
        <?php
        include "includes/sidebar.php";
        ?>
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
