<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Produk Favorite</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="#">Shop<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">Produk Favorite</a>
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
<div class="container">
    <h3 class="mt-3">Daftar Produk Favorite</h3>
    <div class="row mt-3">
        <div class="col-xl-12 col-lg-8 col-md-7">
            <!-- Start Filter Bar -->
            <div class="filter-bar d-flex flex-wrap align-items-center">
                <div class="sorting">
                    <select>
                        <option value="1">Default sorting</option>
                        <option value="1">Default sorting</option>
                        <option value="1">Default sorting</option>
                    </select>
                </div>
                <div class="sorting mr-auto">
                    <select>
                        <option value="1">Show 12</option>
                        <option value="1">Show 12</option>
                        <option value="1">Show 12</option>
                    </select>
                </div>
                <div class="pagination">
                    <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                    <a href="#">6</a>
                    <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <!-- End Filter Bar -->
            <!-- Start Best Seller -->
            <section class="lattest-product-area pb-40 category-list">
                <div class="row">
                    <!-- single product -->
                    <?php foreach ($data_produk as $row) { ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-product">
                                <a href="<?= base_url() ?>home/detail_produk/<?= $row['id_produk'] ?>"><img style="width:255px; height:271px;" class="img-fluid" src="<?= base_url() ?>assets/image_produk/<?= $row['foto'] ?>" alt=""></a>
                                <div class="product-details">
                                    <h6><?= $row['nama_produk'] ?></h6>
                                    <div class="price">
                                        <h6>Rp. <?= number_format($row['harga']), ",", "." ?></h6>
                                        <h6 class="l-through"></h6>
                                    </div>
                                    <div class="prd-bottom">

                                        <a href="<?= base_url() ?>Cart/tambah_cart/<?= $row['id_produk'] ?>" class="social-info">
                                            <span class="ti-bag"></span>
                                            <p class="hover-text">add to bag</p>
                                        </a>
                                        <a href="<?= base_url() ?>wishlist/deleteWishlist/<?= $row['id_produk'] ?>" class="social-info">
                                            <span class="lnr "><i class="fa fa-trash"></i></span>
                                            <p class="hover-text">Hapus</p>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </section>
            <!-- End Best Seller -->
            <!-- Start Filter Bar -->
            <div class="filter-bar d-flex flex-wrap align-items-center">
                <div class="sorting mr-auto">
                    <select>
                        <option value="1">Show 12</option>
                        <option value="1">Show 12</option>
                        <option value="1">Show 12</option>
                    </select>
                </div>
                <div class="pagination">
                    <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                    <a href="#">6</a>
                    <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <!-- End Filter Bar -->
        </div>
    </div>
</div>

<!-- Start related-product Area -->
<section class="related-product-area section_gap">
</section>
<!-- End related-product Area -->