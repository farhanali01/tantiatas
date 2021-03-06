<div class="dashboard-wrapper">
    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Data Rekomendasi</h2>

                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Rekomendasi</li>
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
                    <div class="row">
                        <div class="col-6">
                            <h5 class="card-header">Data Rekomendasi Bulan <?= $bulan ?></h5>
                        </div>
                        <div class="col-6">
                            <a href="<?= base_url() ?>dashboard/hitungnormalisasi" style="float: right; margin-top:15px;margin-right:20px;" class="btn btn-outline-primary">Hitung Normalisasi</a>
                            <button data-toggle="modal" data-target="#modalCetak" style="float: right; margin-top:15px;margin-right:10px;" class="btn btn-outline-danger">Pilih Bulan</button>
                            <a target="_blank" href="<?= base_url() ?>dashboard/cetak_rekomendasi/<?= $date ?>" style="float: right; margin-top:15px;margin-right:10px;" class="btn btn-outline-success">Cetak</a>
                        </div>
                    </div>
                    <?php if ($this->session->flashdata('pesan')) { ?>
                        <div class="alert alert-<?= $this->session->flashdata('type') ?> mt-3 mr-3 ml-3" role="alert">
                            <?= $this->session->flashdata('pesan'); ?>
                        </div>
                    <?php } ?>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered first">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Produk</th>
                                        <th>Nilai Harga</th>
                                        <th>Nilai Bahan</th>
                                        <th>Nilai Berat</th>
                                        <th>Total Nilai</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php $i = 1;
                                        foreach ($data_rekomendasi as $row) { ?>
                                            <td> <?= $i++ ?></td>
                                            <td><?= $row['nama_produk'] ?></td>
                                            <td><?= $row['nilai_harga'] ?></td>
                                            <td><?= $row['nilai_bahan'] ?></td>
                                            <td><?= $row['nilai_berat'] ?></td>
                                            <td><?= $row['total_nilai'] ?></td>


                                    </tr>
                                <?php } ?>
                                </tr>

                                </tbody>
                               
                            </table>
                        </div>
                    </div>
                </div>
                <div class="alert alert-success" role="alert">
                    Berdasarkan hasil hitung normalisasi, barang yang paling direkomendasikan untuk bulan ini yaitu <span style="font-weight: bold;"><?= $productRekomendasi['nama_produk'] ?></span>
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
<div class="modal fade" id="modalCetak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_title">Pilih Bulan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>dashboard/rekomendasi" id="form" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label form="">Pilih Bulan</label>
                        <input type="month" name="bulan" id="bulan" class="form-control">
                    </div>
            </div>



            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>

            </div>
            </form>
        </div>
    </div>
</div>