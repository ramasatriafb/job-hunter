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
				<h2 class="agile-inner-title">Lowongan Kerja</h2>
				
				<div class="col-md-10 w3ls-about-top-right-grid">
				<div id ="form_editLowongan"></div>
				
				 <?php foreach($lowongan as $each)
                      {
                          ?>
				<table class="table table-bordered">
								<thead>
									<tr>
										<th>Lowongan</th>
										
									</tr>
								</thead>
								<tbody>
									<tr>
										
										<td><div class="w3-about-gd-right">
							<h4>Pekerjaan : <?php echo $each->judul; ?></h4>
							<h4>Keahlian : <?php echo $each->syarat; ?></h4>
							<h3>Perusahaan : <?php echo $each->nama; ?></h3>
							<p>Tanggung Jawab : <br><?php echo $each->tanggung_jawab; ?></p>
							<p>Tanggal Buka Lowongan: <?php echo $each->tanggal_buka; ?></p>
							<p>Tanggal Akhir Lowongan : <?php echo $each->tanggal_tutup; ?></p>

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
		
			<!--//clients-->
		<!-- /.about-page -->
		<!-- //main-content -->
	
		
	
<?php $this->load->view('footer'); ?>