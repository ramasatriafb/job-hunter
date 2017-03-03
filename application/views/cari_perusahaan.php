<?php $this->load->view('header'); ?>
<body>
	<?php $this->load->view('navigation'); ?>
	<!-- navigation -->
			<?php $this->load->view('nav'); ?>
		<!-- //navigation -->
		<!-- //main-content -->
	<div class="wthree-main-content">
		<!-- About-page -->
		<section class="agileits about-page">
			<div class="container">
				<h2 class="agile-inner-title">Perusahaan</h2>
				
				<div class="col-md-10 w3ls-about-top-right-grid">
				<div id ="form_editLowongan"></div>
				
				 <?php foreach($perusahaan as $each)
                      {
                          ?>
				<table class="table table-bordered">
								<thead>
									<tr>
										<th>Profil</th>
										<th>Perusahaan</th>
										
									</tr>
								</thead>
								<tbody>
									<tr>
									<td>
									<div class="w3-about-gd-right">
										<img src="<?php if ($each->foto==null) {
						echo base_url("assets/images/Profil.jpg");
						}else{
						 echo base_url("$each->foto") ;
						 } ?>" style="width:180px;height:200px;" alt=" " class="img-responsive" />
						 </div>
									</td>
										
										<td><div class="w3-about-gd-right">
							<h4>Nama : <?php echo $each->nama; ?></h4>
							<h4>Kota : <?php echo $each->kota; ?></h4>
							<p>Alamat : <br><?php echo $each->alamat; ?></p>
							<p>Telpon : <?php echo $each->telpon; ?></p>

							<a class="btn btn-warning" href ="<?php echo base_url("index.php/welcome/sign_in"); ?>" ><i class="fa fa-sign-in"></i>Sign In</a>

							<a class="btn btn-warning" href ="<?php echo base_url("index.php/welcome/sign_up"); ?>" ><i class="fa fa-edit"></i>Sign Up</a>
							
						</div></td>
									</tr>
									
									
								</tbody>
							  </table>
						<div class="clearfix"> </div>
				
						   <?php
                      }
                      ?>
					</div>
					
				</div>
				</section>
</div>
		
	
<?php $this->load->view('footer'); ?>