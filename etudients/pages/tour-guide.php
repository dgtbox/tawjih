<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Al Raed</title>

  <!-- favicon -->
  <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">

  <!-- bootstrap -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

  <!-- swiper -->
  <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">

  <!-- datepicker -->
  <link rel="stylesheet" href="../assets/css/jquery.datetimepicker.css">

  <!-- jquery ui -->
  <link rel="stylesheet" href="../assets/css/jquery-ui.min.css">

  <!-- common -->
  <link rel="stylesheet" href="../assets/css/common.css">

  <!-- animations -->
  <link rel="stylesheet" href="../assets/css/animations.css">

  <!-- welcome -->
  <link rel="stylesheet" href="../assets/css/welcome.css">

  <!-- details -->
  <link rel="stylesheet" href="../assets/css/home.css">
</head>
<body class="scrollbar-hidden">
  <!-- splash-screen start -->
  <section id="preloader" class="spalsh-screen">
    <div class="circle text-center">
      <div>
        <h1>AL Raed</h1>
        <p>Discover Your Destinition</p>
      </div>
    </div>
    <div class="loader-spinner">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </section>
  <!-- splash-screen end -->

  <main class="tour-guide">
    <!-- page-title -->
    <div class="page-title">
      <button type="button" class="back-btn back-page-btn d-flex align-items-center justify-content-center rounded-full">
        <img src="../assets/svg/arrow-left-black.svg" alt="arrow">
      </button>
      <h3 class="main-title">Tour Guide</h3>
    </div>

    <section class="guide px-24 pb-24">
      <ul>
        <!-- guide card 1 -->
        <?php
            include("conn.php");
            $sql = "SELECT * FROM annonces";
            $result = mysqli_query($coni, $sql);
            while ($row = mysqli_fetch_array($result)) {
            ?>

        <li>
        <a href="vacation-details.php?id=<?php echo $row['id'] ?>" class="d-flex gap-16 item w-fit shrink-0">
                    <div class="image position-relative shrink-0">
                        <?php
                  if ($row['image'] == 1) {
                  ?>
                        <img src="../assets/images/annonce/<?php echo $row['id'] ?>.jpg" alt="desert"
                            class="guide-img object-fit-cover img-fluid radius-12">
                        <?php
                  } else {
                  ?>
                        <img src="../assets/images/annonce/dafault.jpg" alt="desert"
                            class="guide-img object-fit-cover img-fluid radius-12">
                        <?php
                  }
                  ?>
                    </div>

                    <div class="content">
                        <h4>
                            <?php
                    echo $row['title'];
                    ?>
                        </h4>
                        <h5>
                            <?php
                    echo $row['sub'];
                    ?>
                        </h5>
                        <p class="d-flex align-items-center gap-8 location">

                            <?php
                    echo $row['created_at'];
                    ?>
                        </p>
                    </div>
                </a>
        </li>
        <?php
            }
            ?>

      </ul>
    </section>
  </main>

  <!-- jquery -->
  <script src="../assets/js/jquery-3.6.1.min.js"></script>
  
  <!-- bootstrap -->
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  
  <!-- jquery ui -->
  <script src="../assets/js/jquery-ui.js"></script>

  <!-- mixitup -->
  <script src="../assets/js/mixitup.min.js"></script>

  <!-- gasp -->
  <script src="../../../../ajax/libs/gsap/3.12.3/gsap.min.js"></script>

  <!-- draggable -->
  <script src="../../../../ajax/libs/gsap/3.12.3/Draggable.min.js"></script>
  
  <!-- swiper -->
  <script src="../assets/js/swiper-bundle.min.js"></script>
  
  <!-- datepicker -->
  <script src="../assets/js/jquery.datetimepicker.full.js"></script>
  
  <!-- google-map api -->
  <script src="../../../../maps/api/js?key=AIzaSyCodvr4TmsTJdYPjs_5PWLPTNLA9uA4iq8&callback=initMap" type="text/javascript"></script>
  
  <!-- script -->
  <script src="../assets/js/script.js"></script>
  </body>
  </html>