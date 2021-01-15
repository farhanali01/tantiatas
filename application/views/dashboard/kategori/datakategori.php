<div class="dashboard-wrapper">
  <div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
          <h2 class="pageheader-title">Data Kategori</h2>

          <div class="page-breadcrumb">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Kategori</li>
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
              <h5 class="card-header">Data Kategori</h5>
            </div>
              <div class="col-6">
                <button onClick="tambah_kategori('<?= base_url(); ?>')" data-toggle="modal" data-target="#modaltambah" style="float: right; margin-top:15px;margin-right:20px;" class="btn btn-outline-primary">Tambah Data</button>
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
                          <th>ID Kategori</th>
                          <th>Nama Kategori</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <?php $i = 1;
                          foreach ($dataKategori as $row) { ?>
                        <tr>
                          <td><?= $i++ ?></td>
                          <td><?= $row['nama_kategori'] ?></td>
                          <td>
                            <center>
                            <span data-toggle="tooltip" data-placement="top" title="Ubah Kategori">
                            <button onClick="update_kategori('<?= $row['nama_kategori'] ?>','<?= $row['id_kategori'] ?>','<?= base_url() ?>kategori/update_kategori')" data-toggle="modal" data-target="#modaltambah" type="button" class="btn btn-primary btn-rounded btn-icon">
                              <i class="fas fa-edit"></i></button>
                              </span>
                              <span data-toggle="tooltip" data-placement="top" title="Hapus Kategori">
                            <button onClick="delete_kategori('<?= base_url() ?>kategori/delete_kategori/<?= $row['id_kategori'] ?>')" data-toggle="modal" data-target="#modaldelete" type="button" class="btn btn-danger btn-rounded btn-icon">
                              <i class="mdi mdi-delete"></i></button>
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
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal_title"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="" id="form" method="post">
                <div class="form-group"></div>
                <label form="">Nama Kategori</label>
                <input type="text" name="nama_kategori" id="nama_kategori" placeholder="masukan nama kategori" class="form-control">
                <input type="hidden" name="id_kategori" id="id_kategori">
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
              <a id="buttondelete" class="btn btn-primary">Delete Data ></a>

            </div>
          </div>
        </div>
      </div>
    </div>