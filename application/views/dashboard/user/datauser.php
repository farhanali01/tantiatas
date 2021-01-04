<!-- partial -->
<div class="main-panel">
     <div class="content-wrapper">
         <div class="page-header">
             <h3 class="page-title"> Nama User </h3>
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
                         <h4 class="card-title">Data User</h4>
                         <button onClick="tambah_user('<?= base_url(); ?>')" data-toggle="modal" data-target="#modaltambah" style="float: right; position : relative; bottom :45px;" class="btn btn-outline-primary">Tambah Data User</button>
                         <p class="card-description"> Add class <code>.table</code>
                         </p>
                         <div class="table-responsive">
                             <table class="table">
                                 <thead>
                                     <tr>
                                         <th>ID User</th>
                                         <th>Username</th>
                                         <th>Email</th>
                                         <th>Action</th>

                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php $i = 1;
                                        foreach ($data_user as $row) { ?>
                                         <tr>
                                             <td><?= $i++ ?></td>
                                             <td><?= $row['username'] ?></td>
                                             <td><?= $row['email'] ?></td>
                                            
                                            

                                            
                                         </tr>
                                     <?php } ?>

                                 </tbody>
                             </table>
                         </div>
                     </div>
                 </div>
             </div>

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
                                 <label form="">Username</label>
                                 <input type="text" name="username" id="username" placeholder="masukan username" class="form-control">
                                 <label form="">Email</label>
                                 <input type="text" name="email" id="email" placeholder="masukan email" class="form-control">
                                 <input type="hidden" name="id_user" id="id_user">
                         </div>
                         <div class="modal-footer">
                             <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             <button type="submit" class="btn btn-primary">Submit</button>

                         </div>
                         </form>
                     </div>
                 </div>
             </div>