<div class="dashboard-wrapper">
    <div class="influence-profile">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h3 class="mb-2"> Profile </h3>
                        <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Profile Template</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- content -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- ============================================================== -->
                <!-- profile -->
                <!-- ============================================================== -->
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12">
                    <!-- ============================================================== -->
                    <!-- card profile -->
                    <!-- ============================================================== -->
                    <div class="card">
                        <div class="card-body">
                            <div class="user-avatar text-center d-block">
                                <img src="<?= base_url() ?>assets/image_produk/foto.jpg" alt="User Avatar" class="rounded-circle user-avatar-xxl">
                            </div>
                            <div class="text-center">
                                <h2 class="font-24 mb-0"><?= $this->session->userdata('username') ?></h2>
                                
                            </div>
                        </div>
                        <div class="card-body border-top">
                            <h3 class="font-16">Contact Information</h3>
                            <div class="">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><i class="fas fa-fw fa-envelope mr-2"></i><?= $this->session->userdata('email') ?></li>
                                    <li class="mb-0"><i class="fas fa-fw fa-phone mr-2"></i>(900) 123 4567</li>
                                </ul>
                            </div>
                        </div>
                       


                    </div>
                    <!-- ============================================================== -->
                    <!-- end card profile -->
                    <!-- ============================================================== -->
                </div>
                <!-- ============================================================== -->
                <!-- end profile -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- campaign data -->
                <!-- ============================================================== -->
                <div class="col-xl-9 col-lg-9 col-md-7 col-sm-12 col-12">
                    <!-- ============================================================== -->
                    <!-- campaign tab one -->
                    <!-- ============================================================== -->
                    <div class="influence-profile-content pills-regular">
                        <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">

                            <li class="nav-item">
                                
                                <div class="contact-form-area mt-50">
                                    <form action="<?= base_url()?>Dashboard/profileadmin" method="post">
                                        <div class="form-group">
                                            <label for="name">Name*</label>
                                            <input type="text" class="form-control" id="username">
                                        </div>
                                        <div class="form-group">
                                            <label for="jenis_kelamin">Jenis Kelamin*</label>
                                            <input type="jenis_kelamin" class="form-control" id="jenis_kelamin">
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Tanggal Lahir*</label>
                                            <input type="tgl_lahir" class="form-control" id="tgl_lahir">
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat*</label>
                                            <input type="alamat" class="form-control" id="alamat">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email*</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="hp">No.Handphone*</label>
                                            <input type="hp" class="form-control" id="hp">
                                        </div>

                                        <button class="btn btn-primer" type="submit">Send Now</button>
                                    </form>
                                </div>
                            </li>
                        </ul>