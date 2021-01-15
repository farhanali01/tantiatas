<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1>Profile</h1>
				<nav class="d-flex align-items-center">
					<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
					<a href="category.html">Profile</a>
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

<!-- ##### Breadcrumb Area Start ##### -->

<!-- ##### Breadcrumb Area End ##### -->
<!-- <div class="col-4 col-md-5 col-lg-4">
	<div class="sidebar-area">
		<div class="single-widget newsletter-widget mb-50">
			<div class="section-heading style-2 mb-30">
				<h4>Profile</h4>
				<div class="line"></div>
			</div>
			<p>Subscribe our newsletter gor get notification about new updates, information discount, etc.</p>
			<div class="newsletter-form">
				<form action="#" method="post">
					<input type="email" name="nl-email" class="form-control mb-15" id="emailnl" placeholder="Enter your email">
					<button type="submit" class="btn vizew-btn w-100">Subscribe</button>
				</form>
			</div>
		</div>

		<div class="single-widget add-widget">
			<a href="#"><img src="img/bg-img/add.png" alt=""></a>
		</div>
	</div>
</div> -->
<!-- ##### Contact Area Start ##### -->
<section class="contact-area mb-80 mt-5 mb-5">
	<div class="container">
		<div class="row ">
			<div class="col-12 col-md-7 col-lg-4">
				<!-- Section Heading -->
				<div class="section-heading style-2 mb-30">
					<h4>Profile</h4>
					<div class="line"></div>
				</div>

				<?php foreach($profile_users as $row) {?>
				<div class="newsletter-form"> 
					<?php if($row['foto'] == null){ ?>
					<img src="<?= base_url()?>assets/image_produk/user.png" style="width: 250px; height: 250px; border-radius:130px;"alt="">
					<?php }else{ ?>
						<img src="<?= base_url()?>assets/foto_users/<?= $row['foto'] ?>" style="width: 250px; height: 250px; border-radius:130px;"alt="">
					<?php } ?>
					<form action="<?= base_url() ?>profile/changeProfile" method="post" enctype="multipart/form-data">
					<input type="file" name="foto" >
				</div>
			</div>
			<div class="col-12 col-md-7 col-lg-8">
				<!-- Section Heading -->
				
				
				<!-- Contact Form Area -->
				<div class="contact-form-area mt-50">
					
						<div class="form-group">
							<label for="fullname">Username</label>
							<input value="<?= $row['username']?>" type="text" name="username" readonly class="form-control" id="username" >
							
						</div>
						<div class="form-group">
							<label for="alamat">Nama Lengkap*</label>
							<input value="<?= $row['fullname']?>" type="text" name="nama_lengkap" class="form-control" id="alamat">
							
						</div>
						<div class="form-group">
							<label for="alamat">Alamat*</label>
							<input value="<?= $row['alamat']?>" type="text" name="alamat" class="form-control" id="alamat">
							
						</div>
						<div class="form-group">
							<label for="email">Email*</label>
							<input value="<?= $row['email']?>"type="text" name="email" class="form-control" id="email">
							
						</div>
						<div class="form-group">
							<label for="hp">No.Handphone*</label>
							<input value="<?= $row['hp']?>" type="text" name="hp" class="form-control" id="hp">
							
						</div>
						<div class="form-group">
							<label for="kota">Kota*</label>
							<input value="<?= $row['kota']?>" type="text" name="kota" class="form-control" id="kota">
							
						</div>
						<div class="form-group">
							<label for="kode_pos">Kode Pos*</label>
							<input value="<?= $row['kode_pos']?>" type="text" name="kode_pos" class="form-control" id="kode_pos">
							
						</div>
						
						<button class="btn vizew-btn mt-30" type="submit">Update Profile</button>
					</form>
				</div>
				<?php }?>
			</div>


		</div>
	</div>
</section>
<!-- ##### Contact Area End ##### -->