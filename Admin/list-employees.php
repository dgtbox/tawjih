<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Dashboard | TWJIH - Admin & Dashboard Template</title>
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
                                                <h4 class="fs-20 mb-1">Liste des Employées</h4>
                                            </div>

                                        </div><!-- end card header -->
                                    </div>
                                    <!--end col-->
                                </div>


                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-header border-0 align-items-center d-flex">
                                                <h4 class="card-title mb-0  col-4">Liste</h4>
                                                <div class="col-6">
                                                    <div class="d-flex">
                                                        <form class="app-search d-none d-md-block">
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" placeholder="Search..." autocomplete="off" id="search-options" value="">
                                                                <span class="mdi mdi-magnify search-widget-icon"></span>
                                                                <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none" id="search-close-options"></span>
                                                            </div>


                                                        </form>
                                                    </div>
                                                </div>
                                                <a href="add-employees.php">
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-primary rounded fs-3">
                                                            <i class="bx bx-plus"></i>
                                                        </span>
                                                    </div>
                                                </a>
                                            </div><!-- end card header -->

                                            <div class="card-body">
                                                <div class="table-responsive table-card mb-4">
                                                    <table class="table align-middle table-nowrap mb-0" id="tasksTable">
                                                        <thead class="table-light text-muted">
                                                            <tr>
                                                                <th class="sort">Nom</th>
                                                                <th class="sort">Prénom</th>
                                                                <th class="sort">CIN</th>
                                                                <th class="col-2 ">Modifier</th>
                                                                <th class="ol-2">Accé </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="list form-check-all">
                                                            <?php
                                                            $top = 0;
                                                            if (isset($_GET['top'])) {
                                                                $top = $_GET['top'];
                                                            }
                                                            $sql = "SELECT * FROM employe limit $top , 20";

                                                            $top = $top + 20;
                                                            include('conn.php');
                                                            $result = mysqli_query($coni, $sql);
                                                            while ($row = mysqli_fetch_assoc($result)) {


                                                            ?>
                                                                <tr>


                                                                    <td class="assignedto">
                                                                        <?php echo $row['nom'] ?>


                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div class="flex-grow-1">
                                                                                <?php echo $row['prenom'] ?>
                                                                            </div>

                                                                        </div>
                                                                    </td>

                                                                    <td class="assignedto">
                                                                        <?php echo $row['CIN'] ?>
                                                                    </td>
                                                                    <td>
                                                                        <div class="flex-shrink-0 ms-0">
                                                                            <li class="list-inline-item">

                                                                                <a href="edit-employees.php">
                                                                                    <i class="ri-edit-fill align-bottom me-2 text-muted"></i>
                                                                                </a>

                                                                            </li>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <?php
                                                                        $sql2 = "SELECT * FROM logs WHERE idrelate = " . $row['id'] . " and stat = 3";
                                                                        $result2 = mysqli_query($coni, $sql2);
                                                                        $row2 = mysqli_fetch_assoc($result2);
                                                                        ?>
                                                                            <a href="suspend-exec.php?id=<?php
                                                                                                            echo $row2['id']; ?>&cs=<?php
                                                                            echo $row2['acce']; ?>" class="btn btn-sm">
                                                                                <?php
                                                                                if ($row2['acce'] == 1) {
                                                                                ?>
                                                                                    <span class='badge bg-success'>Autorisé</span>
                                                                                <?php
                                                                                } else if ($row2['acce'] == 0) {
                                                                                ?>
                                                                                    <span class='badge bg-danger'>Suspendu</span>
                                                                                <?php
                                                                                }
                                                                                ?>
                                                                            </a>
                                                                    </td>
                                                                </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                    </table>
                                                    <!--end table-->
                                                    <div class="noresult" style="display: none">
                                                        <div class="text-center">
                                                            <lord-icon src="../../../msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                                            <h5 class="mt-2">Sorry! No Result Found</h5>
                                                            <p class="text-muted mb-0">We've searched more than 200k+ tasks We did not find any tasks for you search.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-end mt-2">
                                                    <div class="pagination-wrap hstack gap-2">
                                                        <a class="page-item pagination-prev disabled" href="#">
                                                            Previous
                                                        </a>
                                                        <ul class="pagination listjs-pagination mb-0"></ul>
                                                        <a class="page-item pagination-next" href="#">
                                                            Next
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end card -->
                                    </div><!-- end col -->


                                </div>

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
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © TWJIH.
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
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
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