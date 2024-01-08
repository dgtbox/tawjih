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

            <div class="page-content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body checkout-tab">

                                    <form action="#">
                                        <div class="step-arrow-nav mt-n3 mx-n3 mb-3">

                                            <ul class="nav nav-pills nav-justified custom-nav" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link fs-15 p-3 active" id="pills-bill-info-tab" data-bs-toggle="pill" data-bs-target="#pills-bill-info" type="button" role="tab" aria-controls="pills-bill-info" aria-selected="true">
                                                        <i class="ri-user-2-line fs-16 p-2 bg-primary-subtle text-primary rounded-circle align-middle me-2"></i> Personal Info
                                                    </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link fs-15 p-3" id="pills-bill-address-tab" data-bs-toggle="pill" data-bs-target="#pills-bill-address" type="button" role="tab" aria-controls="pills-bill-address" aria-selected="false">
                                                        <i class="ri-user-star-line fs-16 p-2 bg-primary-subtle text-primary rounded-circle align-middle me-2"></i> fichier
                                                    </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link fs-15 p-3" id="pills-payment-tab" data-bs-toggle="pill" data-bs-target="#pills-payment" type="button" role="tab" aria-controls="pills-payment" aria-selected="false">
                                                        <i class="ri-school-line fs-16 p-2 bg-primary-subtle text-primary rounded-circle align-middle me-2"></i> Les écoles souhaitées
                                                    </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link fs-15 p-3" id="pills-finish-tab" data-bs-toggle="pill" data-bs-target="#pills-finish" type="button" role="tab" aria-controls="pills-finish" aria-selected="false">
                                                        <i class="ri-checkbox-circle-line fs-16 p-2 bg-primary-subtle text-primary rounded-circle align-middle me-2"></i> Finish
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="pills-bill-info" role="tabpanel" aria-labelledby="pills-bill-info-tab">
                                                <div>
                                                    <h5 class="mb-3">Informations de Robert Mcmahon</h5>
                                                </div>

                                                <div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="mb-3">
                                                                <label for="billinginfo-firstName" class="form-label">Prénom</label>
                                                                <input type="text" class="form-control" id="billinginfo-firstName" value="Robert">
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="mb-3">
                                                                <label for="billinginfo-lastName" class="form-label">Nom</label>
                                                                <input type="text" class="form-control" id="billinginfo-lastName" value="Mcmahon">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="mb-3">
                                                                <label for="billinginfo-email" class="form-label">Email </label>
                                                                <input type="email" class="form-control" id="billinginfo-email" value="RobertMcmahon@gmail.com">
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="mb-3">
                                                                <label for="billinginfo-phone" class="form-label">Tel</label>
                                                                <input type="text" class="form-control" id="billinginfo-phone" value="0606060606">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="mb-3">
                                                                <label for="billinginfo-CIN" class="form-label">CIN</label>
                                                                <input type="text" class="form-control" id="billinginfo-CIN" value="Jxxxxx">
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="mb-3">
                                                                <label for="billinginfo-phone" class="form-label">Etat de dossier</label>
                                                                <input type="text" class="form-control" id="billinginfo-etat" value="terminé">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="mb-3">
                                                                <label for="billinginfo-email" class="form-label">Date de naissance </label>
                                                                <input type="date" class="form-control" id="billinginfo-date">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="mb-3">
                                                                <label for="billinginfo-phone" class="form-label">Lieu de naissance</label>
                                                                <input type="text" class="form-control" id="billinginfo-etat" value="Los Angeles">
                                                            </div>
                                                        </div>



                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="state" class="form-label">Genre</label>
                                                                <select class="form-select" id="state" data-plugin="choices">
                                                                    <option value="Masculin">Masculin </option>
                                                                    <option value="Féminin ">Féminin </option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="mb-3">
                                                                <label for="billinginfo-phone" class="form-label">Nationalité</label>
                                                                <input type="text" class="form-control" id="billinginfo-etat" value="M">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="mb-3">
                                                                <label for="billinginfo-email" class="form-label">Date de bacalauria </label>
                                                                <input type="date" class="form-control" id="billinginfo-date">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="mb-3">
                                                                <label for="billinginfo-Niveau" class="form-label">Niveau</label>
                                                                <input type="text" class="form-control" id="billinginfo-Niveau" value="2eme bacalauria">
                                                            </div>
                                                        </div>



                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="mb-3">
                                                                <label for="billinginfo-Branche" class="form-label">Branche</label>
                                                                <input type="text" class="form-control" id="billinginfo-Branche" value="Science Math B">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="mb-3">
                                                                <label for="billinginfo-Noteregional" class="form-label">Note de regional</label>
                                                                <input type="text" class="form-control" id="billinginfo-noteregional" value="19.99">
                                                            </div>
                                                        </div>



                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="mb-3">
                                                                <label for="billinginfo-noteclasse" class="form-label">Note de classe</label>
                                                                <input type="text" class="form-control" id="billinginfo-noteclasse" value="19.99">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="mb-3">
                                                                <label for="billinginfo-Notenational" class="form-label">Note de National</label>
                                                                <input type="text" class="form-control" id="billinginfo-notenational" value="19.99">
                                                            </div>
                                                        </div>



                                                    </div>



                                                    <div class="mb-3">

                                                        <label for="billinginfo-address" class="form-label">Address</label>
                                                        <input class="form-control" id="billinginfo-address" rows="3" value="mjilli5 9por rue 8 afzad"></input>
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-3">Informations des parents</h5>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="mb-3">
                                                                    <label for="billinginfo-firstName" class="form-label">Prénom de votre père</label>
                                                                    <input type="text" class="form-control" id="billinginfo-firstName" value="Robert">
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="mb-3">
                                                                    <label for="billinginfo-lastName" class="form-label">Nom de votre Père</label>
                                                                    <input type="text" class="form-control" id="billinginfo-lastName" value="Mcmahon">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="mb-3">
                                                                    <label for="billinginfo-phone" class="form-label">Tel</label>
                                                                    <input type="text" class="form-control" id="billinginfo-phone" value="0606060606">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="mb-3">
                                                                    <label for="billinginfo-CIN" class="form-label">CIN</label>
                                                                    <input type="text" class="form-control" id="billinginfo-CIN" value="Jxxxxx">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">


                                                            <div class="col-sm-6">
                                                                <div class="mb-3">
                                                                    <label for="billinginfo-phone" class="form-label">Profession du père</label>
                                                                    <input type="text" class="form-control" id="billinginfo-etat" value="comtable">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="mb-3">
                                                                    <label for="billinginfo-firstName" class="form-label">Prénom de votre mère</label>
                                                                    <input type="text" class="form-control" id="billinginfo-firstName" value="Robert">
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="mb-3">
                                                                    <label for="billinginfo-lastName" class="form-label">Nom de votre Mère</label>
                                                                    <input type="text" class="form-control" id="billinginfo-lastName" value="Mcmahon">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="mb-3">
                                                                    <label for="billinginfo-phone" class="form-label">Tel</label>
                                                                    <input type="text" class="form-control" id="billinginfo-phone" value="0606060606">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="mb-3">
                                                                    <label for="billinginfo-CIN" class="form-label">CIN</label>
                                                                    <input type="text" class="form-control" id="billinginfo-CIN" value="Jxxxxx">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">


                                                            <div class="col-sm-6">
                                                                <div class="mb-3">
                                                                    <label for="billinginfo-phone" class="form-label">Profession du mère</label>
                                                                    <input type="text" class="form-control" id="billinginfo-etat" value="comtable">
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>



                                                </div>
                                            </div>
                                            <!-- end tab pane -->

                                            <div class="tab-pane fade" id="pills-bill-address" role="tabpanel" aria-labelledby="pills-bill-address-tab">
                                                <div>
                                                    <h5 class="mb-1">les fichiers de Robert Mcmahon</h5>
                                                </div>
                                                <div class="mt-4">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-sm-6">
                                                            <div class="mb-3">
                                                                <h5 class="fs-14 mb-0">Photo d'etudient</h5>
                                                                <div class="row gallery-wrapper">
                                                                    <div class="element-item col-xxl-3 col-xl-12 col-sm-12 project designing development" data-category="designing development">
                                                                        <div class="gallery-box card">
                                                                            <div class="gallery-container">
                                                                                <a class="image-popup" href="assets/images/small/img-1.jpg" title="">
                                                                                    <img class="gallery-img img-fluid mx-auto" src="assets/images/small/img-1.jpg" alt="" />

                                                                                </a>
                                                                            </div>

                                                                            <div class="box-content">
                                                                                <div class="d-flex align-items-center mt-1">
                                                                                    <div class="flex-shrink-0">
                                                                                        <div class="d-flex gap-3">
                                                                                            <button id="exportButton" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0 shadow-none" onclick="exportImages()">
                                                                                                <i class="ri-download-line text-muted align-bottom me-1"></i>Exporter les images</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 col-sm-6">
                                                            <div class="mb-3">
                                                                <h5 class="fs-14 mb-0">CIN 1er face</h5>
                                                                <div class="row gallery-wrapper">
                                                                    <div class="element-item col-xxl-3 col-xl-12 col-sm-12 project designing development" data-category="designing development">
                                                                        <div class="gallery-box card">
                                                                            <div class="gallery-container">
                                                                                <a class="image-popup" href="assets/images/small/img-1.jpg" title="">
                                                                                    <img class="gallery-img img-fluid mx-auto" src="assets/images/small/img-1.jpg" alt="" />

                                                                                </a>
                                                                            </div>

                                                                            <div class="box-content">
                                                                                <div class="d-flex align-items-center mt-1">
                                                                                    <div class="flex-shrink-0">
                                                                                        <div class="d-flex gap-3">
                                                                                            <button id="exportButton" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0 shadow-none" onclick="exportImages()">
                                                                                                <i class="ri-download-line text-muted align-bottom me-1"></i>Exporter les images</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-sm-6">
                                                            <div class="mb-3">
                                                                <h5 class="fs-14 mb-0">CIN 2eme face</h5>
                                                                <div class="row gallery-wrapper">
                                                                    <div class="element-item col-xxl-3 col-xl-12 col-sm-12 project designing development" data-category="designing development">
                                                                        <div class="gallery-box card">
                                                                            <div class="gallery-container">
                                                                                <a class="image-popup" href="assets/images/small/img-1.jpg" title="">
                                                                                    <img class="gallery-img img-fluid mx-auto" src="assets/images/small/img-1.jpg" alt="" />

                                                                                </a>
                                                                            </div>

                                                                            <div class="box-content">
                                                                                <div class="d-flex align-items-center mt-1">
                                                                                    <div class="flex-shrink-0">
                                                                                        <div class="d-flex gap-3">
                                                                                            <button id="exportButton" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0 shadow-none" onclick="exportImages()">
                                                                                                <i class="ri-download-line text-muted align-bottom me-1"></i>Exporter les images</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-sm-6">
                                                            <div class="mb-3">
                                                                <h5 class="fs-14 mb-0">Bacalauria</h5>
                                                                <div class="row gallery-wrapper">
                                                                    <div class="element-item col-xxl-3 col-xl-12 col-sm-12 project designing development" data-category="designing development">
                                                                        <div class="gallery-box card">
                                                                            <div class="gallery-container">
                                                                                <a class="image-popup" href="assets/images/small/img-1.jpg" title="">
                                                                                    <img class="gallery-img img-fluid mx-auto" src="assets/images/small/img-1.jpg" alt="" />

                                                                                </a>
                                                                            </div>

                                                                            <div class="box-content">
                                                                                <div class="d-flex align-items-center mt-1">
                                                                                    <div class="flex-shrink-0">
                                                                                        <div class="d-flex gap-3">
                                                                                            <button id="exportButton" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0 shadow-none" onclick="exportImages()">
                                                                                                <i class="ri-download-line text-muted align-bottom me-1"></i>Exporter les images</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-sm-6">
                                                            <div class="mb-3">
                                                                <h5 class="fs-14 mb-0">Relevé de notes</h5>
                                                                <div class="row gallery-wrapper">
                                                                    <div class="element-item col-xxl-3 col-xl-12 col-sm-12 project designing development" data-category="designing development">
                                                                        <div class="gallery-box card">
                                                                            <div class="gallery-container">
                                                                                <a class="image-popup" href="assets/images/small/img-1.jpg" title="">
                                                                                    <img class="gallery-img img-fluid mx-auto" src="assets/images/small/img-1.jpg" alt="" />

                                                                                </a>
                                                                            </div>

                                                                            <div class="box-content">
                                                                                <div class="d-flex align-items-center mt-1">
                                                                                    <div class="flex-shrink-0">
                                                                                        <div class="d-flex gap-3">
                                                                                            <button id="exportButton" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0 shadow-none" onclick="exportImages()">
                                                                                                <i class="ri-download-line text-muted align-bottom me-1"></i>Exporter les images</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end tab pane -->
                                            <div class="tab-pane fade" id="pills-payment" role="tabpanel" aria-labelledby="pills-payment-tab">
                                                <div class="card">
                                                    <div class="card-header border-0 align-items-center d-flex">
                                                        <h4 class="card-title mb-0  col-12">Liste des écoles souhaitées de Robert Mcmahon</h4>

                                                    </div><!-- end card header -->

                                                    <div class="card-body">
                                                        <div class="table-responsive table-card mb-4">
                                                            <table class="table align-middle table-nowrap mb-0" id="tasksTable">
                                                                <thead class="table-light text-muted">
                                                                    <tr>
                                                                        <th scope="col" style="width: 40px;">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                                            </div>
                                                                        </th>
                                                                        <th class="sort">ID</th>
                                                                        <th class="sort">Nom d'école</th>

                                                                        <th class="sort">branche souhaitées dans cette ecole</th>
                                                                        <th class="sort">Date d'ouvrir</th>
                                                                        <th class="sort">Date de fermer</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="list form-check-all">
                                                                    <tr>
                                                                        <th scope="row">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                                            </div>
                                                                        </th>
                                                                        <td class="id"><a href="apps-tasks-details.html" class="fw-medium link-primary">#VLZ501</a></td>

                                                                        <td class="assignedto">Encg</td>
                                                                        <td>
                                                                            <div class="d-flex">
                                                                                <div class="flex-grow-1">
                                                                                    <li>phisic</li>
                                                                                    <li>math info</li>
                                                                                    <li>svt</li>

                                                                                </div>

                                                                            </div>
                                                                        </td>

                                                                        <td class="due_date">25 Jan, 2022</td>
                                                                        <td class="due_date">25 Jan, 2022</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                                            </div>
                                                                        </th>
                                                                        <td class="id"><a href="apps-tasks-details.html" class="fw-medium link-primary">#VLZ501</a></td>

                                                                        <td class="assignedto">ensa
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex">
                                                                                <div class="flex-grow-1">
                                                                                    <li>phisic</li>
                                                                                    <li>math info</li>
                                                                                    <li>svt</li>

                                                                                </div>

                                                                            </div>
                                                                        </td>

                                                                        <td class="due_date">25 Jan, 2022</td>
                                                                        <td class="due_date">25 Jan, 2022</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!--end table-->

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end tab pane -->
                                            <div class="tab-pane fade" id="pills-finish" role="tabpanel" aria-labelledby="pills-finish-tab">
                                                <div class="text-center py-5">
                                                    <h5>besoin d'informations !</h5>
                                                    <div class="mb-4">
                                                        <button type="button" class="btn btn-primary btn-label right ms-auto nexttab" data-nexttab="pills-bill-address-tab">
                                                            <i class="ri-verified-badge-line label-icon align-middle fs-16 ms-2"></i>Besoin d'informations
                                                        </button>
                                                    </div>
                                                    <h5>Merci ! click sur button si tu as terminé !</h5>
                                                    <div class="mb-4">
                                                        <button type="button" class="btn btn-primary btn-label right ms-auto nexttab" data-nexttab="pills-bill-address-tab">
                                                            <i class="ri-verified-badge-line label-icon align-middle fs-16 ms-2"></i>Il est terminé
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end tab pane -->
                                        </div>
                                        <!-- end tab content -->
                                    </form>
                                </div>
                                <!-- end card body -->
                            </div>

                            <!-- end card -->
                        </div>

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