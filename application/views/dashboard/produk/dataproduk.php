<div class="dashboard-wrapper">
    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Data Produk</h2>

                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Produk</li>
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
                            <h5 class="card-header">Data Produk</h5>
                        </div>
                        <div class="col-6">
                            <button onClick="tambah_produk('<?= base_url(); ?>')" data-toggle="modal" data-target="#modaltambah" style="float: right; margin-top:15px;margin-right:20px;" class="btn btn-outline-primary">Tambah Data</button>
                        </div>
                    </div>



                    <?php if ($this->session->flashdata('pesan')) { ?>
                        <div class="alert alert-<?= $this->session->flashdata('type') ?> mt-3 mr-3 ml-3" role="alert">
                            <?= $this->session->flashdata('pesan') ?>
                        </div>
                    <?php } ?>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered first">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Produk</th>
                                        <th>Harga</th>
                                        <th>Deskripsi</th>
                                        <th>Nama Kategori</th>
                                        <th>Foto</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php $i = 1;
                                        foreach ($dataProduk as $row) { ?>
                                            <td> <?= $i++ ?></td>
                                            <td><?= $row['nama_produk'] ?></td>
                                            <td>Rp<?= number_format($row['harga'], 0, ",", ".") ?></td>
                                            <td><?= $row['deskripsi'] ?></td>
                                            <td><?= $row['nama_kategori'] ?></td>
                                            <td>
                                                <a href="<?= base_url() ?>assets/image_produk/<?= $row['foto'] ?>" target="_blank"><img style="height : 50px; width:50px;" src="<?= base_url() ?>assets/image_produk/<?= $row['foto'] ?>" alt=""></a>
                                            </td>

                                            <td>
                                                <center>
                                                <span data-toggle="tooltip" data-placement="top" title="Ubah Produk">
                                                    <button onClick="update_produk('<?= $row['nama_produk'] ?>','<?= $row['id_produk'] ?>','<?= $row['harga'] ?>','<?= $row['deskripsi'] ?>','<?= $row['id_kategori'] ?>','<?= $row['foto'] ?>','<?= $row['berat'] ?>','<?= $row['bahan'] ?>','<?= base_url() ?>produk/update_produk')" data-toggle="modal" data-target="#modaltambah" type="button" class="btn btn-primary btn-rounded btn-icon">
                                                        <i class="fas fa-edit"></i> </button>
                                                </span>
                                                <span data-toggle="tooltip" data-placement="top" title="Hapus Produk">
                                                <button onClick="delete_produk('<?= base_url() ?>produk/delete_produk/<?= $row['id_produk'] ?>')" data-toggle="modal" data-target="#modaldelete" type="button" class="btn btn-danger btn-rounded btn-icon">
                                                    <i class="mdi mdi-delete"></i>
                                                </button>
                                                </span>

                                            </td>
                                    </tr>
                                <?php } ?>
                                </center>
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

<!-- Modal -->
<div class="modal fade" id="modaltambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" id="form" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label form="">Nama Produk</label>
                        <input type="text" name="nama_produk" id="nama_produk" placeholder="masukan nama produk" class="form-control">
                        <input type="hidden" name="id_produk" id="id_produk">
                    </div>


                    <div class="form-group">
                        <label form="">Harga</label>
                        <input type="text" name="harga" id="harga" placeholder="masukan harga" class="form-control">
                    </div>

                    <div class="form-group">
                        <label form="">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" class="form-control" cols="20" rows="8"></textarea>
                    </div>


                    <div class="form-group">
                        <label form="">Nama kategori</label>
                        <select class="form-control" name="kategori" id="kategori">

                            <option value="">-- Pilih Kategori --</option>
                            <?php foreach ($data_kategori as $kategori) { ?>
                                <option value="<?= $kategori['id_kategori'] ?>"><?= $kategori['nama_kategori'] ?></option>

                            <?php } ?>
                        </select>
                        <div class="form-group">
                            <label for="">Foto</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="foto" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" id="foto" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="">Upload</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <input oninput="minimalWeight()" type="number" name="berat" id="berat" placeholder="masukan berat tas" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Gram</span>
                                </div>
                            </div>
                            <p hidden="true" style="color: red;" id="notif_min">Mohon masukan berat diatas 100 gram</p>
                            <p hidden="true" style="color: red;" id="notif_max">Mohon masukan berat dibawah 700 gram</p>
                        </div>


                        <div class="form-group">
                            <label form="">Bahan</label>
                            <select name="bahan" id="bahan" class="form-control">
                                <option value="">-- Pilih Bahan --</option>
                                <option value="3">Polyster</option>
                                <option value="2">Kanvas</option>
                                <option value="1">Blacu</option>
                            </select>
                        </div>

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