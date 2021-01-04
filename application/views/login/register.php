<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Login/Daftar</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Login/Daftar</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="<?= base_url()?>assets/home/img/login.jpg" alt="">
						<div class="hover">
							
                            <a class="primary-btn" href="<?= base_url()?>login/">Login</a>
                           
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
                        <h3>Create new account</h3>
                        <?php if($this->session->flashdata('pesan')) {?>
                            <div class="alert alert-<?= $this->session->flashdata('type')?>" role="alert">
                            <center> <?= $this->session->flashdata('pesan'); ?> </center></div>
                        <?php }?> 
                        
                        
                            
                        
						<form action="<?= base_url()?>register/proses_register" class="row login_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="username" name="username" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
                            </div>
                            <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="fullname" name="fullname" placeholder="Fullname" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Fullname'">
                            </div>
                           
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="konfirmasiPassword" name="konfirmasipassword" placeholder="Konfirmasi Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Konfirmasi Password'">
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="selector">
									<label for="f-option2">Keep me logged in</label>
								</div>
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Daftar</button>
								<a href="#">Forgot Password?</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->