 <!-- Start Banner Area -->
 <section class="banner-area organic-breadcrumb">
     <div class="container">
         <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
             <div class="col-first">
                 <h1>Keranjang</h1>
                 <nav class="d-flex align-items-center">
                     <a href="<?= base_url() ?>">Home<span class="lnr lnr-arrow-right"></span></a>
                     <a href="<?= base_url() ?>">Keranjang</a>
                 </nav>
             </div>
         </div>
     </div>
 </section>
 <!-- End Banner Area -->

 <!--================Cart Area =================-->
 <section class="cart_area">
     <div class="container">
         <div class="cart_inner">
             <div class="table-responsive">
                 <form action="<?= base_url() ?>cart/updateCart/" method="post">
                     <table class="table">
                         <thead>
                             <tr>
                                 <th scope="col">Product</th>
                                 <th scope="col">Price</th>
                                 <th scope="col">Quantity</th>
                                 <th scope="col">Total</th>
                                 <th scope="col">Action</th>
                             </tr>
                         </thead>

                         <tbody>
                             <?php $total = 0;
                                $i = 0;
                                foreach ($data_cart as $row) { ?>
                                 <tr>
                                     <td>
                                         <div class="media">
                                             <div class="d-flex">
                                                 <img style="width: 152px; height: 102px;" src="<?= base_url() ?>assets/image_produk/<?= $row['foto'] ?>" alt="">
                                             </div>
                                             <div class="media-body">
                                                 <p><?= $row['nama_produk'] ?></p>
                                             </div>
                                         </div>
                                     </td>
                                     <td width="200px">
                                         <h5>Rp <?= number_format($row['harga']), ",", "." ?></h5>
                                     </td>
                                     <td>
                                         <div class="product_count">
                                             <input type="number" name="qty" id="sst<?= $row['id_card'] ?>" maxlength="8" value="<?= $row['qty'] ?>" title="Quantity:" min="0" max="10" class="input-text qty">
                                             <input type="hidden" name="id_card[]" value="<?= $row['id_card'] ?>">

                                         </div>
                                     </td>
                                     <td>
                                         <h5>Rp <?= number_format($row['harga'] * $row['qty']), ",", "." ?></h5>
                                     </td>

                                     <?php $total += $row['harga'] * $row['qty'] ?>


                                     <td>
                                         <button onClick="delete_order('<?= base_url() ?>cart/delete_cart/<?= $row['id_card'] ?>')" data-toggle="modal" data-target="#modaldelete" type="button" class="btn btn-danger btn-rounded btn-icon">
                                             <i class="fa fa-trash"></i>
                                         </button>
                                     </td>
                                 </tr>
                             <?php } ?>
                             <tr class="bottom_button">
                                 <td>
                                     <button type="submit" class="gray_btn">Update Cart</button>
                                 </td>
                                 <td>

                                 </td>
                                 <td>

                                 </td>
                                 <td>

                                 </td>
                                 <td>

                                 </td>
                             </tr>

                             <tr class="bottom_button">
                                 <td>

                                 </td>
                                 <td>

                                 </td>
                                 <td>

                                 </td>
                                 <td>
                                     <h5>Subtotal</h5>
                                 </td>
                                 <td>
                                     <h5> Rp <?= number_format($total), ',', '.' ?> </h5>
                                 </td>
                             </tr>


                             <tr class="out_button_area">
                                 <td>

                                 </td>
                                 <td>

                                 </td>
                                 <td>

                                 </td>
                                 <td>

                                 </td>
                                 <td>
                                     <div class="checkout_btn_inner d-flex align-items-center">
                                         <a class="gray_btn" href="<?= base_url() ?>">Back</a>
                                         <?php if ($data_detail['alamat'] != null) { ?>
                                             <a class="primary-btn" href="<?= base_url() ?>home/checkout">Proceed to checkout</a>
                                         <?php } else { ?>
                                             <a class="primary-btn" href="#" data-toggle="modal" data-target="#modal_notif">Proceed to checkout</a>
                                         <?php } ?>
                                     </div>
                                 </td>
                             </tr>

                         </tbody>
                     </table>
                 </form>
             </div>
         </div>
     </div>
 </section>
 <!--================End Cart Area =================-->

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
                 <a href="" id="buttondelete" class="btn btn-primary">Delete Data </a>

             </div>
         </div>
     </div>
 </div>
 <div class="modal fade" id="modal_notif" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="modal_title"></h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <h4>Harap Lengkapi data profile terlebih dahulu</h4>
             </div>
             <div class="modal-footer">
                 <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 <a href="<?= base_url()?>home/profile"  class="btn btn-primary">Lengkapi data diri</a>

             </div>
         </div>
     </div>
 </div>
 </div>