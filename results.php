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
            <h2>Student Report</h2>
          </div>
          <form method="post" action="">
          <div class="contactblock">
          
            <div class="">
              
               <table width="100%">
  <thead>
    <tr>
      <th>ID</th>
      <th>Course</th>
      <th>Code</th>
      <th>Semester</th>
      <th>Marks</th>
    </tr>
  </thead>
  <tbody>
              <?php
                    $qC = "SELECT co.*, ct.*
  FROM std_courses co
  LEFT JOIN courses ct ON co.course_id = ct.ID
  WHERE co.std_id = '".$_SESSION['user_id']."' ORDER by co.Semester_id asc  ";
                    $sql = $mysqli->query($qC);
                    while($courses = $sql->fetch_assoc()){?>

                        <tr>
                        <td><?php echo $courses['ID']; ?></td>
                        <td><?php echo $courses['Title']; ?></td>
                        
                        <td><?php echo $courses['Code']; ?></td>
                         <td><?php echo $courses['Semester_id']; ?></td>
                      <td><?php echo $courses['grades']; ?></td>
                        </tr>


                  <?php  }
              ?>
              
  </tbody>
              </table>
            </div>
            </form>
            <div class="clear"></div>
          
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
