<!doctype html>
<html>
<head>
    <?php
    include "includes/connection.php";
    ?>

      <?php
if(isset($_GET['did'])){
  $qu = "delete from records where ID ='".$_GET['did']."' ";
  $sql = $mysqli->query($qu);

  // print_r($row);
}
?>

    <?php
if(isset($_GET['eid'])){
  $qu = "select * from records where ID ='".$_GET['eid']."' ";
  $sql = $mysqli->query($qu);
  $row = $sql->fetch_assoc();

  // print_r($row);
}





if (isset($_POST['submit'])) {

if(isset($_GET['eid'])){

  $eq = "update records set Name =  '".$_POST['name']."',
  Email =  '".$_POST['email']."',
  Password =  '".$_POST['password']."',
  Role =  '".$_POST['role']."',
  Dept_id =  '".$_POST['Dept_id']."' where ID = '".$_GET['eid']."' ";
  $mysqli->query($eq);

}else{
$query = "INSERT INTO records (Name,
                               Email, 
                               Dept_id,
                               Date_added,
                               Status,
                              
                               Who_added ,
                               Role,
                               Password) 
                               values (
                               '".$_POST['name']."',
                               '".$_POST['email']."',
                               '".$_POST['Dept_id']."',
                               '".date("Y-m-d H:i:s")."',
                               '1',
                              
                               '".$_SESSION['user_id']."',
                               '".$_POST['role']."',
                               '".$_POST['password']."'
                               
                               
                               ) ";
                                $mysqli->query($query);
                                $message =  "Added successfully!";
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
            <h2>Add Records</h2>
            <?php
            if(isset($message)){
                echo "<h3 style=\"color:#000 !important;\">".$message."</h3>";
            }
            ?>
           
          </div>
          <form method="post" action="">
          <div class="contactblock">
          
            <div class="block1 contact_width">
              
              <ul class="inquiry">
                <li>
                  <div class="frmlbl">Name:</div>
                  <input name="name" placeholder="Name" type="text" value="<?php if(isset($_GET['eid'])){ echo $row['Name']; } ?>" required/>
                </li>
                <li>
                  <div class="frmlbl">Email:</div>
                  <input name="email" placeholder="Email" type="email" <?php if(isset($_GET['eid'])){ echo $row['Email']; } ?> required/>
                </li>
               <li>
                  <div class="frmlbl">Password:</div>
                  <input name="password" placeholder="Password" type="password"/>
                </li>

                <li>
                  <div class="frmlbl">Role:</div>
                  <select name="role">
                    <option value="">** Select Role **</option>

                   <?php
                      foreach($role as $index=>$rows){
                        // echo $row['Role'];
                        if($row['Role']==$index){
                          $select = "selected";
                        }else{
                          $select = "";
                        }
                        
                        ?>
                          <option  value="<?php echo $index;?>" <?php echo  $select?>><?php echo $rows;?></option>
                       <?php }
                   ?>
                  </select>
                </li>

                
                 <li>
                  <div class="frmlbl">Department:</div>
                  <select name="Dept_id">
                    <option value="">** Select Program **</option>
                   <?php
                      foreach($dept_id as $index=>$rows){
                        if($row['Dept_id']==$index){
                          $select = "selected";
                        }else{
                          $select = "";
                        }
                        ?>
                          <option value="<?php echo $index;?>" <?php echo  $select?>><?php echo $rows;?></option>
                       <?php }
                   ?>
                  </select>
                </li>

                 

              </ul>
              <div class="action1"> 
                <input class="btn1 left" type="submit" value="Save" name="submit">
               </div>
            </div>
            </form>
            <div class="clear"></div>
            <div class="block2">
              <h5>Records</h5>
              <table width="100%">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Department</th>
     
      <th>Date Added</th>
      <th>Role</th>
      <th>Courses</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
  $qS = "select * from records order by ID desc";
  $sql = $mysqli->query($qS);
  while($rows = $sql->fetch_assoc()){?>
 <tr>
      <td><?php echo $rows['ID']; ?></td>
      <td><?php echo $rows['Name']; ?></td>
      <td><?php echo $dept_id[$rows['Dept_id']]; ?></td>
      
      <td><?php echo $rows['Date_added']; ?></td>
      <td><?php echo $role[$rows['Role']]; ?></td>
      <td>
        <?php
          if($rows['Role']==2){?>
<a href="assigncourses.php?cid=<?php echo $rows['ID'] ?>" class="edit-btn">Assign Courses</a>
         <?php }
        ?>
        </td>
      <td>
        <a href="signup.php?eid=<?php echo $rows['ID'] ?>" class="edit-btn">Edit</a>
        <a href="signup.php?did=<?php echo $rows['ID'] ?>"  class="delete-btn" onclick="return confirm('Are you sure you want to delete this item')">Delete</a>
      </td>
    </tr>
  <?php }

?>
   

  </tbody>
</table>
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

<style>
    
  </style>
