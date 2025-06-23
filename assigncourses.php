<!doctype html>
<html>
<head>
    <?php
    include "includes/connection.php";
    ?>
    <?php
if(isset($_POST['sbt'])){
  $filtered = array_filter($_POST['teacher_id']);
  $filtered = array_values($filtered);


// echo count($_POST['assigncourse']);
// echo "<pre>";
// print_r($_POST);
// print_r($filtered);
// echo "</pre>";



    for($i=0; $i<count($_POST['assigncourse']); $i++){
        $query = "insert into std_courses (std_id, course_id, Program_id, Session_id,
         Semester_id,Teacher_id) 
        values ('".$_GET['cid']."',
         '".$_POST['assigncourse'][$i]."',
         '".$_POST['Program_id']."',
         '".$_POST['Session_id']."','".$_POST['Semester_id']."','".$filtered[$i]."') ";
        $mysqli->query($query);
    }


}


if(isset($_GET['dc'])){
$qDel = "delete from std_courses where ID =".$_GET['dc']." ";
$mysqli->query($qDel);


}
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
          <nav class="breadcrumb">
  <a href="<?php echo URL_SITE;?>">Home</a>
  <a href="<?php echo URL_SITE;?>signup.php">Add Records</a>

</nav>
       <h2>Courses Assgined</h2>

        <div class="sheading pad">
          <div class="sheadings">
            <h2>Assign Courses</h2>
            <table width="100%">
  <thead>
    <tr>
     
      <th>Course</th>
      <th>Teacher</th>
        <th>Semester</th>
         <th>Action</th>
   
    </tr>
  </thead>
  <tbody>
    <?php
      $qCourses = "select * from std_courses where std_id= '".$_GET['cid']."'  ";
      $sql = $mysqli->query($qCourses);
      while($rows = $sql->fetch_assoc()){?>
  <tr>
<td><?php echo getName($mysqli, $rows['course_id'])?></td>
<td><?php echo getStdName($mysqli, $rows['Teacher_id']);?></td>
<td><?php echo $rows['Semester_id'];?></td>
<td><a href="assigncourses.php?cid=<?php echo $_GET['cid'];?>&dc=<?php echo $rows['ID'];?>">Delete</a></td>
  </tr>
      <?php }
    ?>
  

  </tbody>
            </table>
            <hr><br>
          </div>
          <form method="GET" action="">
          <div class="contactblock">
          
            <div class="block1 contact_width">
              
              <ul class="inquiry">
                <input type="hidden" value="<?php echo $_GET['cid']; ?>" name="cid">
                <li>
                  <div class="frmlbl">Department:</div>
                   <select name="dept_id">
                    <option value="">** Select Dept **</option>
                   <?php
                      foreach($dept_id as $index=>$rows){
                        
                        ?>
                          <option value="<?php echo $index;?>"><?php echo $rows;?></option>
                       <?php }
                   ?>
                  </select>
                </li>
             
              </ul>
              <div class="action1"> 
                <input class="btn1 left" type="submit" value="Search" name="submit">
               </div>
            </div>
            </form>
            <div class="clear"></div>
            <div class="block2">
              <h5>Courses</h5>
              <table width="100%">
  <thead>
    <tr>
      <th>ID</th>
      <th>Course</th>
      <th>Code</th>
      <th>Selection</th>
      <th>Teacher</th>
    </tr>
  </thead>
  <tbody>
              <?php

                    // $qDB = "select * from std_courses where std_id = ".$_GET['cid']."";
                    // $sDB = $mysqli->query($qDB);
                    

                    $qC = "select * from courses where dept_id= '".$_GET['dept_id']."'   ";
                    $sql = $mysqli->query($qC);
                    while($courses = $sql->fetch_assoc()){?>

                        <tr>
                        <td><?php echo $courses['ID']; ?></td>
                        <td><?php echo $courses['Title']; ?></td>
                        <td><?php echo $courses['Code']; ?></td>
                        <td>
                            <form method="post" action="">
                                <input type="checkbox" name="assigncourse[]" value="<?php echo $courses['ID']; ?>">

                            
                            
                        
                        </td>
                        <td>
                          <select name="teacher_id[]">
                    <option value="">** Select Teacher **</option>
                    <?php
                    echo getTeachers($mysqli,"select * from records where Role=1 order by Name asc");
                    ?>
                          </select>

                        </td>
                        </tr>


                  <?php  }
              ?>
              
  </tbody>
              </table>
              Program:<select name="Program_id">
                    <option value="">** Select Program **</option>
                   <?php
                      foreach($program_id as $index=>$rows){
                         if($row['Program_id']==$index){
                          $select = "selected";
                        }else{
                          $select = "";
                        }
                        ?>
                          <option value="<?php echo $index;?>" <?php echo  $select?>><?php echo $rows;?></option>
                       <?php }
                   ?>
                  </select>
                   Session:<select name="Session_id">
                    <option value="">** Select Session **</option>
                   <?php
                      foreach($sessions as $index=>$rows){
                       
                        ?>
                          <option value="<?php echo $index;?>"><?php echo $rows;?></option>
                       <?php }
                   ?>
                  </select>
                   Semester:<select name="Semester_id">
                    <option value="">** Select Semester **</option>
                   <?php
                      for($i=1; $i<=8;$i++){
                       
                        ?>
                          <option value="<?php echo $i;?>"><?php echo $i;?></option>
                       <?php }
                   ?>
                  </select>
  <input style="float: right;" type="submit" name="sbt" value="Assign">
              </form>
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
