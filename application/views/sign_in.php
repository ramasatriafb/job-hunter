
<?php $this->load->view('header'); ?>
<body>
	<?php $this->load->view('navigation'); ?>
	<!-- navigation -->
			<?php $this->load->view('nav'); ?>
		<!-- //navigation -->
		<!-- //main-content -->
		<div class="wthree-main-content">
		<!-- Blog -->
		<div class="agileits Blog">
			<div class="container">
				<div class="container">
				<h2 class="agile-inner-title">Masuk Akun</h2>
			 <div class="grid_3 grid_5">
					  <div class="tab-content">
					 
						<strong><?php echo validation_errors(); ?></strong> 
				
					
							<div class="tab-pane active" id="horizontal-form">
								<?php echo form_open("authentication/index"); ?>
									<div class="form-group">
										<label for="focusedinput" class="col-sm-4 control-label">Email</label>
										<div class="col-sm-8">
											<input type="text" class="form-control1" name="email" id="focusedinput" placeholder="Email" >
										</div>
									</div>
									<div class="form-group">
										<label for="focusedinput" class="col-sm-4 control-label">Password</label>
										<div class="col-sm-8">
											<input type="password" class="form-control1" name="password" id="password" placeholder="Password">
										</div>
									</div>
									
						
					 <button type="submit" class="btn btn-default btn-block">Sign In</button>
								</form>
							</div>
						</div>			  
						</div>
			</div>
	
				
<!-- //news -->
			</div>
		</div>
		<!-- // Blog -->
		</div>
		<!-- //main-content -->
		
	
<?php $this->load->view('footer'); ?>