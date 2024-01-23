<!DOCTYPE html>
<html lang="en">
<?php
session_start();
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
    <link rel="stylesheet" href="../assets/css/explore.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body class="scrollbar-hidden">
    <main class="explore">
        <!-- search start -->
        <!-- search end -->

        <!-- all-place start -->
        <section class="wrapper dz-mode">
      <!-- menu -->
      <div class="menu">
        <div class="btn-grp d-flex align-items-center gap-16">
          <label for="mode-change" class="mode-change d-flex align-items-center justify-content-center">
            <input type="checkbox" id="mode-change">
            <img src="../assets/svg/menu/sun-white.svg" alt="icon" class="sun">
            <img src="../assets/svg/menu/moon-white.svg" alt="icon" class="moon">
          </label>
        </div>
      </div>
      <div class="m-menu__overlay"></div>
      <!-- main menu -->
      <!-- end main menu -->
    </section>

        <section class="mt-5 all-place py-12">
            <!-- tab list -->

            <!-- places -->
            <form action="upload-exec.php" enctype="multipart/form-data" Method="post">
                <div>
                    <label for="fn">De quel document sagit t'il ?</label>
                    <input required type="text" id="fn" name="fn" placeholder="Exememple : Bac, relevé de notes ..." class="input-field">
                </div>

                <div class="wrapper mt-4 mb-4">
                    <div class="file-upload">
                        <input type="file" required name="fl"/>
                        <i class="fa fa-upload"></i>
                    </div>
                </div>
                <style>
                    .wrapper {

                        width: 100%;
                        height: 100%;
                        display: flex;
                        align-items: center;
                        justify-content: center;


                        .file-upload {

                            height: 200px;
                            width: 200px;
                            border-radius: 100px;
                            position: relative;

                            display: flex;
                            justify-content: center;
                            align-items: center;

                            border: 4px solid #FFFFFF;
                            overflow: hidden;
                            background-image: linear-gradient(to bottom, #8943b2 50%, #FFFFFF 50%);
                            background-size: 100% 200%;
                            transition: all 1s;
                            color: #FFFFFF;
                            font-size: 100px;

                            input[type='file'] {

                                height: 200px;
                                width: 200px;
                                position: absolute;
                                top: 0;
                                left: 0;
                                opacity: 0;
                                cursor: pointer;

                            }

                            &:hover {

                                background-position: 0 -100%;

                                color: #8943b2;

                            }


                        }
                    }
                </style>

                    <input type="hidden" name="id" value="<?php echo $_SESSION['idr'] ?>" >
                <input type="submit" value="Envoyer" class="btn-primary">
            </form>
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
                    <img src="../assets/svg/bottom-nav/ticket.svg" alt="heart">
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