<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Konfirmasi</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Konfirmasi</a>
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

	<!--================Order Details Area =================-->
	<section class="order_details section_gap">
		<div class="container">
			<h3 class="title_confirmation">Terima Kasih Telah Bertransaksi Di Toko Kami.</h3>
			<div class="row order_d_inner">
				<div class="col-lg-8">
					<div class="details_item">
						<h4>Order Info</h4>
						<ul class="list">
							<li><a href="#"><span>Order number</span>: <?= $data_transaksi_group['id_transaksi']?></a></li>
							<li><a href="#"><span>Tanggal</span>: <?= date("d F Y", strtotime($data_transaksi_group['tanggal']))?></a></li>
							
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Billing Address</h4>
						<ul class="list">
							<li><a href="#"><span>Alamat</span>: <?= $data_transaksi_group['alamat']?></a></li>
							<li><a href="#"><span>Kota</span> : <?= $data_transaksi_group['kota']?></a></li>
							<li><a href="#"><span>Kode Pos </span> : <?= $data_transaksi_group['kode_pos']?></a></li>
						</ul>
					</div>
				</div>
				
			</div>
			<div class="order_details_table">
				<h2>Order Details</h2>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Product</th>
								<th scope="col">Quantity</th>
								<th scope="col">Total</th>
							</tr>
						</thead>
						<tbody>
							<?php $total =0; foreach($data_transaksi as $row){?>
							<tr>
								<td>
									<p><?= $row['nama_produk'] ?></p>
								</td>
								<td>
									<h5><?= $row['qty'] ?></h5>
								</td>
								<td>
									<p>Rp <?= number_format($row['harga']),",","." ?></p>
								</td>
							</tr>
							<?php $total = $row['harga']*$row['qty']?>
							<?php }?>
							<tr>
								<td>
									<h4>Subtotal</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>Rp. <?=number_format($total), ",", "." ?></p>
								</td>
							</tr>
							
							
							
							<tr>
								<td>
									<h4>Total</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>Rp. <?=number_format($total), ',', '.' ?></p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<!--================End Order Details Area =================-->