<!doctype html>
<html>
<head>
    <?php
    include "includes/connection.php";
    ?>
    <?php

if (isset($_POST['email']) && isset($_POST['password'])) {

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM admin WHERE Email = '$email'";
$result = $mysqli->query($query);

if ($result->num_rows == 1) {
  $row = $result->fetch_assoc();

  if ($password === $row['password']) {  // Or use password_verify() if hashed
    $_SESSION['user_id'] = $row['id'];

     // Set session variables
    $_SESSION['user_id'] = $row['ID'];
    $_SESSION['email'] = $row['Email'];
    // echo "Login successful!";
    header("Location: signup.php");
  } else {
    echo "Incorrect password.";
  }
} else {
  echo "User not found.";
}

}
?>
 <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      margin: 0;
      padding: 20px;
    }

    .container {
      max-width: 800px;
      margin: auto;
      background: #fff;
      padding: 20px;
      box-shadow: 0 0 10px #ccc;
      border-radius: 10px;
      display: flex;
      gap: 20px;
    }

    .col1, .col2 {
      flex: 1;
    }

    .sheadings h2 {
      font-size: 28px;
      margin-bottom: 20px;
      text-align: center;
      color: #333;
    }

    ul.inquiry {
      list-style: none;
      padding: 0;
    }

    ul.inquiry li {
      display: flex;
      align-items: center;
      margin-bottom: 15px;
    }

    ul.inquiry li label,
    ul.inquiry li .frmlbl {
      width: 120px;
      font-weight: bold;
      color: #444;
    }

    ul.inquiry li input,
    ul.inquiry li select {
      flex: 1;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .btn1 {
      background: #007BFF;
      color: #fff;
      padding: 10px 16px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .btn1:hover {
      background: #0056b3;
    }

    .action1 {
      text-align: right;
      margin-top: 10px;
    }

    .clear {
      clear: both;
    }

    .ads img {
      max-width: 100%;
      height: auto;
      border-radius: 8px;
    }
  </style>
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
