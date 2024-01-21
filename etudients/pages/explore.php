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
      <form action="#">
        <div class="form-inner w-100 d-flex align-items-center gap-8 radius-24">
          <img src="../assets/svg/search.svg" alt="search" class="shrink-0">
          <input type="search" class="input-search input-field" placeholder="Search...">
          <div class="filter shrink-0">
            <button type="button" class="d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#filterModal">
              <img src="../assets/svg/filter-black.svg" alt="filter">
            </button>
          </div>
        </div>
      </form>
    </section>
    <!-- search end -->

    <!-- all-place start -->
    <section class="all-place py-12">
      <!-- tab list -->
      <ul class="place-filter-btns d-flex align-items-center tab-list gap-12 w-100 scrollbar-hidden">
        <li class="active">
          <button type="button" data-filter="all">All</button>
        </li>
        <li>
          <button type="button" data-filter=".popular">Popular</button>
        </li>
        <li>
          <button type="button" data-filter=".recommendation">Recommendation</button>
        </li>
        <li>
          <button type="button" data-filter=".frequent">Frequently visited</button>
        </li>
      </ul>

      <!-- places -->
      <div id="place-cards" class="grid">
          <?php

          include("conn.php");
          $sql = "SELECT * FROM post";
          $result = mysqli_query($coni, $sql);
          while ($row = mysqli_fetch_array($result)) {
          ?>
        <!-- item-1 -->
        <div class="place-card mix popular frequent">
          <a href="vacation-details.html">
            <div class="image position-relative">
                <?php
                if($row['image'] == 1){

                }
                ?>
              <img src="../assets/images/home/item-2.png" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
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
                <h3>$235</h3>
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
        <a href="home.html">
          <img src="../assets/svg/bottom-nav/home.svg" alt="home">
        </a>
      </li>
      <li>
        <a href="explore.html">
          <img src="../assets/svg/bottom-nav/category-active.svg" alt="category">
        </a>
      </li>
      <li>
        <a href="hotels.html">
          <img src="../assets/svg/bottom-nav/heart.svg" alt="heart">
        </a>
      </li>
    </ul>
  </footer>
  <!-- bottom navigation end -->

  <!-- filter modal start -->
  <div class="modal fade filterModal bottomModal" id="filterModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="modal-close rounded-full" data-bs-dismiss="modal" aria-label="Close">
            <img src="../assets/svg/close-black.svg" alt="Close">
          </button>
          <h1 class="modal-title">Filter</h1>
        </div>
        <div class="modal-body">
          <!-- price range -->
          <div class="pb-12">
            <h4 class="content-title">Price Range</h4>
            <div class="filter-range">
              <div id="price-slider-range"></div>
              <div class="price-range w-100 d-flex align-items-center justify-content-between">
                <input type="text" id="amount1">
                <input type="text" id="amount2">
              </div>
            </div>
          </div>

          <!-- popular filters -->
          <div class="py-12">
            <h4 class="content-title">Popular Filters</h4>
            <ul class="popular-filters">
              <li>
                <label for="hotel" class="filter-label">
                  <input type="checkbox" id="hotel">
                  Hotels (340)
                </label>
              </li>
              <li>
                <label for="pool" class="filter-label">
                  <input type="checkbox" id="pool" checked="">
                  Swimming Pool (340)
                </label>
              </li>
              <li>
                <label for="stars" class="filter-label">
                  <input type="checkbox" id="stars">
                  5 stars (100)
                </label>
              </li>
              <li>
                <label for="bathroom" class="filter-label">
                  <input type="checkbox" id="bathroom">
                  Private Bathroom (200)
                </label>
              </li>
              <li>
                <label for="breakfast" class="filter-label">
                  <input type="checkbox" id="breakfast">
                  Breakfast Included (115)
                </label>
              </li>
              <li>
                <label for="kitchen" class="filter-label">
                  <input type="checkbox" id="kitchen">
                  Kitchen (10)
                </label>
              </li>
            </ul>
          </div>

          <!-- star rating -->
          <div class="py-12">
            <h4 class="content-title">Star Rating</h4>
            <ul class="star-rating">
              <li>
                <label for="star1" class="filter-label">
                  <input type="radio" name="star" id="star1">
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                </label>
              </li>
              <li>
                <label for="star2" class="filter-label">
                  <input type="radio" name="star" id="star2">
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                </label>
              </li>
              <li>
                <label for="star3" class="filter-label">
                  <input type="radio" name="star" id="star3">
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                </label>
              </li>
              <li>
                <label for="star4" class="filter-label">
                  <input type="radio" name="star" id="star4" checked="">
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                </label>
              </li>
              <li>
                <label for="star5" class="filter-label">
                  <input type="radio" name="star" id="star5">
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                </label>
              </li>
            </ul>
          </div>

          <!-- apply-filter -->
          <div class="py-12">
            <a href="search-result.html" class="btn-primary apply-filter-btn">Apply Filter</a>
          </div>

          <!-- clear-all -->
          <div class="pt-12">
            <button type="button" class="clear-all-btn" data-bs-dismiss="modal" aria-label="Close">Clear All</button>
          </div>
        </div>
      </div>
    </div>
  </div>
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