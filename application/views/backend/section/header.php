<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $title  ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url() ?>assetsadmin/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assetsadmin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url() ?>assetsadmin/css/bootstrap.min.css" rel="stylesheet">


    <!-- Template Stylesheet -->
    <link href="<?php echo base_url() ?>assetsadmin/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.6/dist/sweetalert2.all.min.js"></script>



    <?= link_tag('//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css') ?>
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>

<body>

    <body>
        <div class="container-fluid position-relative bg-white d-flex p-0">

            <!-- Modal -->

            <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" style="max-width: 60% !important;">
                    <div class="modal-content p-4">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('change-password') ?>" method="post" enctype="multipart/form-data">
                                <input type="hidden" class="txt_csrfname" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                                <div class="mb-3">
                                    <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Current Password">
                                    <?php echo form_error('current_password', '<div class="text-danger"><small>', '</small></div>'); ?>
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" id="new_password" name="new_password" minlength="6" maxlength="12" placeholder="New Password">
                                    <?php echo form_error('new_password', '<div class="text-danger"><small>', '</small></div>'); ?>
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
                                    <?php echo form_error('confirm_password', '<div class="text-danger"><small>', '</small></div>'); ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Change Password</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> -->


            <!-- Sidebar Start -->
            <div class="sidebar pe-4 pb-3">
                <nav class="navbar bg-light navbar-light">
                    <a href="<?= base_url('dashboard') ?>" class="navbar-brand mx-4 mb-3">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-12 text-center">
                                    <img src="<?php echo base_url() ?>assetsadmin\img\logo.png" alt="Logo" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="navbar-nav w-100">
                        <a href="<?= base_url('dashboard') ?>" class="nav-item nav-link <?php echo (!empty($title) && $title == 'Dashboard') ? 'active' : '' ?>"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                        <a href="<?= base_url('miniclub');  ?>" class="nav-item nav-link text-nowrap <?php echo (!empty($title) && $title == 'Mini Club') ? 'active' : '' ?>"><i class="fas fa-hotel me-2"></i>Mini Club</a>
                        <a href="<?= base_url('clubroom') ?>" class="nav-item nav-link text-nowrap <?php echo (!empty($title) && $title == 'Club Room') ? 'active' : '' ?>"><i class="fas fa-hotel me-2"></i>Club Room</a>
                        <a href="<?= base_url('royalclub') ?>" class="nav-item nav-link text-nowrap <?php echo (!empty($title) && $title == 'Royal Club') ? 'active' : '' ?>"><i class="fas fa-hotel me-2"></i>Royal Club</a>
                        <a href="<?= base_url('booknow')  ?>" class="nav-item nav-link text-nowrap <?php echo (!empty($title) && $title == 'Book Now') ? 'active' : '' ?>"><i class="fas fa-book-open  me-2"></i>Book Now</a>
                        <a href="<?= base_url('contact-us')   ?>" class="nav-item nav-link <?php echo (!empty($title) && $title == 'contact') ? 'active' : '' ?>"><i class="fas fa-address-card me-2"></i>Contact Us</a>
                        <a href="<?= base_url('feed-back')   ?>" class="nav-item nav-link <?php echo (!empty($title) && $title == 'Feedback') ? 'active' : '' ?>"><i class="fas fa-comment-alt me-2"></i>Feedback</a>
                    </div>
                </nav>
            </div>
            <!-- Sidebar End -->

            <!-- Content Start -->
            <div class="content">
                <!-- Navbar Start -->
                <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                    <a href="#" class="navbar-brand d-flex d-lg-none me-4">
                        <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                    </a>
                    <a href="#" class="sidebar-toggler flex-shrink-0">
                        <i class="fa fa-bars"></i>
                    </a>
                    <div class="navbar-nav align-items-center ms-auto">

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                <span class="d-none d-lg-inline-flex"><b><?php echo $this->session->userdata('name');  ?></b></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                                <a href="<?php echo base_url() . 'change-password'; ?>" class="dropdown-item">Change Password</a>
                                <a href="<?php echo base_url() . 'logout'; ?>" class="dropdown-item">Log out</a>

                            </div>

                        </div>
                    </div>
                </nav>
                <!-- Navbar End -->