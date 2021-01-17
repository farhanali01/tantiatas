<div class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="text-md-right footer-links d-none d-sm-block">
                    <a href="javascript: void(0);">About</a>
                    <a href="javascript: void(0);">Support</a>
                    <a href="javascript: void(0);">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- end footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- end wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- end main wrapper  -->
<!-- ============================================================== -->
<!-- Optional JavaScript -->
<!-- jquery 3.3.1 -->
<script src="<?= base_url() ?>assets/admin/vendor/jquery/jquery-3.3.1.min.js"></script>
<!-- bootstap bundle js -->
<script src="<?= base_url() ?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<!-- slimscroll js -->
<script src="<?= base_url() ?>assets/admin/vendor/slimscroll/jquery.slimscroll.js"></script>
<!-- main js -->
<script src="<?= base_url() ?>assets/admin/libs/js/main-js.js"></script>
<!-- chart chartist js -->
<!-- <script src="<?= base_url() ?>assets/admin/vendor/charts/chartist-bundle/chartist.min.js"></script> -->
<!-- sparkline js -->
<script src="<?= base_url() ?>assets/admin/vendor/charts/sparkline/jquery.sparkline.js"></script>
<!-- morris js -->
<script src="<?= base_url() ?>assets/admin/vendor/charts/morris-bundle/raphael.min.js"></script>
<script src="<?= base_url() ?>assets/admin/vendor/charts/morris-bundle/morris.js"></script>
<!-- chart c3 js -->
<script src="<?= base_url() ?>assets/admin/vendor/charts/c3charts/c3.min.js"></script>
<script src="<?= base_url() ?>assets/admin/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
<script src="<?= base_url() ?>assets/admin/vendor/charts/c3charts/C3chartjs.js"></script>
<script src="<?= base_url() ?>assets/admin/libs/js/dashboard-ecommerce.js"></script>

<script src="<?= base_url() ?>assets/admin/tipe.js"></script>
<script src="<?= base_url() ?>assets/kategori.js"></script>
<script src="<?= base_url() ?>assets/produk.js"></script>
<script src="<?= base_url() ?>assets/upload.js"></script>
<script src="<?= base_url() ?>assets/allert.js"></script>
<script src="<?= base_url() ?>assets/kriteria.js"></script>
<script src="<?= base_url() ?>assets/transaksi.js"></script>
<script src="<?= base_url() ?>assets/penilaian.js"></script>
<!-- End custom js for this page -->
<script>
    pesan = document.getElementById('pesan');
    if (pesan != null) {
        swal({
            title: document.getElementById('title').innerHTML,
            text: pesan.innerHTML,
            icon: document.getElementById('type').innerHTML,
        });

    }
</script>
<script type="text/javascript">
    $(document).ready(function() {
        bsCustomFileInput.init();
    });
</script>
<script>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
<script>
$("#year").datepicker( {
    format: "yyyy",
    viewMode: "years", 
    minViewMode: "years"
}).on('changeDate', function(e){
    $(this).datepicker('hide');
});
</script>

</body>

</html>