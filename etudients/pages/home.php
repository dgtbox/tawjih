<!DOCTYPE html>
<html lang="en">
<?php
include("isloged.php");
?>
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
    <link rel="stylesheet" href="../assets/css/home.css">
</head>

<body class="scrollbar-hidden">
    <!-- splash-screen start -->
    <section id="preloader" class="spalsh-screen">
        <div class="circle text-center">
            <div>
                <h1>Al Raed</h1>
                <p></p>
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

    <main class="home">
        <!-- menu, side-menu start -->
        <section class="wrapper dz-mode">
            <!-- menu -->
            <div class="menu">
                <button class="toggle-btn">
                    <img src="#" alt="" class="icon">
                </button>
                <div class="btn-grp d-flex align-items-center gap-16">
                    <label for="mode-change" class="mode-change d-flex align-items-center justify-content-center">
                        <input type="checkbox" id="mode-change">
                        <img src="../assets/svg/menu/sun-white.svg" alt="icon" class="sun">
                        <img src="../assets/svg/menu/moon-white.svg" alt="icon" class="moon">
                    </label>
                    <a href="profile/user-profile.php">
                        <img src="../assets/svg/menu/profile-white.svg" alt="icon">
                    </a>
                </div>
            </div>
        </section>
        <!-- menu, side-menu end -->

        <!-- info start -->
        <section class="info d-flex align-items-start justify-content-between pb-12">
            <div class="d-flex align-items-center justify-content-between gap-14">
                <div class="image shrink-0 rounded-full overflow-hidden">
                    <img src="../assets/images/home/avatar.png" alt="avatar" class="w-100 h-100 object-fit-cover">
                </div>
                <div>
                    <h3>Hi,
                        <?php
                        include ("conn.php");
                        $sq = "SELECT * FROM etudiant WHERE id = " . $_SESSION['idr'];
                        $resultx = mysqli_query($coni, $sq);
                        $rowx = mysqli_fetch_array($resultx);
                        echo $rowx['prenom'];
                        ?>
                    </h3>
                </div>
            </div>

            <ul class="d-flex align-items-center gap-16">
                <li>
                    <a href="notification.html"
                        class="d-flex align-items-center justify-content-center rounded-full position-relative">
                        <img src="../assets/svg/bell-black.svg" alt="icon">
                        <span class="dot"></span>
                    </a>
                </li>
                <li>
                    <a href="chat/message.html"
                        class="d-flex align-items-center justify-content-center rounded-full position-relative">
                        <img src="../assets/svg/message-square-dots.svg" alt="icon">
                        <span class="dot"></span>
                    </a>
                </li>
            </ul>
        </section>
        <!-- info end -->

        <!-- visited start -->
        <section class="visited py-12">
            <!-- title -->
            <div class="title d-flex align-items-center justify-content-between">
                <h2 class="shrink-0">Nouvaux Articles</h2>
                <div class="custom-pagination visited-pagination"></div>
            </div>

            <div class="swiper visited-swiper">
                <div class="swiper-wrapper">
                    <?php

            include("conn.php");
            $sql = "SELECT * FROM post order by id desc";
            $result = mysqli_query($coni, $sql);
            while ($row = mysqli_fetch_array($result)) {
            ?>
                    <!-- item-1 -->
                    <div class="swiper-slide place-card">
                        <a href="article.php?id=<?php echo $row['id'] ?>">
                            <div class="image h-100 position-relative">
                                <?php
                  if($row['image'] == 1){
                        ?>
                                <img src="../assets/images/post/<?php echo $row['id']?>.jpg" alt="desert"
                                    class="img-fluid w-100 overflow-hidden radius-8">
                                <?php
                  }
                    else{
                        ?>
                                <img src="../assets/images/post/dafault.jpg" alt="desert"
                                    class="img-fluid w-100 overflow-hidden radius-8">
                                <?php
                    }
                  ?>
                            </div>
                            <div class="content">
                                <h4><?php echo $row['title']?></h4>
                                <p class="d-flex align-items-center gap-04 location">
                                    <?php
                  echo $row['created_at'];
                  ?>
                                </p>
                            </div>
                        </a>
                    </div>
                    <?php
            } ?>
                    <!-- item-2 -->

                </div>
            </div>
        </section>
        <!-- visited end -->

        <!-- guide start -->
        <section class="guide py-12">
            <!-- title -->
            <div class="title d-flex align-items-center justify-content-between">
                <h2 class="shrink-0">Annonces</h2>
                <a href="tour-guide.php" class="shrink-0 d-inline-block">Tout voir</a>
            </div>

            <!-- cards -->
            <div class="d-flex gap-24 all-cards scrollbar-hidden">
                <!-- item 1 -->
                <?php
            include("conn.php");
            $sql = "SELECT * FROM annonces";
            $result = mysqli_query($coni, $sql);
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <a href="annonce.php?id=<?php echo $row['id'] ?>" class="d-flex gap-16 item w-fit shrink-0">
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
                <?php } ?>

                <!-- item 2 -->

            </div>
        </section>
        <!-- guide end -->

        <!-- budget start -->
        <section class="budget pt-12">
            <!-- title -->
            <div class="title d-flex align-items-center justify-content-between">
                <h2 class="shrink-0">On Budget Tour</h2>
                <a href="annonces.php" class="shrink-0 d-inline-block">See All</a>
            </div>

            <ul>
                <!-- item 1 -->
                <?php

            include("conn.php");
            $sql = "SELECT * FROM dossier WHERE statut_interne = 3 and id_etudiant = " . $_SESSION['idr'] . " ORDER BY id DESC LIMIT 5";
            $result = mysqli_query($coni, $sql);
            while ($row = mysqli_fetch_array($result)) {
          ?>
                <li>
                    <a href="hotel-details.html" class="d-flex align-items-center gap-12">
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
                                    echo "a";
                                    ?>
                                </h5>
                                <p class="d-flex align-items-center gap-8 location">
                                    <img src="../assets/svg/map-marker.svg" alt="icon">
                                    <?php
                                    echo $row1['adresse'];
                                    ?>
                                </p>
                            </div>
                            <p class="price"><span>$20</span>/Person</p>
                        </div>
                    </a>
                </li>
                <?php
            } ?>

                <!-- item 2 -->
            </ul>
        </section>
        <!-- budget end -->
    </main>

    <!-- bottom navigation start -->
    <footer class="bottom-nav">
        <ul class="d-flex align-items-center justify-content-around w-100 h-100">
            <li>
                <a href="home.php">
                    <img src="../assets/svg/bottom-nav/home-active.svg" alt="home">
                </a>
            </li>
            <li>
                <a href="explore.php">
                    <img src="../assets/svg/bottom-nav/category.svg" alt="category">
                </a>
            </li>
            <li>
                <a href="annonces.php">
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
    <script src="../../../../maps/api/js?key=AIzaSyCodvr4TmsTJdYPjs_5PWLPTNLA9uA4iq8&callback=initMap"
        type="text/javascript"></script>

    <!-- script -->
    <script src="../assets/js/script.js"></script>
</body>

</html>