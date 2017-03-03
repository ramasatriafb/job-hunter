<?php $this->load->view('header'); ?>
<body>
	<?php $this->load->view('navigation'); ?>
	<!-- navigation -->
				<?php $this->load->view('perusahaan/navigation'); ?>
				<div class="wthree-main-content">
		<!-- About-page -->
		<section class="agileits about-page">
			<div class="container">
				<h2 class="agile-inner-title">Profil Pelamar</h2>
				<div class="w3-about-top">
				<div class="col-md-4 w3ls-about-top-left-grid">
				  <?php foreach($profil as $each)
                      {
                          ?>
					<img src="<?php if ($each->foto==null) {
						echo base_url("assets/images/Profil.jpg");
						}else{
						 echo base_url("$each->foto") ;
						 } ?>" style="width:180px;height:200px;" alt=" " class="img-responsive" />
					<h4><?php echo $each->nama_lengkap; ?></h4>

					
						   <?php
                      }
                      ?>
				</div>
				<div class="col-md-4 w3ls-about-top-right-grid">
				  <?php foreach($profil as $each)
                      {
                          ?>
                    <div class="w3ls-about-gd">
						<div class="w3-about-gd-left">
							<i class="fa fa-location-arrow"></i>
						</div>
						<div class="w3-about-gd-right">
							<p><?php echo $each->asal; ?></p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="w3ls-about-gd">
						<div class="w3-about-gd-left">
							<i class="fa fa-user"></i>
						</div>
						<div class="w3-about-gd-right">
							<p><?php echo $each->nama; ?>, 
							<?php $lahir =  $each->tahun_lahir;
							 $umur = date("Y") - $lahir;
							   echo $umur; ?> tahun</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="w3ls-about-gd">
						<div class="w3-about-gd-left">
							<i class="fa fa-cloud-download"></i>
						</div>
						<div class="w3-about-gd-right">
						<?php if ($each->cv==null) { 
							echo '<p>Curriculum Vitae</p>  <button id="upload_cv" type="submit" class="btn btn-primary"><i class=" fa fa-edit"></i>Unggah CV Terbaru Anda</button>';
						}else{
							echo '<a href="'.$each->cv.'">Curriculum Vitae</a> ';
						} ?>
							
						</div>
						<div class="clearfix"> </div>
						
					</div>
					
						<div class="clearfix"> </div>
					</div>
					<?php } ?>
						   
                      
                      <div class="w3-about-gd-left">
							
					</div>
					<div class="col-md-4 w3ls-about-top-right-grid">
				  <?php foreach($profil as $each)
                      {
                          ?>
                  
					<div class="w3ls-about-gd">
						<div class="w3-about-gd-left">
							<i class="fa fa-phone"></i>
						</div>
						<div class="w3-about-gd-right">
							<p><?php echo $each->telpon; ?></p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="w3ls-about-gd">
						<div class="w3-about-gd-left">
							<i class="fa fa-envelope"></i>
						</div>
						<div class="w3-about-gd-right">
							<p><?php echo $each->email; ?></p>
						</div>
						<div class="clearfix"> </div>
					</div>

						   <?php
                      }
                      ?>
                      <div class="w3-about-gd-left">
							
					</div>
					<div class="w3-about-gd-right">
					</div>
					
				</div>
				
				</section>

				<section class="agileits about-page">
			<div class="container">
				<h2 class="agile-inner-title">Pengalaman</h2>
				<div class="w3-about-top">
				
				<div class="col-md-8 w3ls-about-top-right-grid">
					
					 <?php foreach($pengalaman as $each)
                      {
                          ?>
					<div class="w3ls-about-gd">
						<div class="w3-about-gd-left">
							<h4><?php echo $each->tahun; ?> </h4>
						</div>
						<div class="w3-about-gd-right">
							<h4><?php echo $each->posisi; ?></h4>
							<h5 ><?php echo $each->nama_perusahaan; ?></h5>
							<p><?php echo $each->tanggung_jawab; ?></p>
							
						</div>
						<div class="clearfix"> </div>
					</div>
				   <?php
                      }
                      ?>
					</div>
					

					<div class="col-md-2 w3ls-about-top-right-grid">
					<div class="w3-about-gd-right">
							
					</div>
					<div class="w3-about-gd-right">
				
					</div>
						<div class="clearfix"> </div>
					</div>
					</div>
				
				
				
					
				
				<div id ="form_tambahPengalaman"></div>
				
				</section>

						<section class="agileits about-page">
			<div class="container">
				<h2 class="agile-inner-title">Pendidikan</h2>
				<div class="w3-about-top">
				
				<div class="col-md-8 w3ls-about-top-right-grid">
					
					 <?php foreach($pendidikan as $each)
                      {
                          ?>
					<div class="w3ls-about-gd">
						<div class="w3-about-gd-left">
							<h4><?php echo $each->tahun_lulus; ?> </h4>
						</div>
						<div class="w3-about-gd-right">
							<h4><?php echo $each->sekolah; ?> - <?php echo $each->gelar; ?></h4>
							<h5 ><?php echo $each->jurusan; ?></h5>
							<p>Nilai Akhir = <?php echo $each->nilai_akhir; ?></p>
							
						</div>
						<div class="clearfix"> </div>
					</div>
				   <?php
                      }
                      ?>
					</div>
					

					<div class="col-md-2 w3ls-about-top-right-grid">
					<div class="w3-about-gd-right">
							
					</div>
					<div class="w3-about-gd-right">
					
					</div>
						<div class="clearfix"> </div>
					</div>
					</div>

					
				</section>

			<!--//clients-->
		<!-- /.about-page -->
		<!-- //main-content -->
	
<?php $this->load->view('footer'); ?>