<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

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
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="NotificationModalbtn-close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mt-2 text-center">
                            <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                                colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                            <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                <h4>Are you sure ?</h4>
                                <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete
                                It!</button>
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
            <?php
            include('conn.php');

            $id = $_GET['id'];
            $sq = "UPDATE dossier SET statut_interne = '3' where id = '$id'";
            mysqli_query($coni, $sq);
            $sql = "SELECT * FROM dossier WHERE id = $id";
            $result = mysqli_query($coni, $sql);
            $row = mysqli_fetch_assoc($result);
            $sql1 = "SELECT * FROM etudiant WHERE id = $row[id_etudiant]";
            $result1 = mysqli_query($coni, $sql1);
            $row1 = mysqli_fetch_assoc($result1);
            $sql2 = "SELECT * FROM ecole WHERE id = $row[id_ecole]";
            $result2 = mysqli_query($coni, $sql2);
            $row2 = mysqli_fetch_assoc($result2);
            ?>

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Task Details</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tasks</a></li>
                                        <li class="breadcrumb-item active">Task Details</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xxl-3">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h6 class="card-title mb-3 flex-grow-1 text-start">Time Tracking</h6>
                                    <div class="mb-2">
                                        <lord-icon src="../../../kbtmbyzy.json" trigger="loop" colors="primary:#405189,secondary:#02a8b5" style="width:90px;height:90px"></lord-icon>
                                    </div>
                                    <h3 class="mb-1">9 hrs 13 min</h3>
                                    <h5 class="fs-14 mb-4">Profile Page Structure</h5>
                                    <div class="hstack gap-2 justify-content-center">
                                        <button class="btn btn-danger btn-sm"><i class="ri-stop-circle-line align-bottom me-1"></i> Stop</button>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Attachments</h5>
                                    <div class="vstack gap-2">
                                        <form action="upload-exec.php" enctype="multipart/form-data" method="post">
                                        <div class="mt-2">
                                            <input required class="form-label" for="formFile" type="file" name="fl">
                                        </div>
                                        <input type="hidden" name="id" value="<?php
                                        echo $id;
                                        ?>">
                                        
                                        <div class="mt-2 text-center">
                                            <button type="submit" class="btn btn-success">Finalisé</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--end card-->
                        </div>
                        <!---end col-->
                        <div class="col-xxl-9">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-card">
                                        <table class="table mb-0">
                                            <tbody>
                                            <tr>
                                                <td class="fw-medium">Numero dossier</td>
                                                <td><?php echo $row['id'] ?></td>
                                            </tr>
                                            <tr>
                                                <td class="fw-medium">Nom</td>
                                                <td><?php echo $row1['nom'] ?></td>

                                            </tr>
                                            <tr>
                                                <td class="fw-medium">Prenom</td>
                                                <td><?php echo $row1['prenom'] ?></td>
                                            </tr>
                                            <tr>
                                                <td class="fw-medium">CIN</td>
                                                <td><?php echo $row1['cin'] ?></td>
                                            </tr>
                                            <tr>
                                                <td class="fw-medium">Numero Massar</td>
                                                <td><?php echo $row1['massar'] ?></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <!--end table-->
                                    </div>
                                </div>
                            </div>
                            <!--end card-->
                            <!--end card-->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <!-- end modal -->

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
        <div class="btn-info rounded-pill shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas"
            data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
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