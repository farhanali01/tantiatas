<body>

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a style="font-family: 'Russo One', sans-serif;" class="navbar-brand " href="index.html">Tantia Tas Jakarta</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<?php if (isset($active_home)) { ?>
								<li class="nav-item active"><a class="nav-link" href="<?= base_url() ?>home/">Home</a></li>
							<?php } else { ?>
								<li class="nav-item "><a class="nav-link" href="<?= base_url() ?>home/">Home</a></li>
							<?php } ?>

							<?php if (isset($active_kategori) || isset($active_favorite)) { ?>
								<li class="nav-item submenu dropdown active">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Produk</a>
									<ul class="dropdown-menu">
										<?php if (isset($active_kategori)) { ?>
											<li class="nav-item active"><a class="nav-link" href="<?= base_url() ?>home/kategori_tas">Semua Produk</a></li>
										<?php } else { ?>

											<li class="nav-item"><a class="nav-link" href="<?= base_url() ?>home/kategori_tas">Semua Produk</a></li>
										<?php } ?>
										<?php if (isset($active_favorite)) { ?>
											<li class="nav-item active"><a class="nav-link" href="<?= base_url() ?>home/produk_favorite">Produk Favorite</a></li>
										<?php } else { ?>
											<li class="nav-item "><a class="nav-link" href="<?= base_url() ?>home/produk_favorite">Produk Favorite</a></li>
										<?php } ?>
									</ul>
								</li>
							<?php } else { ?>
								<li class="nav-item submenu dropdown ">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Produk</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="<?= base_url() ?>home/kategori_tas">Semua Produk</a></li>
										<li class="nav-item"><a class="nav-link" href="<?= base_url() ?>home/produk_favorite">Produk Favorite</a></li>
									</ul>
								</li>
							<?php } ?>

							<?php if (isset($active_rekomendasi)) { ?>
								<li class="nav-item active"><a class="nav-link" href="<?= base_url() ?>home/rekomendasi/">Rekomendasi</a></li>
							<?php } else { ?>
								<li class="nav-item"><a class="nav-link" href="<?= base_url() ?>home/rekomendasi/">Rekomendasi</a></li>
							<?php } ?>
							<?php if (isset($active_transaksi)) { ?>
								<li class="nav-item active"><a class="nav-link" href="<?= base_url() ?>home/transaksi/">Riwayat Transaksi</a></li>
							<?php } else { ?>
								<li class="nav-item"><a class="nav-link" href="<?= base_url() ?>home/transaksi/">Riwayat Transaksi</a></li>
							<?php } ?>

							<?php if (isset($active_tentangkami)) { ?>
								<li class="nav-item active"><a class="nav-link" href="<?= base_url() ?>home/contact/">Tentang Kami</a></li>
							<?php } else { ?>
								<li class="nav-item "><a class="nav-link" href="<?= base_url() ?>home/contact/">Tentang Kami</a></li>
							<?php } ?>
							<?php if ($this->session->userdata('username')) { ?>

							<?php } else { ?>
								<?php if (isset($active_login)) { ?>
									<li class="nav-item"><a class="nav-link" href="<?= base_url() ?>login/">Login</a></li>
								<?php } else { ?>
									<li class="nav-item active"><a class="nav-link" href="<?= base_url() ?>login/">Login</a></li>
								<?php } ?>
							<?php } ?>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $this->session->userdata('username') ?></a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="<?= base_url() ?>home/profile">Profile</a></li>
									<li class="nav-item"><a class="nav-link" href="<?= base_url() ?>login/proses_logout">Logout</a></li>
								</ul>
							</li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="<?= base_url() ?>home/dataCart/" class="cart"><span class="ti-bag"></span></a></li>
							
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search_input" placeholder="Search Here">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
	<!-- End Header Area -->