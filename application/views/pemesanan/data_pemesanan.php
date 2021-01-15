<div class="dashboard-wrapper">
    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Data Pemesanan</h2>

                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Pemesanan</li>
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
                                <?php if ($this->session->flashdata('pesan')) { ?>
                                    <p style="display: none;" id="pesan"><?= $this->session->flashdata('pesan') ?> </p>
                                    <p style="display: none;" id="type"><?= $this->session->flashdata('type') ?></p>
                                    <p style="display: none;" id="title"><?= $this->session->flashdata('title') ?></p>
                                <?php } ?>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID Transaksi</th>
                                        <th>Nama Pemesan</th>
                                        <th>Tanggal Pesanan</th>
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
                                            <td><span class="btn btn-warning">Menunggu Di Proses</span></td>

                                            <td>
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
                                                <span data-toggle="tooltip" data-placement="top" title="Konfirmasi Pesanan">
                                                <button onClick="update_pemesanan('<?= base_url() ?>transaksi/proses_pemesanan/<?= $row['id_transaksi'] ?>')" data-toggle="modal" data-target="#modal_confirm" type="button" class="btn btn-primary btn-rounded btn-icon">
                                                    <i class="fas fa-check-circle"></i>
                                                </button>
                                                </span>
                                                <span data-toggle="tooltip" data-placement="top" title="Batalkan Pesanan">
                                                <button onClick="delete_pemesanan('<?= base_url() ?>transaksi/delete_pemesanan/<?= $row['id_transaksi'] ?>')" data-toggle="modal" data-target="#modal_delete" type="button" class="btn btn-danger btn-rounded btn-icon">
                                                    <i class="mdi mdi-delete"></i>
                                                </button>
                                                </span>



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
<div class="modal fade" id="modaldetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_title">Detail Pemesa</h5>
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
<!-- Modal -->
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

<div class="modal fade" id="modal_confirm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_title">Konfirmasi Pesanan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Anda yakin ingin memproses Pesanan ?
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a id="btn_update"><button type="submit" class="btn btn-primary">Submit </button></a>

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_title">Batalkan Pesanan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Anda yakin ingin Membatalkan Pesanan ?
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a id="btn_delete"><button type="submit" class="btn btn-primary">Submit </button></a>

            </div>
        </div>
    </div>
</div>