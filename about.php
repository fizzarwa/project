<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>About Us</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/ddsmoothmenu.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/ddsmoothmenu.js"></script>
  <script src="js/contentslider.js"></script>
  <script src="js/menu.js"></script>
  <script src="js/tabs.js"></script>
</head>
<style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background:  #eef3fb;
    }

    .wrapper {
      max-width: 1100px;
      margin: 0 auto;
      background:  #eef3fb;
    }
    .content_section {
	float: left;
	width: 960px;
	height: 100%;
}
    .content-wrapper {
      display: flex;
      gap: 20px;
      padding: 20px;
      box-sizing: border-box;
    }

    .principal-section {
      flex: 3;
      border: 1px solid #ccc;
      padding: 20px;
      background: white;
    }

    .sidebar {
      flex: 1;
      border: 1px solid #ccc;
      padding: 20px;
      background-color: #f9f9f9;
    }

    .principal-message-grid {
      display: flex;
      gap: 20px;
    }

    .principal-photo img {
      max-width: 200px;
      width: 100%;
      border: 1px solid #ccc;
    }

    .principal-photo p {
      text-align: center;
      font-weight: bold;
      margin-top: 10px;
    }

    .memories {
      margin-top: 30px;
    }

    .clear {
      clear: both;
    }
.about-gallery {
  display: flex;
  gap: 20px;
  justify-content: center;
  flex-wrap: wrap;
  margin-top: 20px;
}

.image-box {
  flex: 1 1 30%;
  max-width: 300px;
  border: 1px solid #ddd;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.image-box img {
  width: 100%;
  height: auto;
  display: block;
}
.caption {
  text-align: center;
  padding: 5px;
  font-size: 14px;
  color: #555;
}
.section-divider {
  margin: 30px 0;
  border: none;
  border-top: 2px solid #ccc;
}
.section-divider {
  margin: 30px 0;
  border: none;
  border-top: 2px solid #ccc;
}

.about-gallery {
  display: flex;
  gap: 20px;
  justify-content: center;
  flex-wrap: wrap;
  margin-top: 20px;
}

.image-box {
  flex: 1 1 30%;
  max-width: 300px;
  border: 1px solid #ddd;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.image-box img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  display: block;
}

.caption {
  text-align: center;
  font-weight: bold;
  padding: 10px;
  font-size: 16px;
  color: #444;
}


  </style>
</head>
<body>
  <div class="bg">
    <div class="wrapper">
      <?php include "includes/header.php"; ?>

      <!-- Principal and Sidebar Section -->
      <div class="content-wrapper">
        <!-- Principal Section -->
        <div class="principal-section">
          <div class="principal-message-grid">
            <div class="principal-photo">
              <img src="Media Folder/Mr. Ameer Ahmad.jpg" alt="Principal" style="width: 400px;">

              <p>Prof. Ameer Gondal</p>
            </div>
            <div class="principal-message">
              <h2>Message from Principal</h2>
              <p>
                At Govt. Post Graduate College, Mandi Bahauddin, we believe that true education isn’t just
                about textbooks — it’s about shaping strong, kind, and capable individuals. Whether you are a <strong>male</strong> 
                or <strong>female</strong> student, our goal is to help you grow not only in knowledge but also in character.
                We provide an encouraging environment where you can discover your talents, think with purpose, and build confidence.
                I urge all our young men and women to stay disciplined, stay hopeful, and keep dreaming big.
              </p>
            </div>
          </div>
          <hr class="section-divider">

          <!-- Memories Section -->
          <div class="memories">
            <h2>Memories</h2>
          <?php
$folder = "Media Folder/memories/";
$images = glob($folder . "*.{jpg,jpeg,png}", GLOB_BRACE);
shuffle($images); // Randomize
$selectedImages = array_slice($images, 0, 6); // Pick 3 images
?>

<div class="about-gallery">
  <?php foreach ($selectedImages as $img): ?>
    <div class="image-box">
      <img src="<?php echo $img; ?>" alt="About Image">
    </div>
  <?php endforeach; ?>
</div>
        <div class="caption">Our Memories</div>


          </div>
        </div>

        <!-- Sidebar -->
        <div class="sidebar">
          <?php include "includes/sidebar.php"; ?>
        </div>
      </div>

      <div class="clear"></div>
      <?php include "includes/footer.php"; ?>
    </div>
  </div>
</body>
</html>
