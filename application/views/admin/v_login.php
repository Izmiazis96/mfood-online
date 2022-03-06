<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Login</title>

		<!-- BEGIN META -->
		<?php 
			$this->load->view('admin/layout/v_css'); 
		?>
		<!-- END STYLESHEETS -->

	</head>
	<body class="menubar-hoverable header-fixed ">

		<!-- BEGIN LOGIN SECTION -->
		<section class="section-account">
			<div class="img-backdrop" style="background-image: url(<?php echo base_url().'assets/img/img16.jpg'?>)"></div>
			<div class="spacer"></div>
			<div class="card contain-sm style-transparent">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-6">
							<br/>
							<span class="text-lg text-bold text-primary">LOGIN ADMINISTRATOR</span>
							<br/><br/>
							<?php echo $this->session->flashdata('msg');?>
							<form class="form floating-label" action="<?php echo base_url().'administrator/auth'?>" accept-charset="utf-8" method="post">
								<div class="form-group">
									<input type="text" class="form-control" id="username" name="username" required>
									<label for="username">Username</label>
								</div>
								<div class="form-group">
									<input type="password" class="form-control" id="password" name="password" required>
									<label for="password">Password</label>
									
								</div>
								<br/>
								<div class="row">
									<div class="col-xs-6 text-left">
										<div class="checkbox checkbox-inline checkbox-styled">
											<label>
												<input type="checkbox"> <span>Tetap Masuk</span>
											</label>
										</div>
									</div><!--end .col -->
									<div class="col-xs-6 text-right">
										<button class="btn btn-primary btn-raised" type="submit"><span class="fa fa-lock"></span> Login</button>
									</div><!--end .col -->
								</div><!--end .row -->
							</form>
						</div><!--end .col -->
						
							</div><!--end .row -->
						</div><!--end .card-body -->
					</div><!--end .card -->
				</section>
				<!-- END LOGIN SECTION -->

				<!-- BEGIN JAVASCRIPT -->
				<?php $this->load->view('admin/layout/v_js');?>
				<!-- END JAVASCRIPT -->

			</body>
		</html>
