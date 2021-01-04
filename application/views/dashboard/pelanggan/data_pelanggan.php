<div class="dashboard-wrapper">
    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Data Pelanggan</h2>

                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Pelanggan</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- ============================================================== -->
            <!-- basic table  -->
            <!-- ============================================================== -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="row">
                        <div class="col-6">
                            <h5 class="card-header">Data Pelanggan</h5>
                        </div>
                        <div class="col-6">

                        </div>
                    </div>
                    <?php if ($this->session->flashdata('pesan')) { ?>
                        <div class="alert alert-<?= $this->session->flashdata('type') ?>" role="alert">
                            <?= $this->session->flashdata('pesan'); ?>
                        </div>
                    <?php } ?>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered first">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Username</th>
                                        <th>Fullname</th>
                                        <th>Email</th>
                                        <th>No Telepon</th>
                                        <th>Alamat</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php $i = 1;
                                        foreach ($data_pelanggan as $row) { ?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><?= $row['username'] ?></td>
                                        <td><?= $row['fullname'] ?></td>
                                        <td><?= $row['email'] ?></td>
                                        <td><?= $row['hp'] ?></td>
                                        <td><?= $row['alamat'] ?></td>
                                      
                                    </tr>
                                <?php } ?>
                                </tr>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Username</th>
                                        <th>Fullname</th>
                                        <th>Email</th>
                                        <th>No Telepon</th>
                                        <th>Alamat</th>

                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end basic table  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- data table multiselects  -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- end data table multiselects  -->
        <!-- ============================================================== -->
    </div>
</div>