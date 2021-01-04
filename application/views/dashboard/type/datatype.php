 <!-- partial -->
 <div class="main-panel">
     <div class="content-wrapper">
         <div class="page-header">
             <h3 class="page-title"> Nama Type </h3>
             <nav aria-label="breadcrumb">
                 <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="#">Tables</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                 </ol>
             </nav>
         </div>
         <div class="row">
             <div class="col-lg-12 grid-margin stretch-card">
                 <div class="card">
                     <div class="card-body">
                         <h4 class="card-title">Data Type</h4>
                         <button onClick="tambah_type('<?= base_url(); ?>')" data-toggle="modal" data-target="#modaltambah" style="float: right; position : relative; bottom :45px;" class="btn btn-outline-primary">Tambah Data</button>
                         <p class="card-description"> Add class <code>.table</code>
                         </p>
                         <div class="table-responsive">
                             <table class="table">
                                 <thead>
                                     <tr>
                                         <th>ID type</th>
                                         <th>Nama Type</th>
                                         <th>Action</th>

                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php $i = 1;
                                        foreach ($data_type as $row) { ?>
                                         <tr>
                                             <td><?= $i++ ?></td>
                                             <td><?= $row['nama_type'] ?></td>
                                             <td>

                                                 <button onClick="update_type('<?= $row['nama_type'] ?>','<?= $row['id_type'] ?>','<?= base_url() ?>type/update_type')" data-toggle="modal" data-target="#modaltambah" type="button" class="btn btn-primary btn-rounded btn-icon">
                                                     <i class="mdi mdi-home-outline"></i>
                                                 
                                                 <button onClick="delete_type('<?= base_url() ?>type/delete_type/<?= $row['id_type'] ?>')" data-toggle="modal" data-target="#modaldelete" type="button" class="btn btn-danger btn-rounded btn-icon">
                                                     <i class="mdi mdi-delete"></i>
                                                 </button>
                                                 </button>

                                             </td>
                                         </tr>
                                     <?php } ?>

                                 </tbody>
                             </table>
                         </div>
                     </div>
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
                                 <label form="">Nama type</label>
                                 <input type="text" name="nama_type" id="nama_type" placeholder="masukan nama type" class="form-control">
                                 <input type="hidden" name="id_type" id="id_type">
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