<?php $this->load->view('header'); ?>
<body>
	<?php $this->load->view('navigation'); ?>
	<!-- navigation -->
			<?php $this->load->view('pelamar/navigation'); ?>
		<!-- //navigation -->
		<!-- //main-content -->
		<section class="agileits Services-page">
		<!-- About-page -->

					<div class="agile-info-advantages">
		<div class="container">
			<h2 class="agile-inner-title">Lamaran Anda</h2>
			<p class="vel">Semoga berhasil</p>
			
			 <?php 
			 $no =1;
			 foreach($lamaran as $each)
                      {
                          ?>
			<div class="w3-agileits-our-advantages-grids">
				<div class="col-md-4 w3layouts-our-advantages-grid">
					<div class="col-xs-3 w3l-our-advantages-grd-left">
						<p><?php echo $no; ?> </p>
					</div>
					<div class="col-xs-9 w3l-our-advantages-grd-right">
						<h4>Pekerjaan : <?php echo $each->judul; ?></h4>
							<h4>Keahlian : <?php echo $each->syarat; ?></h4>
							<h4>Perusahaan :  <a href ="<?php echo base_url("index.php/pelamar/dashboard/get_profil/$each->id_perusahaan"); ?>"><?php echo $each->nama; ?></h4>
							<p>Tanggung Jawab : <br><?php echo $each->tanggung_jawab; ?></p>
							<p>Tanggal Buka Lowongan: <?php echo $each->tanggal_buka; ?></p>
							<p>Tanggal Akhir Lowongan : <?php echo $each->tanggal_tutup; ?></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				
				<?php $no++;
				} ?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

				<div class="agile-info-advantages">
		<div class="container">
		<h2 class="agile-inner-title">Bookmark Lamaran Anda</h2>

			<p class="vel">Semoga berhasil</p>
			
			 <?php 
			 $no =1;
			 foreach($bookmark as $each)
                      {
                          ?>
			<div class="w3-agileits-our-advantages-grids">
				<div class="col-md-4 w3layouts-our-advantages-grid">
					<div class="col-xs-3 w3l-our-advantages-grd-left">
						<p><?php echo $no; ?> </p>
					</div>
					<div class="col-xs-9 w3l-our-advantages-grd-right">
						<h4>Pekerjaan : <?php echo $each->judul; ?></h4>
							<h4>Keahlian : <?php echo $each->syarat; ?></h4>
							<h4>Perusahaan :  <a href ="<?php echo base_url("index.php/pelamar/dashboard/get_profil/$each->id_perusahaan"); ?>"><?php echo $each->nama; ?></h4>
							<p>Tanggung Jawab : <br><?php echo $each->tanggung_jawab; ?></p>
							<p>Tanggal Buka Lowongan: <?php echo $each->tanggal_buka; ?></p>
							<p>Tanggal Akhir Lowongan : <?php echo $each->tanggal_tutup; ?></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				
				<?php $no++;
				} ?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>



		

	</section>
<?php $this->load->view('footer'); ?>