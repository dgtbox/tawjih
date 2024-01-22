<!DOCTYPE html>
<html lang="en">
  <?php
  include('cookie-check.php');
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

  <!-- auth -->
  <link rel="stylesheet" href="../assets/css/auth.css">
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

  <main class="auth-main">
    <!-- menu, side-menu start -->
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
    <!-- menu, side-menu end -->

    <!-- signin start -->
    <section class="auth signin">
      <div class="heading">
        <h2>Hi, Welcome Back!</h2>
        <p>Lorem ipsum dolor sit amet</p>
      </div>
  
      <div class="form-area auth-form">
        <form action="login-exec.php" Method="post" >
          <div>
            <label for="log">Nom d'utilisateur</label>
            <input type="text" id="log" name="log" placeholder="Nom d'utilisateur" class="input-field">
          </div>
          <div>
            <label for="pass">Password</label>
            <input type="password" id="pass" name="pass" placeholder="Mot de passe" class="input-field">
          </div>

          <input type="submit" value="Conexion" class="btn-primary">
        </form>
  
  
        <h6>Vous n'avez pas de compte ? <a href="google.html">Clicquez ici</a></h6>
      </div>
    </section>
    <!-- signin end -->
  </main>

  <!-- modal start -->
  <div class="modal fade loginSuccessModal modalBg" id="loginSuccess" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body text-center">
          <img src="../assets/svg/check-green.svg" alt="Check">
          <h3>You have logged in successfully</h3>
          <p class="mb-32">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          <a href="../home.php" class="btn-primary">Continue</a>
        </div>
      </div>
    </div>
  </div>
  <!-- modal end -->
  
  <!-- jquery -->
  <script src="../assets/js/jquery-3.6.1.min.js"></script>

  <!-- bootstrap -->
  <script src="../assets/js/bootstrap.bundle.min.js"></script>

  <!-- jquery ui -->
  <script src="../assets/js/jquery-ui.js"></script>

  <!-- mixitup -->
  <script src="../assets/js/mixitup.min.js"></script>

  <!-- gasp -->
  <script src="../../../../../ajax/libs/gsap/3.12.3/gsap.min.js"></script>

  <!-- draggable -->
  <script src="../../../../../ajax/libs/gsap/3.12.3/Draggable.min.js"></script>

  <!-- swiper -->
  <script src="../assets/js/swiper-bundle.min.js"></script>

  <!-- datepicker -->
  <script src="../assets/js/jquery.datetimepicker.full.js"></script>

  <!-- google-map api -->
  <script src="../../../../../maps/api/js?key=AIzaSyCodvr4TmsTJdYPjs_5PWLPTNLA9uA4iq8&callback=initMap" type="text/javascript"></script>

  <!-- script -->
  <script src="../assets/js/script.js"></script>
</body>
</html>