 <!-- Start Banner Area -->
 <section class="banner-area organic-breadcrumb">
     <div class="container">
         <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
             <div class="col-first">
                 <h1>Riwayat Transaksi</h1>
                 <nav class="d-flex align-items-center">
                     <a href="<?= base_url() ?>">Home<span class="lnr lnr-arrow-right"></span></a>
                     <a href="<?= base_url() ?>">Riwayat Transaksi</a>
                 </nav>
             </div>
         </div>
     </div>
 </section>
 <?php if($this->session->flashdata('pesan')) {?>
					<p style="display: none;" id="pesan"><?= $this->session->flashdata('pesan')?> </p>
					<p style="display: none;" id="type"><?= $this->session->flashdata('type')?></p>
					<p style="display: none;" id="title"><?= $this->session->flashdata('title')?></p>
					<?php } ?>
 <!-- End Banner Area -->

 <!--================Cart Area =================-->
 <section class="cart_area">
     <div class="container">
         <div class="cart_inner">
             <div class="table-responsive">
                 <table class="table">
                     <thead>
                         <tr>
                             <th scope="col">ID Transaksi</th>
                             <th scope="col">Tanggal Transaksi</th>
                             <th scope="col">Total</th>
                             <th scope="col">Status</th>
                             <th scope="col">Action</th>
                         </tr>
                     </thead>

                     <tbody>
                         <?php foreach ($data_transaksi as $row) { ?>
                             <tr>
                                 <td> <?= $row['id_transaksi'] ?> </td>
                                 <td> <?= date("d F Y", strtotime($row['tanggal'])) ?></td>
                                 <td> Rp <?= number_format($row['total_harga']), 0, ",", "." ?></td>

                                 <td><?php if ($row['status_transaksi'] == 0) { ?>
                                         <span class="btn btn-warning">Menunggu Di Proses</span>
                                     <?php } else if ($row['status_transaksi'] == 1) { ?>
                                         <span class="btn btn-danger">Menunggu Pembayaran</span>
                                     <?php } else if ($row['status_transaksi'] == 2) { ?>
                                         <span class="btn btn-info">Sedang Di Proses</span>
                                     <?php } else if ($row['status_transaksi'] == 3) { ?>
                                        <span class="btn btn-info">Selesai</span>
                                        
                                        <?php }?>
                                 </td>
                                 <td>
                                     <?php if ($row['status_transaksi'] == 0) { ?>
                                        <button onClick="cancel_pembayaran('<?= base_url()?>transaksi/cancel_pembayaran/<?= $row['id_transaksi']?>'
                                        )" data-toggle="modal" data-target="#modalcancel" type="button" class="btn btn-primary btn-rounded btn-icon">
                                         <span class="">Cancel</span>
                                        </button>
                                     <?php } else if ($row['status_transaksi'] == 1) { ?>
                                         <button onClick="bukti_pembayaran('<?= base_url() ?>transaksi/proses_bayar','Rp <?= number_format($row['total_harga']), 0, ",", "." ?>','<?= $row['foto'] ?>','<?= $row['id_transaksi'] ?>')" data-toggle="modal" data-target="#modalbayar" type="button" class="btn btn-success btn-rounded btn-icon">
                                             <i class="mdi mdi-home-outline">Bayar</i>
                                         </button>
                                     <?php } ?>
                                 </td>

                             </tr>
                         <?php } ?>
                     </tbody>
                 </table>
                 <hr>
             </div>
         </div>
     </div>
 </section>
 <!--================End Cart Area =================-->

 <div class="modal fade" id="modalbayar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="model_title">Bukti Pembayaran</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form action="" id="form" method="post" enctype="multipart/form-data">


                     <div class="form-group">
                         <label form="">Total</label>
                         <input type="text" name="total_harga" id="total_harga" placeholder="Total harga" class="form-control">
                     </div>

                     <div class="form-group">
                         <label for="">Foto</label>
                         <div class="custom-file">
                             <input type="file" name="foto" class="custom-file-input" id="exampleInputFile">
                             <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                         </div>
                     </div>
                     <input type="hidden" name="id_transaksi" id="id_transaksi">
             </div>


         <div class="modal-footer">
             <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
             <button type="submit" class="btn btn-primary">Submit</button>

         </div>
         </form>
     </div>
 </div>
 </div>

 <div class="modal fade" id="modalcancel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="model_title">Cancel Pesanan</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
              Anda yakin ingin Cancel ?
            </div>

         <div class="modal-footer">
             <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
             <a id="buttoncancel" class="btn btn-primary">Submit </a>

         </div>
         </form>
     </div>
 </div>
 </div>