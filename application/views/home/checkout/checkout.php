  <!-- Start Banner Area -->
  <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Checkout</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="single-product.html">Checkout</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Checkout Area =================-->
    <section class="checkout_area section_gap">      
    <div class="container">
            <div class="returning_customer">                


            </div>
            
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Billing Details</h3>
                        <form class="row contact_form" action="<?= base_url()?>checkout/proses_checkout/" method="post" novalidate="novalidate">
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" placeholder="Nama Lengkap" value="<?= $data_users['fullname']?>"name="name" >
                                
                            </div>
                            
                          
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" value="<?= $data_users['hp']?>" id="hp" placeholder="Hp" name="hp" readonly>
                                
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" value="<?= $data_users['email']?>" id="email" placeholder="Email"  name="email" readonly >
                               
                            </div>
                            
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" value="<?= $data_users['alamat']?>"id="alamat" placeholder="Alamat lengkap" name="alamat">
                                
                            </div>
                            
                            

                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" value="<?= $data_users['kota']?>" id="kota" placeholder="Kota" name="kota">
                                
                            </div>

                            
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" value="<?= $data_users['kode_pos']?>" id="kode_pos" name="kode_pos" placeholder="Postcode/ZIP">
                            </div>
                            <div class="col-md-12 form-group">
                              
                            </div>
                            <div class="col-md-12 form-group">
                               
                            </div>
                       
                    </div>
                    <div class="col-lg-4">
                        <div class="order_box">
                            <h2>Your Order</h2>
                            <ul class="list">
                                <li><a href="#">Produk <span>Total</span></a></li>
                                <?php $total=0; foreach($data_cart as $row ){ ?>
                                <li><a href="#"><?= $row['nama_produk']?> <span class="middle">X<?= $row['qty']?></span> <span class="last">Rp. <?= number_format($row['harga'] * $row['qty'],0,",",".")?></span></a></li>
                                <?php $total += $row['harga'] * $row['qty'];?>
                                <input type="hidden" name="id_card[]" value="<?= $row['id_card']?>">
                                <?php }?>
                            </ul>
                            <ul class="list list_2">
                                <li><a href="#">Subtotal <span> Rp. <?=number_format($total), ',', '.' ?> </span></a></li>
                                
                                <li><a href="#">Total <span> Rp. <?=number_format($total), ',', '.' ?></span></a></li>
                                <input type="hidden" name="total" id="total" value="<?= $total  ?>">
                            </ul>
                            <div class="payment_item">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option5" name="selector">
                                    <label for="f-option5">Via ATM</label>
                                    <div class="check"></div>
                                </div>
                                <p>Silahkan Transfer ke Rekening BNI 1234567 A/N Farhan Ali Fauzan</p>
                            </div>
                            
                            
                            <button class="primary-btn" type="submit" href="#">Proses Transaksi</button> 
                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Checkout Area =================-->