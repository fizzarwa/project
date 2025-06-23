<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Events</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/ddsmoothmenu.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/ddsmoothmenu.js"></script>
  <script src="js/contentslider.js"></script>
  <script src="js/menu.js"></script>
  <script src="js/tabs.js"></script>
</head>
<body>
  <div class="bg">
    <div class="wrapper">
      <?php
      include "includes/header.php";
      ?>

      <div class="content_section">
        <h1 style="text-align:center; color:#2c3e50; padding:20px;">College Events</h1>
      <div class="event" id="indep">
    <img src="Media Folder/indep day.jpg" alt="14 August">
    <h2>14 August – Independence Day</h2>
    <p>Flag hoisting, speeches, and national songs performances.</p>
  </div>

  <div class="event" id="6sep">
    <img src="Media Folder/6 sep.jpg" alt="6 September">
    <h2>6 September – Defence Day</h2>
    <p>Tribute to the armed forces with special assemblies.</p>
  </div>

  <div class="event" id="11sep">
    <img src="Media Folder/quaid's aniversery.jpg" alt="11 September">
    <h2>11 September – Quaid-e-Azam Death Anniversary</h2>
    <p>Special talk and documentary about Quaid-e-Azam.</p>
  </div>

  <div class="event" id="iqbal">
    <img src="Media Folder/iqbal.png" alt="Iqbal Day">
    <h2>9 November – Iqbal Day</h2>
    <p>Speech and poetry competitions in honor of Allama Iqbal.</p>
  </div>

  <div class="event" id="rabi">
    <img src="Media Folder/12 rabi awal.jpg" alt="Eid Milad">
    <h2>12 Rabi ul Awwal – Eid Milad un Nabi </h2>
    <p>Religious program with naats and Seerat-e-Nabi sessions.</p>
  </div>
  <div class="event" id="exhi">
    <img src="Media Folder/science exhibhition.png" alt="Science Exhibition">
    <h2>Science Exhibition</h2>
    <p>Students showcase science projects and models.</p>
  </div>

  <div class="event" id="party">
    <img src="Media Folder/welcome.jpg"  alt="Welcome Farewell">
    <h2>Welcome & Farewell Party</h2>
    <p>Welcome new students and say goodbye to seniors.</p>
  </div>
  
  <?php
include "includes/footer.php";
?>
</body>
</html>



        