<?php $this->load->view('header'); ?>
<body>
	<?php $this->load->view('navigation'); ?>
	<!-- navigation -->
			<?php $this->load->view('pelamar/navigation'); ?>
		<!-- //navigation -->
		<!-- //main-content -->
		<div class="wthree-main-content">
		<!-- About-page -->
		<section class="agileits about-page">
			<div class="container">
				<h2 class="agile-inner-title">Temukan Pekerjaan Impianmu Bersama Job Hunter</h2>
			 <div class="grid_3 grid_5">
					  <div class="tab-content">
							<div class="tab-pane active" id="horizontal-form">
								<?php echo form_open('pelamar/dashboard/cari'); ?>
									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">Cari Pekerjaan</label>
										<div class="col-sm-8">
											<input type="text" class="form-control1" id="focusedinput" name="lowongan" laceholder="Cari Pekerjaan atau Perusahaan">
										</div>
									</div>
						
					 <button type="submit" class="btn btn-default btn-block"><i class="fa fa-search"></i>Cari</button>
								</form>
							</div>
						</div>			  
						</div>
			</div>
			<!-- team -->
			
	<!-- advantages -->
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
							<h4>Perusahaan : <a href ="<?php echo base_url("index.php/pelamar/dashboard/get_profil/$each->id"); ?>" ><?php echo $each->nama; ?></h4></a>
							<p>Tanggung Jawab : <br><?php echo $each->tanggung_jawab; ?></p>
							<p>Tanggal Buka Lowongan: <?php echo $each->tanggal_buka; ?></p>
							<p>Tanggal Akhir Lowongan : <?php echo $each->tanggal_tutup; ?></p>
							<?php foreach($id as $idd)
                      {
                          ?>
							<a class="btn btn-primary" href ="<?php echo site_url("pelamar/lamaran/lamar/$idd->id/$each->id_lowongan"); ?>" ><i class="fa fa-pencil"></i>Lamar</a>

							<a class="btn btn-danger" href ="<?php echo site_url("pelamar/lamaran/bookmark/$idd->id/$each->id_lowongan"); ?>" ><i class="fa fa-bookmark"></i>Bookmark</a>
							<?php } ?>
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