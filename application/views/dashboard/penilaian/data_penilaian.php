<div class="dashboard-wrapper">
    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Data Penilaian</h2>

                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Penilaian</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- ============================================================== -->
            <!-- basic table  -->
            <!-- ============================================================== -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Data Penilaian</h5>
                   

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
                                        <th>ID penilaian</th>
                                        <th>Nama Produk</th>
                                        <th>Harga</th>
                                        <th>Berat</th>
                                        <th>Bahan</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php $i = 1;
                                        foreach ($data_penilaian as $row) { ?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><?= $row['nama_produk'] ?></td>
                                        <td>Rp <?= number_format($row['harga'],0,".",".") ?></td>
                                        <td><?= $row['berat'] ?> gram</td>
                                        <td><?= $row['bahan'] ?></td>
                                       
                                    </tr>
                                    <?php } ?>
                                </tr>
                                
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID penilaian</th>
                                        <th>Nama Produk</th>
                                        <th>Harga</th>
                                        <th>Berat</th>
                                        <th>Bahan</th>
                                        

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

