<?php session_start(); ?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8">
    <title>Tasks List | TWJIH - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="B-Wise" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Sweet Alert css-->
    <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css">

    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min1.css" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="assets/css/app.min1.css" rel="stylesheet" type="text/css">
    <!-- custom Css-->
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css">


</head>

<body>


    <!-- Begin page -->
    <div id="layout-wrapper">

    <?php include('assets/compoment/header.php') ?>


    <!-- removeNotificationModal -->


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

                <!-- end page title -->

                <div class="row">
                    <div class="col-xxl-3">

                        <!--end card-->

                        <!--end card-->
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="d-flex mb-3">
                                    <h6 class="card-title mb-0 flex-grow-1">Dossiers imcomplet</h6>
                                    <div class="flex-shrink-0">
                                        <a href="list-ecoles-envoyées.php">
                                            <button type="button" onclick="window.location.href='upload-file.php'" class="btn btn-soft-danger btn-sm shadow-none">Ajouter des documents</button>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-bo dy border border-dashed border-end-0 border-start-0">

                                    <table class="table align-middle">
                                        <thead class="table-light">
                                            <tr>
                                                <th>École</th>
                                                <th>Manquant</th>
                                                <th>Upload</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list form-check-all">
                                            <?php
                                            include('conn.php');
                                            $sql = "SELECT * FROM dossier WHERE statut_interne = 2 and id_etudiant = " . $_SESSION['idr'] . "";
                                            $result = mysqli_query($coni, $sql);
                                            while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">

                                                            <div class="flex-grow-1 ms-2 name"><?php
                                                                                                $sql1 = "SELECT * FROM ecole WHERE id = " . $row['id_ecole'] . "";
                                                                                                $result1 = mysqli_query($coni, $sql1);
                                                                                                $row1 = mysqli_fetch_assoc($result1);
                                                                                                echo $row1['nom'];
                                                                                                ?></div>
                                                        </div>
                                                    </td>
                                                    <td class="etat-dossier"><?php echo $row['com'] ?> </td>
                                                    <td>
                                                        <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                            <a href="file-upload.php"><i class="ri-file-fill align-bottom text-muted"></i></a>
                                                        </li>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <br>
                                <div class="d-flex mb-3">
                                    <h6 class="card-title mb-0 flex-grow-1">Candidature envoyées</h6>
                                    <div class="flex-shrink-0">
                                        <a href="list-ecoles-encours.php">
                                            <button type="button" class="btn btn-soft-danger btn-sm shadow-none">voir Toute la liste</button>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body border border-dashed border-end-0 border-start-0">

                                    <table class="table align-middle">
                                        <thead class="table-light">
                                            <tr>
                                                <th>École</th>
                                                <th>Reponse de l'ecole</th>
                                                <th>Accusé</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list form-check-all">
                                            <?php
                                            include('conn.php');
                                            $sql = "SELECT * FROM dossier WHERE statut_interne = 3 and id_etudiant = " . $_SESSION['idr'] . " ORDER BY id DESC LIMIT 5";
                                            $result = mysqli_query($coni, $sql);
                                            while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-10.jpg" alt="" class="avatar-xxs rounded-circle image_src object-fit-cover">
                                                            </div>
                                                            <div class="flex-grow-1 ms-2 name"><?php
                                                                                                $sql1 = "SELECT * FROM ecole WHERE id = " . $row['id_ecole'] . "";
                                                                                                $result1 = mysqli_query($coni, $sql1);
                                                                                                $row1 = mysqli_fetch_assoc($result1);
                                                                                                echo $row1['nom'];
                                                                                                ?></div>
                                                        </div>
                                                    </td>
                                                    <td class="etat-dossier">aucune</td>
                                                    <td class="remarque"><li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                            <a href="../employees/acuse/<?php echo $row['id']?>_acuse.pdf"><i class="ri-download-fill align-bottom text-muted"></i></a>
                                                        </li></td>
                                                   
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <br>
                                <div class="d-flex mb-3">
                                    <h6 class="card-title mb-0 flex-grow-1">Ouverture prochaine</h6>
                                    <div class="flex-shrink-0">
                                        <a href="list-ecoles-non-envoyées.php">
                                            <button type="button" class="btn btn-soft-danger btn-sm shadow-none">voir Toute la liste</button>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body border border-dashed border-end-0 border-start-0">

                                    <table class="table align-middle">
                                        <thead class="table-light">
                                            <tr>
                                                <th>École</th>
                                                <th>État du Dossier</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list form-check-all">
                                            <?php
                                            include('conn.php');
                                            $sql = "SELECT *  FROM ecole_cand_preiod WHERE date_debut > CURDATE()
                                            ORDER BY id DESC LIMIT 5";
                                            $result = mysqli_query($coni, $sql);
                                            while ($row = mysqli_fetch_assoc($result)) {
                                            ?>

                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            
                                                            <div class="flex-grow-1 ms-2 name"><?php
                                                                                                $sql1 = "SELECT * FROM ecole WHERE id = " . $row['id_ecole'] . "";
                                                                                                $result1 = mysqli_query($coni, $sql1);
                                                                                                $row1 = mysqli_fetch_assoc($result1);
                                                                                                echo $row1['nom'];
                                                                                                ?> </div>
                                                        </div>
                                                    </td>
                                                    <td class="etat-dossier"><?php echo $row['date_debut']?></td>
                                                    
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <!--end card-->

                    </div>
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

    <!--end back-to-top-->

    <!--preloader-->




    <!-- Theme Settings -->


    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!-- list.js min js -->
    <script src="assets/libs/list.js/list.min.js"></script>

    <!--list pagination js-->
    <script src="assets/libs/list.pagination.js/list.pagination.min.js"></script>

    <!-- titcket init js -->
    <script src="assets/js/pages/tasks-list.init.js"></script>

    <!-- Sweet Alerts js -->
    <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>

</html>