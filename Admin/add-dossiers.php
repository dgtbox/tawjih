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
<style>
    .text-left{
        
    }
</style>

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php include('compoments/Header.php') ?>


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

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Ajouter des dossiers</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="list-dossiers.html">Dossiers</a></li>
                                        <li class="breadcrumb-item active">Ajoute un dossier</li>
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
                                    <h4 class="card-title mb-0 flex-grow-1">Entrer les informations du dossier</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div class="live-preview">
                                        <form action="add-dossiers-exec.php" method="POST">
                                            <div class="row">
                                                <div class="col-md-4    ">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Nom de l'étudiant</label>
                                                        <select type="text" class="form-control" placeholder="Entrez le nom" name="nom1" required>
                                                        <option selected>Selectioner l'étudiant</option>

                                                        <?php include("conn.php");
                                            
                                                                $sql = "select * from etudiant";
                                                                $result = mysqli_query($coni, $sql);
                                                                while ($row = mysqli_fetch_assoc($result))
                                                                {
                                                                    echo '<option value="'.$row["id"].'">'.$row["nom"].'</option>';
                                                                }
                                                            
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <!--end col-->
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Nom de l'étudiant</label>
                                                            <button type="button" class="form-control col-xs-11 text-left" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <p class="mb-0 text-left">Veuillez sélectionne un parent</p>

                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-md p-4">
                                                                <form>
                                                                    <div class="mb-2">
                                                                        <p class="checkbox-title">Chercher par nom ou prénom</p>
                                                                        <div class="form-custom">
                                                                            <input type="text" id="eInput" onkeyup="filtere()" class="form-control bg-grey" placeholder="Enter Customer Name">
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-2">
                                                                        <label class="form-label" for="exampleDropdownFormPassword">Password</label>
                                                                        <input type="password" class="form-control" id="exampleDropdownFormPassword" placeholder="Password">
                                                                    </div>
                                                                    <div class="mb-2">
                                                                        <div class="form-check custom-checkbox">
                                                                            <input type="checkbox" class="form-check-input" id="rememberdropdownCheck">
                                                                            <label class="form-check-label" for="rememberdropdownCheck">Remember me</label>
                                                                        </div>
                                                                    </div>
                                                                    <button type="submit" class="btn btn-primary">Sign in</button>
                                                                </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Nom de l'école</label>
                                                        <select type="text" class="form-control" placeholder="Entrez le nom" name="nom2" required>
                                                        <option selected>Selectioner l'école</option>

                                                        <?php include("conn.php");
                                            
                                                                $sql = "select * from ecole";
                                                                $result = mysqli_query($coni, $sql);
                                                                while ($row = mysqli_fetch_assoc($result))
                                                                {
                                                                    echo '<option value="'.$row["id"].'">'.$row["nom"].'</option>';
                                                                }
                                                            
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Choix1</label>
                                                        <select type="text" class="form-control" placeholder="" name="choix1" required>
                                                            <option selected>Selectioner choix1</option>
                                                            <option >Selectioner choix1</option>
                                                            <option >Selectioner choix1</option>
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Choix2</label>
                                                        <select type="text" class="form-control" placeholder="" name="choix2" required>
                                                            <option selected>Selectioner choix2</option>
                                                            <option >Selectioner choix2</option>
                                                            <option >Selectioner choix2</option>
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Choix3</label>
                                                        <select type="text" class="form-control" placeholder="" name="choix3" required>
                                                            <option selected>Selectioner choix3</option>
                                                            <option >Selectioner choix3</option>
                                                            <option >Selectioner choix3</option>
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Statut interne</label>
                                                        <input type="text" class="form-control" placeholder="" name="statutint" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Statut externe</label>
                                                        <input type="text" class="form-control" placeholder="" name="statutext" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Date de depot</label>
                                                        <input type="date" class="form-control" placeholder="dd/mm/yyyy" name="datedepot" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Date de reponse</label>
                                                        <input type="date" class="form-control" placeholder="dd/mm/yyyy" name="daterepon" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Date de reponse externe</label>
                                                        <input type="date" class="form-control" placeholder="dd/mm/yyyy" name="datereponext" required>
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
    <script src="assets/js/pages/password-addon.init.js"></script>

</body>

</html>