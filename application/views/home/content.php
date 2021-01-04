	<!-- start banner Area -->
	<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				<div class="col-lg-12">
					<div class="active-banner-slider owl-carousel">
						<?php foreach($slider_produk as $row) {?>
						<!-- single-slide -->
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
									<h1><?= $row['nama_produk']?></h1>
									<p><?= $row['deskripsi']?></p>
									<div class="add-bag d-flex align-items-center">
										<a class="add-btn" href="<?= base_url()?>Cart/tambah_cart/<?= $row['id_produk']?>"><span class="lnr lnr-cross"></span></a>
										<span class="add-text text-uppercase">Add to Bag</span>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<center>
								<a href="<?= base_url()?>home/detail_produk/<?= $row['id_produk']?>">	<img  style="width: 350px; height: 350px;"class="img-fluid" src="<?= base_url() ?>assets/image_produk/<?= $row['foto']?>" alt=""></a>
									</center>
								</div>
							</div>
						</div>
						<?php } ?>
						<!-- single-slide -->
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- start features Area -->

	<!-- end features Area -->

	<!-- Start category Area -->
	<section class="category-area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-12">
					<div class="row">
						<div class="col-lg-8 col-md-8">
							<div class="single-deal">
								<div class="overlay"></div>
								
								
									
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End category Area -->

	<!-- start product Area -->
	
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Produk Terbaru</h1>
							<hr>
						</div>
					</div>
				</div>
				<div class="row">
					<?php if($this->session->flashdata('pesan')) {?>
					<p style="display: none;" id="pesan"><?= $this->session->flashdata('pesan')?> </p>
					<p style="display: none;" id="type"><?= $this->session->flashdata('type')?></p>
					<p style="display: none;" id="title"><?= $this->session->flashdata('title')?></p>
					<?php } ?>
					<!-- single product -->
					<?php foreach($data_produk as $row) {?>
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<a href="<?= base_url()?>home/detail_produk/<?= $row['id_produk']?>"><img  style= "width: 300px; height: 300px;"class="img-fluid" src="<?= base_url() ?>assets/image_produk/<?= $row['foto']?>" alt=""></a>
							<div class="product-details">
								<h6><?= $row['nama_produk']?></h6>
								<div class="price">
									<h6>Rp.<?= number_format($row['harga'],0,",",".") ?></h6>
									<h6 class="l-through"></h6>
								</div>
								<div class="prd-bottom">

									<a href="<?= base_url()?>Cart/tambah_cart/<?= $row['id_produk']?>" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
									<a href="<?= base_url() ?>wishlist/addWishlist/<?= $row['id_produk'] ?>" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									
								</div>
							</div>
						</div>
					</div>

					<?php }?>
					<!-- single product -->
					
				</div>
			</div>
		</div>
		<!-- single product slide -->
	

