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

  <!-- datetime -->
  <link rel="stylesheet" href="../assets/css/datetimepicker.css">

  <!-- details -->
  <link rel="stylesheet" href="../assets/css/details.css">
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
  <?php
  if (isset($_GET['id'])) {
    include("conn.php");
    $id = $_GET['id'];
    $sql = "SELECT * FROM post WHERE id = '$id'";
    $result = mysqli_query($coni, $sql);
    $row = mysqli_fetch_array($result);

  ?>

    <main class="details vacation-details">
      <!-- banner start -->
      <section class="banner position-relative">
        <?php
        if ($row['image'] == 1) {
        ?>
          <img src="../assets/images/post/<?php echo $row['id'] ?>.jpg" alt="desert" class="w-100 img-fluid">
        <?php
        } else {
        ?>
          <img src="../assets/images/post/dafault.jpg" alt="desert" class="w-100 img-fluid">
        <?php
        }
        ?>

        <!-- title -->
        <div class="page-title">
          <button type="button" class="back-btn back-page-btn d-flex align-items-center justify-content-center rounded-full">
            <img src="../assets/svg/arrow-left-black.svg" alt="arrow">
          </button>
          <h3 class="main-title">
            <?php
            echo $row['title'];
            ?>
          </h3>
        </div>
      </section>
      <!-- banner end -->
      <!-- details-body start -->
      <section class="details-body">
        <!-- details-title -->
        <section class="d-flex align-items-center gap-8 details-title">
          <div class="flex-grow">
            <h3><?php echo $row['title'] ?></h3>
            <ul class="d-flex align-items-center gap-8">
              <li class="d-flex align-items-center gap-04">
                <p><?php
                    echo $row['created_at'];
                    ?> </p>
              </li>
            </ul>
          </div>
        </section>

        <!-- details-info -->
        <section class="details-info pt-32 pb-16">
          <div class="title">
            <h4>
              <?php
              echo $row['sub'];
              ?>
            </h4>
          </div>
          <p>
            <?php
            echo $row['content'];
            ?>
          </p>
        </section>
        <!-- guide start -->
        <section class="guide py-16">
          <!-- title -->
          <div class="title">
            <h4>Autre Articles</h4>
          </div>

          <!-- cards -->
          <div class="d-flex gap-24 all-cards scrollbar-hidden">
            <!-- item 1 -->
            <?php
            include("conn.php");
            $sql = "SELECT * FROM post where id != '$id'";
            $result = mysqli_query($coni, $sql);
            while ($row = mysqli_fetch_array($result)) {
            ?>
              <a href="vacation-details.php?id=<?php echo $row['id'] ?>" class="d-flex gap-16 item w-fit shrink-0">
                <div class="image position-relative shrink-0">
                  <?php
                  if ($row['image'] == 1) {
                  ?>
                    <img src="../assets/images/post/<?php echo $row['id'] ?>.jpg" alt="desert" class="guide-img object-fit-cover img-fluid radius-12">
                  <?php
                  } else {
                  ?>
                    <img src="../assets/images/post/dafault.jpg" alt="desert" class="guide-img object-fit-cover img-fluid radius-12">
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
            <?php } ?>
          <?php } else {
          header('location: explore.php');
        }
          ?>

          </div>
        </section>
        <!-- guide end -->

        <!-- reviews start -->
        <!-- reviews end -->

        <!-- location start -->
        <!-- details-body end -->

        <!-- details-footer start -->
        <section class="details-footer d-flex align-items-center justify-content-between gap-8 w-100">
          <p><span></span></p>
          <a href="#">Ajouter aux Favoris</a>
        </section>
        <!-- details-footer end -->
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