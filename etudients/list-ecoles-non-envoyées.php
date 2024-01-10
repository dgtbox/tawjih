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
                                        <h6 class="card-title mb-0 flex-grow-1">Écoles à terminer</h6>
                                    </div>
                                    <div class="card-body border border-dashed border-end-0 border-start-0">
                                    
                                            <table  class="table align-middle">
                                                <thead  class="table-light">
                                                    <tr>
                                                        <th >École</th>
                                                        <th >État du Dossier</th>
                                                            <th >Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    <img src="assets/images/users/avatar-10.jpg" alt="" class="avatar-xxs rounded-circle image_src object-fit-cover">
                                                                </div>
                                                                <div class="flex-grow-1 ms-2 name">Tonya Noble</div>
                                                            </div>
                                                        </td>
                                                        <td class="etat-dossier">En cours</td>
                                                        <td>
                                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                                <a href="javascript:void(0);"><i class="ri-eye-fill align-bottom text-muted"></i></a>
                                                            </li>   
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    <img src="assets/images/users/avatar-10.jpg" alt="" class="avatar-xxs rounded-circle image_src object-fit-cover">
                                                                </div>
                                                                <div class="flex-grow-1 ms-2 name">Tonya Noble</div>
                                                            </div>
                                                        </td>
                                                        <td class="etat-dossier">En cours</td>
                                                        <td>
                                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                                <a href="javascript:void(0);"><i class="ri-eye-fill align-bottom text-muted"></i></a>
                                                            </li>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                    </div>
                                    
                                </div>
                            </div>
                            <!--end card-->
                           
                        </div>
                    </div>
                    <!--end row-->

                    <div class="modal fade" id="inviteMembersModal" tabindex="-1" aria-labelledby="inviteMembersModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content border-0">
                                <div class="modal-header p-3 ps-4 bg-success-subtle">
                                    <h5 class="modal-title" id="inviteMembersModalLabel">Team Members</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body p-4">
                                    <div class="search-box mb-3">
                                        <input type="text" class="form-control bg-light border-light" placeholder="Search here...">
                                        <i class="ri-search-line search-icon"></i>
                                    </div>

                                    <div class="mb-4 d-flex align-items-center">
                                        <div class="me-2">
                                            <h5 class="mb-0 fs-13">Members :</h5>
                                        </div>
                                        <div class="avatar-group justify-content-center">
                                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Tonya Noble">
                                                <div class="avatar-xs">
                                                    <img src="assets/images/users/avatar-10.jpg" alt="" class="rounded-circle img-fluid">
                                                </div>
                                            </a>
                                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Thomas Taylor">
                                                <div class="avatar-xs">
                                                    <img src="assets/images/users/avatar-8.jpg" alt="" class="rounded-circle img-fluid">
                                                </div>
                                            </a>
                                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Nancy Martino">
                                                <div class="avatar-xs">
                                                    <img src="assets/images/users/avatar-2.jpg" alt="" class="rounded-circle img-fluid">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mx-n4 px-4" data-simplebar="" style="max-height: 225px;">
                                        <div class="vstack gap-3">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-xs flex-shrink-0 me-3">
                                                    <img src="assets/images/users/avatar-2.jpg" alt="" class="img-fluid rounded-circle">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-0"><a href="javascript:void(0);" class="text-body d-block">Nancy Martino</a></h5>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <button type="button" class="btn btn-light btn-sm">Add</button>
                                                </div>
                                            </div>
                                            <!-- end member item -->
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-xs flex-shrink-0 me-3">
                                                    <div class="avatar-title bg-danger-subtle text-danger rounded-circle">
                                                        HB
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-0"><a href="javascript:void(0);" class="text-body d-block">Henry Baird</a></h5>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <button type="button" class="btn btn-light btn-sm">Add</button>
                                                </div>
                                            </div>
                                            <!-- end member item -->
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-xs flex-shrink-0 me-3">
                                                    <img src="assets/images/users/avatar-3.jpg" alt="" class="img-fluid rounded-circle">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-0"><a href="javascript:void(0);" class="text-body d-block">Frank Hook</a></h5>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <button type="button" class="btn btn-light btn-sm">Add</button>
                                                </div>
                                            </div>
                                            <!-- end member item -->
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-xs flex-shrink-0 me-3">
                                                    <img src="assets/images/users/avatar-4.jpg" alt="" class="img-fluid rounded-circle">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-0"><a href="javascript:void(0);" class="text-body d-block">Jennifer Carter</a></h5>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <button type="button" class="btn btn-light btn-sm">Add</button>
                                                </div>
                                            </div>
                                            <!-- end member item -->
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-xs flex-shrink-0 me-3">
                                                    <div class="avatar-title bg-success-subtle text-success rounded-circle">
                                                        AC
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-0"><a href="javascript:void(0);" class="text-body d-block">Alexis Clarke</a></h5>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <button type="button" class="btn btn-light btn-sm">Add</button>
                                                </div>
                                            </div>
                                            <!-- end member item -->
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-xs flex-shrink-0 me-3">
                                                    <img src="assets/images/users/avatar-7.jpg" alt="" class="img-fluid rounded-circle">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-0"><a href="javascript:void(0);" class="text-body d-block">Joseph Parker</a></h5>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <button type="button" class="btn btn-light btn-sm">Add</button>
                                                </div>
                                            </div>
                                            <!-- end member item -->
                                        </div>
                                        <!-- end list -->
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light w-xs" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-success w-xs">Assigned</button>
                                </div>
                            </div>
                            <!-- end modal-content -->
                        </div>
                        <!-- modal-dialog -->
                    </div>
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