<?php $this->load->view('header'); ?>
<body>
	<?php $this->load->view('navigation'); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	<!-- navigation -->
	<body ng-app="myApp" ng-controller="userCtrl">
			<?php $this->load->view('nav'); ?>
		<!-- //navigation -->
		<!-- //main-content -->
		<div class="wthree-main-content">
		<!-- Blog -->
		<div class="agileits Blog">
			<div class="container">
				
	
				<div class="container">
				<h2 class="agile-inner-title">Register Akun</h2>
			 <div class="grid_3 grid_5">
					  <div class="tab-content">
							<div class="tab-pane active" id="horizontal-form">
								<!-- <form class="form-horizontal"> -->
								<?php echo form_open("register/create"); ?>
									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">Nama</label>
										<div class="col-sm-10">
											<input type="text" class="form-control1" id="focusedinput" name="nama" placeholder="Nama Lengkap Anda" >
										</div>
									</div>
									<div class="form-group">
										<label for="selector1" class="col-sm-2 control-label">Anda Sebagai</label>
										<div class="col-sm-10">
										<select name="role" id="selector1" class="form-control1">
											<option>Pelamar</option>
											<option>Perusahaan</option>
											
										</select></div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label">Gender</label>
										<div class="col-sm-8">
										<?php foreach($kelamin as $each)
					                      {
					                          ?>
											<div class="radio-inline"><label><input type="radio" name="jenis_kelamin" value="<?=$each->id?>"> <?=$each->nama?></label></div>
											  <?php
                      }
                      ?>
										</div>
									</div>
									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">Username</label>
										<div class="col-sm-10">
											<input type="text" class="form-control1" id="focusedinput" name="username" placeholder="Username">
										</div>
									</div>
									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">Email</label>
										<div class="col-sm-10">
											<input type="text" class="form-control1" name="email" id="focusedinput" placeholder="Email" >
										</div>
									</div>
									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">Password</label>
										<div class="col-sm-10">
											<input type="password" class="form-control1" name="password" id="password" placeholder="Password">
										</div>
									</div>
									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label" >Konfirmasi Password</label>
										<div class="col-sm-10">
											<input type="password" class="form-control1" id="konfirmasi_pass" name="konfirmasi_pass" placeholder="Konfirmasi Password Anda">
										</div>
									</div>
						
					 <button type="submit" class="btn btn-default btn-block">Register</button>
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
		</body>
	
<?php $this->load->view('footer'); ?>