<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  session_start();
  ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Al Raed</title>

  <!-- favicon -->
  <link rel="shortcut icon" href="../../assets/images/favicon.png" type="image/x-icon">

  <!-- bootstrap -->
  <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">

  <!-- swiper -->
  <link rel="stylesheet" href="../../assets/css/swiper-bundle.min.css">

  <!-- datepicker -->
  <link rel="stylesheet" href="../../assets/css/jquery.datetimepicker.css">

  <!-- jquery ui -->
  <link rel="stylesheet" href="../../assets/css/jquery-ui.min.css">

  <!-- common -->
  <link rel="stylesheet" href="../../assets/css/common.css">

  <!-- animations -->
  <link rel="stylesheet" href="../../assets/css/animations.css">

  <!-- welcome -->
  <link rel="stylesheet" href="../../assets/css/welcome.css">

  <!-- chat -->
  <link rel="stylesheet" href="../../assets/css/chat.css">
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

  <main>
    <!-- page-title -->
    <div class="page-title">
      <button type="button" class="back-btn back-page-btn d-flex align-items-center justify-content-center rounded-full">
        <img src="../../assets/svg/arrow-left-black.svg" alt="arrow">
      </button>
      <h3 class="main-title">Message</h3>
    </div>

    <!-- search start -->
    <section class="message-main search px-24">
      <form action="#">
        <div class="message-search w-100 d-flex align-items-center gap-8 radius-24">
          <img src="../../assets/svg/search.svg" alt="search" class="shrink-0">
          <input type="search" class="input-search input-field" placeholder="Search...">
          <div class="filter shrink-0">
            <button type="button" class="d-flex align-items-center">
              <img src="../../assets/svg/filter-black.svg" alt="filter">
            </button>
          </div>
        </div>
      </form>
    </section>
    <!-- search end -->

    <section class="message mt-24">
      <?php
      include('../conn.php');
      $sql = "SELECT * FROM dossier WHERE statut_interne = 2 and id_etudiant = " . $_SESSION['idr'] . "";
      $result = mysqli_query($coni, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
        $sql1 = "SELECT * FROM ecole WHERE id = " . $row['id_ecole'] . "";
        $result1 = mysqli_query($coni, $sql1);
        $row1 = mysqli_fetch_assoc($result1);
        $nom = $row1['nom'];
        if (strlen($nom) > 20) {
          $nom = wordwrap($nom, 30, "<br />\n");
        }
        $com = $row['com'];
        if (strlen($com) > 20) {
          $com = wordwrap($com, 30, "<br />\n");
        }
      ?>

        <!-- item 1 -->
        <div class="single-chat position-relative">
          <div class="single-main d-flex align-items-center justify-content-between gap-04 radius-12">
            <div class="shrink-0 d-flex align-items-center gap-12">
              <div class="image shrink-0 position-relative">
                <?php
              if ($row1['image'] == 1) {
                  ?>
                        <img src="../../assets/images/ecole/<?php echo $row['id'] ?>.jpg" alt="desert"
                        class="img-fluid w-100 h-100 object-fit-cover rounded-full">
                        <?php
                  } else {
                  ?>
                            <img src="../../assets/images/ecole/default.jpg" alt="Place"
                        class="img-fluid w-100 h-100 object-fit-cover rounded-full">
                        <?php
                  }
                  ?>
              </div>

              <div>
                <h4>
                  <?php echo $nom ?> -
                </h4>
                <h5 style="font-size: large"><?php echo $com ?></h5>
              </div>
            </div>


          </div>

          <!-- trash -->
          <button type="button" class="trash">
            <img src="../../assets/svg/trash-red.svg" alt="trash">
          </button>
        </div>
      <?php
      }
      ?>


      <!-- add button -->
      <button onclick="window.location.href='../upload.php'" type="button" class="add-chat d-flex align-items-center justify-content-center rounded-full">
        <img src="../../assets/svg/plus-white.svg" alt="plus">
      </button>
  </main>
  <footer class="bottom-nav">
      <ul class="d-flex align-items-center justify-content-around w-100 h-100">
          <li>
              <a href="../home.php">
                  <img src="../../assets/svg/bottom-nav/home.svg" alt="home">
              </a>
          </li>
          <li>
              <a href="../explore.php">
                  <img src="../../assets/svg/bottom-nav/category.svg" alt="category">
              </a>
          </li>
          <li>
              <a href="../annonces.php">
                  <img src="../../assets/svg/bottom-nav/ticket.svg" alt="heart">
              </a>
          </li>
      </ul>
  </footer>

  <!-- jquery -->
  <script src="../../assets/js/jquery-3.6.1.min.js"></script>

  <!-- bootstrap -->
  <script src="../../assets/js/bootstrap.bundle.min.js"></script>

  <!-- jquery ui -->
  <script src="../../assets/js/jquery-ui.js"></script>

  <!-- mixitup -->
  <script src="../../assets/js/mixitup.min.js"></script>

  <!-- gasp -->
  <script src="../../../../../ajax/libs/gsap/3.12.3/gsap.min.js"></script>

  <!-- draggable -->
  <script src="../../../../../ajax/libs/gsap/3.12.3/Draggable.min.js"></script>

  <!-- swiper -->
  <script src="../../assets/js/swiper-bundle.min.js"></script>

  <!-- datepicker -->
  <script src="../../assets/js/jquery.datetimepicker.full.js"></script>

  <!-- google-map api -->
  <script src="../../../../../maps/api/js?key=AIzaSyCodvr4TmsTJdYPjs_5PWLPTNLA9uA4iq8&callback=initMap" type="text/javascript"></script>

  <!-- script -->
  <script src="../../assets/js/script.js"></script>
</body>

</html>