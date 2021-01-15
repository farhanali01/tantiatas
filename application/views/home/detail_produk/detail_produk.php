<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1>Detail Produk</h1>
				<nav class="d-flex align-items-center">
					<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
					<a href="category.html">Detaill Produk</a>
				</nav>
			</div>
		</div>
	</div>
</section>

<!--================Single Product Area =================-->
<div class="product_image_area mb-5">
	<div class="container">
		<div class="row s_product_inner">
			<div class="col-lg-6">
				<div class="single-prd-item">
					<img class="img-fluid" src="<?= base_url() ?>assets/image_produk/<?= $detail_produk['foto'] ?>" alt="">
				</div>
			</div>
			<div class="col-lg-5 offset-lg-1">
				<div class="s_product_text">
					<h3><?= $detail_produk['nama_produk'] ?></h3>
					<h2>Rp. <?= number_format($detail_produk['harga']), ",", "." ?></h2>
					<ul class="list">
							<li><a class="#" href="#"><span>Kategori</span> :<?= $detail_produk['nama_kategori']?></a></li>
							
						</ul>

					<p><?= $detail_produk['deskripsi']?></p>
					<div class="product_count">
						<label for="qty">Quantity:</label>
						<input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
						<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
						<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
					</div>
					<div class="card_area d-flex align-items-center">
						<a class="primary-btn" href="<?= base_url() ?>Cart/tambah_cart/<?= $detail_produk['id_produk'] ?>">Add to Cart</a>
					</div>
				</div>
			</div>
		</div>
		<section class="product_description_area">
			<div class="container">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active show" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Specification</a>
					</li>

				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
						<p><?= $detail_produk['deskripsi']?></p>
						
					</div>
					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<div class="table-responsive">
							<table class="table">
								<tbody>
									<tr>
										<td>
											<h5>Bahan</h5>
										</td>
										<td>
											<?php if ($detail_produk == 5) { ?>
												<h5>Polyster</h5>
											<?php } else if ($detail_produk == 4) { ?>
												<h5>Polyster</h5>
											<?php } else { ?>
												<h5>Blacu</h5>
											<?php } ?>
										</td>
									</tr>


									<tr>
										<td>
											<h5>Berat</h5>
										</td>
										<td>
											<h5><?= $detail_produk['berat'] ?> gram</h5>
										</td>
									</tr>
									<tr>
										<td>
											<h5>Kategori</h5>
										</td>
										<td>
											<h5><?= $detail_produk['nama_kategori'] ?></h5>
										</td>
									</tr>

								</tbody>
							</table>
						</div>
					</div>

				</div>
			</div>
		</section>
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Produk Terkait</h1>
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
					<?php foreach($produk_terkait as $row) {?>
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
	</div>
</div>

<!--================End Single Product Area =================-->