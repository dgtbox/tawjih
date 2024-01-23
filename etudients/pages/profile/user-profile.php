<!DOCTYPE html>
<html lang="en">
  <?php
  include('../isloged.php');
  ?>
<head>
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

  <!-- profile -->
  <link rel="stylesheet" href="../../assets/css/profile.css">
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

  <main class="user-profile">
    <!-- profile-heading start -->
    <section class="user-profile-heading d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center gap-12">
        <div class="image rounded-full overflow-hidden shrink-0">
          <img src="../../assets/images/profile/avatar.png" alt="avatar" class="img-fluid w-100 h-100 object-fit-cover">
        </div>
        <div>
          <h3>
            <?php
             include ("../conn.php");
             $sq = "SELECT * FROM etudiant WHERE id = " . $_SESSION['idr'];
             $resultx = mysqli_query($coni, $sq);
             $rowx = mysqli_fetch_array($resultx);
             echo ($rowx['prenom']." ".$rowx['nom']);
            ?>
          </h3>
        </div>
      </div>

      <a href="user-info.html" class="edit-info">
        <img src="../../assets/svg/edit.svg" alt="icon">
      </a>
    </section>
    <!-- profile-heading end -->

    <!-- user-personal start -->
    <section class="user-personal">
      <!-- Personal Info -->

      <!-- Security -->
      <div class="mt-32">
        <h4 class="mb-16">Securité</h4>
        <ul class="setting-list">
          <li>
            <a href="change-password.html" class="d-flex align-items-center justify-content-between">
              <div class="d-flex align-items-center gap-12 shrink-0">
                <img src="../../assets/svg/lock-close.svg" alt="icon">
                <p>Changé le Mot de passe</p>
              </div>
  
              <img src="../../assets/svg/chevron-right.svg" alt="Icon">
            </a>
          </li>
          <li>
            <a href="forgot-password.html" class="d-flex align-items-center justify-content-between">
              <div class="d-flex align-items-center gap-12 shrink-0">
                <img src="../../assets/svg/lock-open.svg" alt="icon">
                <p>Mot de passe oublié</p>
              </div>
  
              <img src="../../assets/svg/chevron-right.svg" alt="Icon">
            </a>
          </li>
        </ul>
      </div>

      <!-- General -->

      <!-- About -->
      <div class="mt-32">
        <h4 class="mb-16">Général</h4>
        <ul class="setting-list">
          <li>
            <a href="legal-policy.html" class="d-flex align-items-center justify-content-between">
              <div class="d-flex align-items-center gap-12 shrink-0">
                <img src="../../assets/svg/shield-round.svg" alt="icon">
                <p>Ajouter un fichié</p>
              </div>
  
              <img src="../../assets/svg/chevron-right.svg" alt="Icon">
            </a>
          </li>
          <li>
            <a href="help-support.html" class="d-flex align-items-center justify-content-between">
              <div class="d-flex align-items-center gap-12 shrink-0">
                <img src="../../assets/svg/question.svg" alt="icon">
                <p>Envoyé un message</p>
              </div>
  
              <img src="../../assets/svg/chevron-right.svg" alt="Icon">
            </a>
          </li>
        </ul>
      </div>
    </section>
    <!-- user-personal end -->

    <!-- logout button start -->
    <div class="py-32">
      <button type="button" class="btn-primary-outline" data-bs-toggle="modal" data-bs-target="#logOutModal">Log Out</button>
    </div>
    <!-- logout button end -->
  </main>

  <!-- bottom navigation start -->
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
  <!-- bottom navigation end -->

  <!-- edit-profile modal start -->
  <div class="modal fade logOutModal modalBg" id="logOutModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header justify-content-end">
          <button type="button" class="close-btn d-flex align-items-center justify-content-center rounded-full" data-bs-dismiss="modal" aria-label="Close">
            <img src="../../assets/svg/close-black.svg" alt="icon">
          </button>
        </div>
        <div class="modal-body text-center">
          <h4 class="mb-32">Are you sure you want to logout?</h4>
          <ul>
            <li class="mb-04">
              <button type="button" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
            </li>
            <li>
              <button type="button" onclick="window.location.href='../../logout.php';" class="log-out" data-bs-dismiss="modal" aria-label="Close">Log Out</button>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- edit-profile modal end -->

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