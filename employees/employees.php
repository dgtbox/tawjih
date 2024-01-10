<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>|AL RAED| PLATEFORME EN LIGNE</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="B-Wise" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- jsvectormap css -->
    <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />


</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php include('compoments/header.php') ?>


<!-- removeNotificationModal -->
<div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Are you sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
        <!-- ========== App Menu ========== -->
        <?php include('compoments/sidebar.php') ?>

        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col">

                            <div class="h-100">
                                <div class="row mb-3 pb-1">
                                    <div class="col-12">
                                        <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                            <div class="flex-grow-1">
                                                <h4 class="fs-16 mb-1">Salut, Anna!</h4>
                                                <p class="text-muted mb-0">Voici votre task d'Aujourd'hui.</p>
                                            </div>
                                            <div class="mt-3 mt-lg-0">
                                                <form action="javascript:void(0);">
                                                    <div class="row g-3 mb-0 align-items-center">
                                                        <div class="col-sm-auto">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control border-0 dash-filter-picker shadow" data-provider="flatpickr" data-range-date="true" data-date-format="d M, Y" data-deafult-date="01 Jan 2022 to 31 Jan 2022">
                                                                <div class="input-group-text bg-primary border-primary text-white">
                                                                    <i class="ri-calendar-2-line"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </form>
                                            </div>
                                        </div><!-- end card header -->
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                                <div class="row">
                                    <div class="col-xl-4 col-md-6">
                                        <!-- card -->
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Dossiers Terminé</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mt-4">
                                                    <div>
                                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="<?php
                                                        $sql = "SELECT count(*) as total FROM dossier where statut_interne = 3";
                                                        $result = mysqli_query($coni, $sql);
                                                        $row = mysqli_fetch_assoc($result);
                                                        echo $row['total'];
                                                        ?>">0</span> </h4>
                                                        <a href="" class="text-decoration-underline">Voir toute la liste</a>
                                                    </div>
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-success rounded fs-3">
                                                            <i class="bx bx-check"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->

                                    <div class="col-xl-4 col-md-6">
                                        <!-- card -->
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Dossiers à envoyé</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mt-4">
                                                    <div>
                                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="
                                                        <?php
                                                        $sql = "SELECT count(*) as total FROM dossier where statut_interne = 0";
                                                        $result = mysqli_query($coni, $sql);
                                                        $row = mysqli_fetch_assoc($result);
                                                        echo $row['total'];
                                                        ?>
                                                        ">0</span></h4>
                                                        <a href="" class="text-decoration-underline">Voir toute la liste</a>
                                                    </div>
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-info rounded fs-3">
                                                            <i class="bx bx-windows"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->

                                    <div class="col-xl-4 col-md-6">
                                        <!-- card -->
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
DOSSIERS EN ATTENTE</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mt-4">
                                                    <div>
                                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="<?php
                                                        $sql = "SELECT count(*) as total FROM dossier where statut_interne = 1 or statut_interne = 2";
                                                        $result = mysqli_query($coni, $sql);
                                                        $row = mysqli_fetch_assoc($result);
                                                        echo $row['total'];
                                                        ?>">0</span> </h4>
                                                        <a href="" class="text-decoration-underline">Voir toute la liste</a>
                                                    </div>
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-warning rounded fs-3">
                                                            <i class="bx bx-window-close"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->

                                </div> <!-- end row-->


                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="card">
                                            <div class="card-header align-items-center d-flex">
                                                <h4 class="card-title mb-0 flex-grow-1">Tout les dossier</h4>
                                                <div class="flex-shrink-0">
                                                </div>
                                            </div><!-- end card header -->

                                            <div class="card-body">
                                                <div class="table-responsive table-card">
                                                    <table class="table table-hover table-centered align-middle table-nowrap mb-0">
                                                    <tbody class="list form-check-all">
                                                    <?php
                                                    include('conn.php');
                                                    $sql = "SELECT * FROM dossier";
                                                    $result = mysqli_query($coni, $sql);
                                                    while ($row = mysqli_fetch_assoc($result)) {


                                                        ?>
                                                        <tr>
                                                            <td>
                                                                <?php
                                                                $sql1 = "SELECT * FROM etudiant WHERE id = ".$row['id_etudiant'];
                                                                $result1 = mysqli_query($coni, $sql1);
                                                                while ($row1 = mysqli_fetch_assoc($result1)) {
                                                                    echo $row1['nom']." ".$row1['prenom'];
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $sql2 = "SELECT * FROM ecole WHERE id = ".$row['id_ecole'];
                                                                $result2 = mysqli_query($coni, $sql2);
                                                                while ($row2 = mysqli_fetch_assoc($result2)) {
                                                                    echo $row2['nom'];
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                echo $row['date_depot'];
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                if($row['statut_interne'] == 0) {
                                                                    echo "<span class='bg-danger'> Jamais traité </span>";
                                                                }
                                                                if($row['statut_interne'] == 1) {
                                                                    echo "<span class='bg-warning'> En cours de traitement </span>";
                                                                }
                                                                if($row['statut_interne'] == 2) {
                                                                    echo "<span class='bg-warning'> Probleme de dossier </span>";
                                                                }
                                                                if($row['statut_interne'] == 3) {
                                                                    echo "<span class='bg-success'>Dossier traité </span>";
                                                                }

                                                                ?>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                    }
                                                    ?>
                                                    </tbody>
                                                    </table>
                                                </div>

                                                <div class="align-items-center mt-4 pt-2 justify-content-between row text-center text-sm-start">
                                                    <div class="col-sm">
                                                        <div class="text-muted">
                                                            Showing <span class="fw-semibold">5</span> of <span class="fw-semibold">25</span> Results
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-auto  mt-3 mt-sm-0">
                                                        <ul class="pagination pagination-separated pagination-sm mb-0 justify-content-center">
                                                            <li class="page-item disabled">
                                                                <a href="#" class="page-link">←</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a href="#" class="page-link">1</a>
                                                            </li>
                                                            <li class="page-item active">
                                                                <a href="#" class="page-link">2</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a href="#" class="page-link">3</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a href="#" class="page-link">→</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="card card-height-100">
                                            <div class="card-header align-items-center d-flex">
                                                <h4 class="card-title mb-0 flex-grow-1">DOssier jamais traité</h4>
                                                <div class="flex-shrink-0">
                                                </div>
                                            </div><!-- end card header -->

                                            <div class="card-body">
                                                <div class="table-responsive table-card">
                                                    <table class="table table-centered table-hover align-middle table-nowrap mb-0">
                                                    <tbody class="list form-check-all">
                                                    <?php
                                                    include('conn.php');
                                                    $sql = "SELECT * FROM dossier where statut_interne = 0";
                                                    $result = mysqli_query($coni, $sql);
                                                    while ($row = mysqli_fetch_assoc($result)) {


                                                        ?>
                                                        <tr>
                                                            <td>
                                                                <?php
                                                                $sql1 = "SELECT * FROM etudiant WHERE id = ".$row['id_etudiant'];
                                                                $result1 = mysqli_query($coni, $sql1);
                                                                while ($row1 = mysqli_fetch_assoc($result1)) {
                                                                    echo $row1['nom']." ".$row1['prenom'];
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $sql2 = "SELECT * FROM ecole WHERE id = ".$row['id_ecole'];
                                                                $result2 = mysqli_query($coni, $sql2);
                                                                while ($row2 = mysqli_fetch_assoc($result2)) {
                                                                    echo $row2['nom'];
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                echo $row['date_depot'];
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                if($row['statut_interne'] == 0) {
                                                                    echo "<span class='bg-danger'> Jamais traité </span>";
                                                                }
                                                                if($row['statut_interne'] == 1) {
                                                                    echo "<span class='bg-warning'> En cours de traitement </span>";
                                                                }
                                                                if($row['statut_interne'] == 2) {
                                                                    echo "<span class='bg-warning'> Probleme de dossier </span>";
                                                                }
                                                                if($row['statut_interne'] == 3) {
                                                                    echo "<span class='bg-success'>Dossier traité </span>";
                                                                }

                                                                ?>
                                                            </td>
                                                            
                                                        </tr>
                                                        <?php
                                                    }
                                                    ?>
                                                    </tbody>
                                                    </table><!-- end table -->
                                                </div>

                                                <div class="align-items-center mt-4 pt-2 justify-content-between row text-center text-sm-start">
                                                    <div class="col-sm">
                                                        <div class="text-muted">
                                                            Showing <span class="fw-semibold">5</span> of <span class="fw-semibold">25</span> Results
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-auto  mt-3 mt-sm-0">
                                                        <ul class="pagination pagination-separated pagination-sm mb-0 justify-content-center">
                                                            <li class="page-item disabled">
                                                                <a href="#" class="page-link">←</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a href="#" class="page-link">1</a>
                                                            </li>
                                                            <li class="page-item active">
                                                                <a href="#" class="page-link">2</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a href="#" class="page-link">3</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a href="#" class="page-link">→</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div> <!-- .card-body-->
                                        </div> <!-- .card-->
                                    </div> <!-- .col-->
                                </div> <!-- end row-->


                            </div> <!-- end .h-100-->

                        </div> <!-- end col -->

                    </div>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © TWJIH.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by B-Wise
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <div class="customizer-setting d-none d-md-block">
        <div class="btn-info rounded-pill shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
        </div>
    </div>

    <!-- Theme Settings -->
    <?php include('../theme_settings.php') ?>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Vector map-->
    <script src="assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="assets/libs/jsvectormap/maps/world-merc.js"></script>

    <!--Swiper slider js-->
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- Dashboard init -->
    <script src="assets/js/pages/dashboard-ecommerce.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>

</html>