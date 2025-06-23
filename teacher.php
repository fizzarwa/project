<!doctype html>
<html>
<head>
    <?php
    include "includes/connection.php";
    ?>
    <?php
// if(isset($_POST['sbt'])){
// // echo count($_POST['assigncourse']);
// // print_r($_POST);
//     for($i=0; $i<count($_POST['assigncourse']); $i++){
//        echo $query = "insert into std_courses (std_id, course_id, Program_id, Session_id, Semester_id,Teacher_id) 
//         values ('".$_GET['cid']."', '".$_POST['assigncourse'][$i]."','".$_POST['Program_id']."','".$_POST['Session_id']."','".$_POST['Semester_id']."','".$_POST['teacher_id'][$i]."') ";
//         $mysqli->query($query);
//     }


// }





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
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
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
            <h2>Courses</h2>
          </div>
          <form method="GET" action="">
          <div class="contactblock">
          
            <div class="block1 contact_width">
              
              <ul class="inquiry">
               
               

                 <li>
                  <div class="frmlbl">Program:</div>
                   <select name="Program_id">
                 
                   <?php
                      foreach($program_id as $index=>$rows){
                        
                        ?>
                          <option value="<?php echo $index;?>"><?php echo $rows;?></option>
                       <?php }
                   ?>
                  </select>
                </li>

                 <li>
                  <div class="frmlbl">Sesion:</div>
                   <select name="Session_id">
                    
                   <?php
                      foreach($sessions as $index=>$rows){
                        
                        ?>
                          <option value="<?php echo $index;?>"><?php echo $rows;?></option>
                       <?php }
                   ?>
                  </select>
                </li>

                 <li>
                  <div class="frmlbl">Semester:</div>
                   <select name="Semester_id">
                    
                  <?php
                      for($i=1; $i<=8;$i++){
                       
                        ?>
                          <option value="<?php echo $i;?>"><?php echo $i;?></option>
                       <?php }
                   ?>
                  </select>
                </li>

                <li>
                  <div class="frmlbl">Subject:</div>
                   <select name="course_id">
                    
                  <?php
                     $q = "select  DISTINCT course_id FROM std_courses where Teacher_id = '".$_SESSION['user_id']."' ";
                     $sql = $mysqli->query($q);
                     while($options = $sql->fetch_assoc()){?>
                    <option value="<?php echo $options['course_id']; ?>"><?php echo getName($mysqli, $options['course_id']); ?></option>
                   <?php  }
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
              <h3 id="sc_msj"></h3>
                  <table width="100%">
  <thead>
    <tr>
     
      <th>Student Name</th>
      <th>Grades</th>
                        
    </tr>
  </thead>
  <tbody>
    <?php
   
     $qSearch = "select * from std_courses where Program_id='".$_GET['Program_id']."' AND 
Session_id='".$_GET['Session_id']."' AND Semester_id='".$_GET['Semester_id']."' AND course_id=
'".$_GET['course_id']."' AND Teacher_id = '".$_SESSION['user_id']."' ";
$sql = $mysqli->query($qSearch);
while($records = $sql->fetch_assoc()){?>

<tr>
<td><?php echo getStdName($mysqli, $records['std_id']);?></td>
<td><?php echo $records['grades'];?><br>
<form method="POST" action="">
  <input type="text" name="grades" id="grades" onkeyup="saveScore(this.value,<?php echo $records['ID'];?>);">


</td>
</tr>

<?php }

    ?>
  



  </tbody>
                  </table>
                   
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
<script>
function saveScore( score, id ){
  $.post('includes/savescore.php',     // URL jahan data bhejna hai
      { score: score, id:id },     // Data jo bhejna hai (POST data)
      function(response) {    // Callback jab response mile
        // alert("Server says: " + response);
        document.getElementById("sc_msj").innerHTML="Updated successfully!";
      }
    );
}

</script>

