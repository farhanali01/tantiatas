<div class="dashboard-wrapper">
    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Data Transaksi</h2>

                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Transaksi</li>
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
                    <h5 class="card-header">Data Transaksi</h5>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered first">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID Transaksi</th>
                                        <th>Nama Pemesan</th>
                                        <th>Tanggal Pesanan</th>
                                        <th>Foto Bukti</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php $i = 1;
                                        foreach ($data_transaksi as $row) { ?>
                                            <td><?= $i++ ?> </td>
                                            <td><?= $row['id_transaksi'] ?></td>
                                            <td><?= $row['fullname'] ?></td>
                                            <td><?= date_format(date_create($row['tanggal_transaksi']),"d F Y") ?></td>
                                            
                                            <td>
                                                <?php if ($row['foto_bukti'] != null) { ?>
                                                    <a href="<?= base_url() ?>assets/image_produk/<?= $row['foto_bukti'] ?>" target="_blank"><img style="height: 50px; width: 50px;" src="<?= base_url() ?>assets/image_produk/<?= $row['foto_bukti'] ?>" alt=""></a>
                                                <?php } else { ?>
                                                    <span class="badge badge-danger">Belum Bayar</span>
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <?php if ($row['status_transaksi'] == 0) { ?>
                                                    <span class="btn btn-warning">Menunggu Di Proses</span>
                                                <?php } else if ($row['status_transaksi'] == 1) { ?>
                                                    <span class="btn btn-danger">Menunggu Pembayaran</span>
                                                <?php } else if ($row['status_transaksi'] == 2) { ?>
                                                    <span class="btn btn-info">Sedang Di Proses</span>
                                                <?php } else if ($row['status_transaksi'] == 3) { ?>
                                                    <span class="btn btn-info">Selesai</span>
                                                <?php } ?>

                                            </td>

                                            <td>
                                                <center>
                                                    <span data-toggle="tooltip" data-placement="top" title="Detail Pesanan">
                                                        <button onClick="detailPesanan('<?= $row['id_transaksi'] ?>','<?= base_url() ?>')" data-toggle="modal" data-target="#modaltambah" type="button" class="btn btn-success btn-rounded btn-icon">
                                                            <i class="mdi mdi-playlist-play"></i>
                                                        </button>
                                                    </span>
                                                    <span data-toggle="tooltip" data-placement="top" title="Detail Pemesan">
                                                        <button onClick="detail_transaksi('<?= $row['fullname'] ?>','<?= $row['hp'] ?>','<?= $row['alamat'] ?>')" data-toggle="modal" data-target="#modaldetail" type="button" class="btn btn-warning btn-rounded btn-icon">
                                                            <i class="fas fa-shopping-bag"></i>
                                                        </button>
                                                    </span>
                                                    <?php if ($row['status_transaksi'] == 2) { ?>
                                                        <span data-toggle="tooltip" data-placement="top" title="Konfirmasi Pesanan">
                                                            <button onClick="confirm_transaksi('<?= base_url() ?>Transaksi/proses_transaksi/<?= $row['id_transaksi'] ?>')" data-toggle="modal" data-target="#modalproses" type="button" class="btn btn-success btn-rounded btn-icon">
                                                                <i class="fas fa-check-circle"></i>
                                                            </button>
                                                        </span>
                                                    <?php } ?>
                                                    <?php if ($row['status_transaksi'] != 3) { ?>
                                                        <span data-toggle="tooltip" data-placement="top" title="Batalkan Pesanan">
                                                            <button onClick="deleteTransaksi('<?= base_url() ?>Transaksi/delete_transaksi/<?= $row['id_transaksi'] ?>')" data-toggle="modal" data-target="#modaldelete" type="button" title="Hapus Data" class="btn btn-danger btn-rounded btn-icon">
                                                                <i class="mdi mdi-delete"></i>
                                                            </button>
                                                        </span>
                                                    <?php } ?>
                                                </center>
                                            </td>
                                    </tr>
                                <?php } ?>
                                </tr>

                                </tbody>
                               
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
<div class="modal fade" id="modaltambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_title">Detail Pesanan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="table_data" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>


                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="4">Sub Total</th>
                            <th id="sub_total"></th>
                        </tr>
                    </tfoot>

                </table>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modaldetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th> Nama Lengkap</th>
                            <th> No Telepon</th>
                            <th> Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td id="nama"></td>
                            <td id="hp"></td>
                            <td id="alamat"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>


            </div>
        </div>
    </div>
</div>
</div>
<div class="modal fade" id="modalproses" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Konfirmasi Pesanan ?
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a id="buttonproses" class="btn btn-primary">Submit </a>

            </div>
        </div>
    </div>
</div>
</div>
<div class="modal fade" id="modaldelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Anda yakin ingin mengapus data ?
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a id="buttondelete" class="btn btn-primary">Delete Data </a>

            </div>
        </div>
    </div>
</div>
</div>