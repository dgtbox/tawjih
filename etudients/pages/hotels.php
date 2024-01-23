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

  <main class="tour-guide">
    <!-- page-title -->
    <div class="page-title">
      <button type="button" class="back-btn back-page-btn d-flex align-items-center justify-content-center rounded-full">
        <img src="../assets/svg/arrow-left-black.svg" alt="arrow">
      </button>
      <h3 class="main-title">Hotels</h3>
    </div>

    <section class="budget px-24 pb-24">
    <ul>
                <!-- item 1 -->
                <?php

            include("conn.php");
            $sql = "SELECT * FROM dossier WHERE statut_interne = 3 and id_etudiant = " . $_SESSION['idr'] . " ORDER BY id DESC LIMIT 5";
            $result = mysqli_query($coni, $sql);
            while ($row = mysqli_fetch_array($result)) {
          ?>
                <li>
                    <div href="hotel-details.php" class="d-flex align-items-center gap-12">
                        <div class="image shrink-0 overflow-hidden radius-8">
                            <img src="../assets/images/ecole/default.jpg" alt="Place"
                                class="img-fluid w-100 h-100 object-fit-cover">
                        </div>

                        <div
                            class="content shrink-0 d-flex align-items-center gap-12 justify-content-between flex-grow">
                            <div>
                                <h4 style="overflow-wrap: break-word;" >
                                    <?php
                                    $sql1="select * from ecole where id =".$row['id_ecole'];
                                    $result1 = mysqli_query($coni,$sql1);
                                    $row1 = mysqli_fetch_array($result1);
                                    $nom = $row1['nom'];
                                    if(strlen($nom) > 20) {
                                        $nom = wordwrap($nom, 20, "<br />\n");
                                    }
                                    echo $nom;
                                    ?>
                                </h4>
                                <h5>
                                    <?php
                                    echo "date de depot : ".$row['date_depot'];
                                    ?>
                                </h5>
                                <p class="d-flex align-items-center gap-8 location">
                                    <img src="../assets/svg/map-marker.svg" alt="icon">
                                    <?php
                                    echo $row1['adresse'];
                                    ?>
                                </p>
                            </div>
                            <?php
                            if($row['statut_externe'] == 0){
                                ?>
                            <p class="price" style="color: #ffcb00"><span></span>En attente de reponse</p>
                            <?php
                            }
                            if($row['statut_externe'] == 1){
                                ?>
                            <p class="price" style="color: #00ff00"><span></span>Accepter</p>
                            <?php
                            }
                             if($row['statut_externe'] == 2){
                                ?>
                            <p class="price" style="color: #ff0000"><span></span>Refuser</p>
                            <?php
                            }}
                            ?>
                        </div>
                          </div>
                </li>


                <!-- item 2 -->
            </ul>
    </section>
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
        <a href="hotels.html">
          <img src="../assets/svg/bottom-nav/ticket.svg" alt="heart">
        </a>
      </li>
    </ul>
  </footer>
  <!-- bottom navigation end -->

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