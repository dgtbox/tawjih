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

  <!-- home -->
  <link rel="stylesheet" href="../assets/css/explore.css">
</head>
<body class="scrollbar-hidden">
  <main class="explore">
    <!-- search start -->
    <section class="search py-12">
      <form action="annonces.php" method="post">
        <div class="form-inner w-100 d-flex align-items-center gap-8 radius-24">
          <img src="../assets/svg/search.svg" alt="search" class="shrink-0">
          <input type="search" class="input-search input-field" name="srch" placeholder="Search...">
          <div class="filter shrink-0">
          </div>
        </div>
      </form>
    </section>
    <!-- search end -->

    <!-- all-place start -->
    <section class="all-place py-12">
      <!-- tab list -->

      <!-- places -->
      <div id="place-cards" class="grid">
          <?php

          include("conn.php");
          if($_SERVER['REQUEST_METHOD']=='POST'){
            if(isset($_POST['srch']))
            {
              $sql = "SELECT * FROM annonces WHERE title LIKE '%".$_POST['srch']."%' OR sub LIKE '%".$_POST['srch']."%'";
            }
          }
          else{
            $sql = "SELECT * FROM annonces";
          }
          $result = mysqli_query($coni, $sql);
          while ($row = mysqli_fetch_array($result)) {
          ?>
        <!-- item-1 -->
        <div class="place-card mix popular frequent">
          <a href="annonce.php?id=<?php echo $row['id']?>">
            <div class="image position-relative">
                <?php
                if($row['image'] == 1){
                    ?>
                    <img src="../assets/images/annonce/<?php echo $row['id']?>.jpg" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
                    <?php
                }
                else{
                    ?>
                    <img src="../assets/images/annonce/dafault.jpg" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
                    <?php
                }
                ?>
            </div>
            <div class="content">
                <h4><?php
                    echo $row['title'];
                    ?> </h4>
              <p class="d-flex align-items-center gap-04 location">
                  <?php
                    echo $row['sub'];
                  ?>
              </p>
              <div class="price d-flex align-items-center justify-content-between">
                <h3>
                  <?php
                  echo $row['created_at'];
                  ?>
                </h3>
              </div>
            </div>
          </a>
        </div>
          <?php
            }
          ?>


      </div>
    </section>
    <!-- all-place end -->
  </main>

  <!-- bottom navigation start -->
  <footer class="bottom-nav">
    <ul class="d-flex align-items-center justify-content-around w-100 h-100">
      <li>
        <a href="home.php">
          <img src="../assets/svg/bottom-nav/home.svg" alt="home">
        </a>
      </li>
      <li>
        <a href="explore.php">
          <img src="../assets/svg/bottom-nav/category.svg" alt="category">
        </a>
      </li>
      <li>
        <a href="annonces.php">
          <img src="../assets/svg/bottom-nav/ticket-active.svg" alt="heart">
        </a>
      </li>
    </ul>
  </footer>
  <!-- bottom navigation end -->

  <!-- filter modal start -->
  <!-- filter modal end -->

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