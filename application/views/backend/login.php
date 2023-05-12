<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login</title>
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
    <link href="<?php echo base_url()  ?>assetsadmin/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url()  ?>assetsadmin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url()  ?>assetsadmin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url()  ?>assetsadmin/css/style.css" rel="stylesheet">
    <!-- Toster message -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>
<style>
    .error {
        color: red;
    }
</style>

<body>
    <div class="container-fluid position-relative bg-white d-flex p-0">

        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="container">
                            <div class="row justify-content-center mb-3">
                                <div class="col-md-12 text-center">
                                    <a href="<?= base_url('admin') ?>" class="">
                                        <img src="<?php echo base_url() ?>assetsadmin\img\logo.png" alt="Logo" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <form action="<?= base_url('admin') ?>" method="post" enctype="multipart/form-data" class="contact-form mt-30">
                            <input type="hidden" class="txt_csrfname" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                                <?php echo form_error('email', '<div class="text-danger"><small>', '</small></div>'); ?>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                                <?php echo form_error('password', '<div class="text-danger"><small>', '</small></div>'); ?>
                            </div>
                            <div class="g-recaptcha" data-sitekey="6Le17vglAAAAABQ4ZWbjB0nomKLFtffKwd8DkVq1"></div>
                            <!-- <div class="g-recaptcha" style="transform: scale(0.70); -webkit-transform: scale(0.70); transform-origin: 0 0; -webkit-transform-origin: 0 0;" data-theme="light" data-sitekey="6Le17vglAAAAABQ4ZWbjB0nomKLFtffKwd8DkVq1"></div> -->

                            <button type="submit" class="btn btn-primary py-3 w-100 mb-2 mt-3">Login</button>
                    </div>
                    </form>

                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url()  ?>assetsadmin/lib/chart/chart.min.js"></script>
    <script src="<?php echo base_url()  ?>assetsadmin/lib/easing/easing.min.js"></script>
    <script src="<?php echo base_url()  ?>assetsadmin/lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo base_url()  ?>assetsadmin/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url()  ?>assetsadmin/lib/tempusdominus/js/moment.min.js"></script>
    <script src="<?php echo base_url()  ?>assetsadmin/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="<?php echo base_url()  ?>assetsadmin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url()  ?>assetsadmin/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-center",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    </script>
    <script>
        <?php if ($this->session->flashdata('success')) { ?>
            toastr.success("<?php echo $this->session->flashdata('success'); ?>");
        <?php } elseif ($this->session->flashdata('warning')) {  ?>
            toastr.error("<?php echo $this->session->flashdata('warning'); ?>");
        <?php } ?>
    </script>


</body>

</html>