<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Faculty</title>
  <link rel="stylesheet" href="css/style.css"> <!-- Ensure this CSS contains the faculty section styles -->
  <link rel="stylesheet" href="css/ddsmoothmenu.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/ddsmoothmenu.js"></script>
  <script src="js/contentslider.js"></script>
  <script src="js/menu.js"></script>
  <script src="js/tabs.js"></script>

  <style>
    .faculty-section {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      padding: 20px;
      background: #f5f5f5;
    }

    .faculty-card {
      width: 220px;
      background: white;
      overflow: hidden;
      text-align: center;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    .faculty-card img {
      width: 100%;
      height: 250px;
      object-fit: cover;
      display: block;
    }

    .faculty-card h3 {
      font-size: 16px;
      color: #333;
      padding: 10px;
      margin: 0;
    }
  </style>
</head>
<body>
  <div class="bg">
    <div class="wrapper">

      <?php include "includes/header.php"; ?>

      <div class="content_section white_bg">
        <div class="content_heading">
          <div class="heading">
            <h2>Meet Our Esteemed Faculty</h2>
          </div>
        </div>

        <!-- <div class="faculty-section">
          <div class="faculty-card">
            <img src="Media Folder/faculty/Mr. Adnan Saghir.jpeg" alt="Mr. Adnan Saghir">
            <h3>Mr. Adnan Saghir</h3>
          </div> -->
          <!-- Urdu Department -->
<div class="content_heading">
  <div class="heading">
    <h2>HOD</h2>
  </div>
</div>

<div class="faculty-section">
  <!-- HOD -->
  <div class="faculty-card" id="anayat">
  <img src="Media Folder/Sir Inayat Ullah.jpg" alt="HOD">
  <h3>Prof Qari Anayat Ullah</h3>
</div>

 
  <div class="faculty-card" id="shakeel">
  <img src="Media Folder/Mr. Shakeel Ahmad.jpg" alt="HOD">
  <h3>Prof. Shakeel Ghori</h3>
</div>
      
  <div class="faculty-card" id="saifullah">
  <img src="Media Folder/Mr. Saif Ullah.jpg" alt="HOD">
  <h3>Prof. Saif Ullah </h3>
</div>
   <div class="faculty-card" id="faiyaz">
  <img src="Media Folder/Mr. Muhammad Faiyaz.jpg" alt="HOD">
  <h3>Prof.  Muhammad Faiyaz </h3>
  </div>
  <div class="faculty-card" id="Aasif">
  <img src="Media Folder/Mr. Asif Zaman.jpg" alt="HOD">
  <h3>Prof. Asif Zaman</h3>
   </div>
    <div class="faculty-card" id="ameer">
  <img src="Media Folder/Mr. Ameer Ahmad.jpg" alt="HOD">
  <h3>Prof. Ameer Ahmad</h3></div>
  <div class="faculty-card" id="tariq">
  <img src="Media Folder/Mr. Tariq Hussain.jpeg" alt="HOD">
  <h3>Prof. Tariq Hussain</h3></div>
  <div class="faculty-card" id="tariq">
  <img src="Media Folder/Mr. Abdul Manan.jpg" alt="HOD">
  <h3>Prof. Abdul Manan</h3></div>
  <div class="faculty-card" id="afrasiab">
  <img src="Media Folder/Mr. Afrasiab.jpg" alt="HOD">
  <h3>Prof.  Afrasia</h3></div>
</div>







    
        

      

      <?php include "includes/footer.php"; ?>
      </div>
    </div>
  </div>
</body>
</html>
