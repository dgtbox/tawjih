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
    <!-- quill css -->
    <link href="assets/libs/quill/quill.core.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/quill/quill.bubble.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/quill/quill.snow.css" rel="stylesheet" type="text/css">

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

        <?php include('compoments/Header.php') ?>


        <!-- removeNotificationModal -->
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

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Ajouter des articles</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="list-dossiers.html">Articles</a></li>
                                    <li class="breadcrumb-item active">Ajoute un article</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xxl-6">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Entrer les informations du article</h4>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="live-preview">
                                    <form action="add-article-exec.php" enctype="multipart/form-data" method="POST">
                                        <div class="row">
                                            <div class="col-md-4    ">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Titre d'article</label>
                                                    <input required type="text" class="form-control" placeholder="Entrez le titre" name="tit" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4    ">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Sous titre d'article</label>
                                                    <input type="text" class="form-control" placeholder="Entrez le sous titre" name="sub" >
                                                </div>
                                            </div>
                                            <div class="col-md-4    ">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Image</label>
                                                    <input type="file" class="form-control" placeholder="image" name="fl" >
                                                </div>
                                            </div>
                                            <div class="col-12-md-4    ">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Contenu</label>
                                                    <textarea type="text" class="form-control" placeholder="Entrez le sous titre" name="cont" ></textarea>
                                                </div>
                                            </div>

                                            <!--end col-->
                                            <div class="col-lg-12">
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-primary">Valider</button>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>

            </div> <!-- container-fluid -->
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


    <!-- ckeditor -->
    <script src="assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>

    <!-- quill js -->
    <script src="assets/libs/quill/quill.min.js"></script>

    <!-- init js -->
    <script src="assets/js/pages/form-editor.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
    <script src="assets/js/pages/password-addon.init.js"></script>

</body>

</html>