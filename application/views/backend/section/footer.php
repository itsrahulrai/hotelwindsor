<!-- Footer Start -->

<div class="container-fluid pt-4 px-4 mb-0">
    <div class="bg-light rounded-top p-4">
        <div class="row">
            <div class="col-12 col-sm-6 text-center text-sm-start">
                Copyright &copy; 2023. Hotel Windsor. All Rights Reserved.
            </div>
            <div class="col-12 col-sm-6 text-center text-sm-end">Developed By : <a href="https://samsoftech.in" target="_blank">SAM Softech</a>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

</div>
<!-- Content End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url() ?>assetsadmin/lib/chart/chart.min.js"></script>
<script src="<?php echo base_url() ?>assetsadmin/lib/easing/easing.min.js"></script>
<script src="<?php echo base_url() ?>assetsadmin/lib/waypoints/waypoints.min.js"></script>
<script src="<?php echo base_url() ?>assetsadmin/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?php echo base_url() ?>assetsadmin/lib/tempusdominus/js/moment.min.js"></script>
<script src="<?php echo base_url() ?>assetsadmin/lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="<?php echo base_url() ?>assetsadmin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Template Javascript -->
<script src="<?php echo base_url() ?>assetsadmin/js/main.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>






<script>
    let table = new DataTable('#myTable');
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