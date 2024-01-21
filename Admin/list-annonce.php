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
                                                <h4 class="fs-20 mb-1">Liste des annonces</h4>
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
                                                                <input type="text" class="form-control" placeholder="Search..." autocomplete="off"
                                                                    id="search-options" value="">
                                                                <span class="mdi mdi-magnify search-widget-icon"></span>
                                                                <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none"
                                                                    id="search-close-options"></span>
                                                            </div>
                                                            
                                                            
                                                        </form>
                                                    </div>
                                                </div>
                                                <a href="add-article.php">
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-primary rounded fs-3">
                                                            <i class="bx bx-plus"></i>
                                                        </span>
                                                    </div></a>
                                            </div><!-- end card header -->

                                            <div class="card-body">
                                                <div class="table-responsive table-card mb-4">
                                                    <table class="table align-middle table-nowrap mb-0" id="tasksTable">
                                                        <thead class="table-light text-muted">
                                                            <tr>

                                                                <th class="sort" >Nom d'annonce</th>
                                                                <th class="sort" >date de publication</th>
                                                                <th class="col-2 " >Action</th>
                                                                <th class="col-2 " >Modifier</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="list form-check-all">
                                                        <?php
                                                        $top = 0;
                                                        if(isset($_GET['top']))
                                                        {
                                                            $top = $_GET['top'];
                                                        }
                                                        $sql = "SELECT * FROM etudiant limit $top , 20";

                                                        $top = $top + 20;
                                                        include('conn.php');
                                                        $result = mysqli_query($coni, $sql);
                                                        while ($row=mysqli_fetch_assoc($result))
                                                        {


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
                                                                    <?php echo $row['cin'] ?>


                                                                </td>
                                                                <td>
                                                                    <div class="flex-shrink-0 ms-0">
                                                                        <li class="list-inline-item">
                                                                                    
                                                                            <a href="edit-etudient.php">
                                                                                <i class="ri-edit-fill align-bottom me-2 text-muted"></i>
                                                                            </a>
                                                                        
                                                                        </li>
                                                                    </div>
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
                                                        <a class="page-item pagination-prev disabled" href="list-etudient.php?top=<?php
                                                        $prev = $top - 40;
                                                        if($prev < 0)
                                                        {
                                                            $prev = 0;
                                                        }
                                                        echo $prev?>">
                                                            Previous
                                                        </a>
                                                        <ul class="pagination listjs-pagination mb-0"></ul>
                                                        <a class="page-item pagination-next" href="list-etudient.php?top=<?php
                                                        $sql_qry = "select count(*) as total from etudiant";
                                                        $result = mysqli_query($coni, $sql_qry);
                                                        $row = mysqli_fetch_assoc($result);
                                                        $total = $row['total'];
                                                        if($top > $total)
                                                        {
                                                            $top = $total-10;
                                                        }
                                                        echo $top?>">
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