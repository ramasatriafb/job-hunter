<?php $this->load->view('header'); ?>
<body>
	<?php $this->load->view('navigation'); ?>
	<!-- navigation -->
				<?php $this->load->view('perusahaan/navigation'); ?>
		<!-- //navigation -->
		<!-- //main-content -->
		<div class="wthree-main-content">
		<!-- About-page -->
		<section class="agileits about-page">
			<div class="container">
				<h2 class="agile-inner-title">Daftar Pelamar</h2>
				<div class="w3-about-top">
				
				<div class="col-md-10 w3ls-about-top-right-grid">
				
					
				</div>
				<div class="col-md-10 w3ls-about-top-right-grid">
				<div id ="form_editLowongan"></div>
				
				 <?php foreach($pelamar as $each)
                      {
                          ?>
				<table class="table table-bordered">
								<thead>
									<tr>
										<th>Nama</th>
										<th>Email</th>
										<th>Pendidikan</th>
										<th>Asal</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><h4><a href ="<?php echo base_url("index.php/perusahaan/lowongan/get_profil/$each->id_pelamar"); ?>" ><?php echo $each->nama; ?></h4></a></td>
										<td><p><?php echo $each->email; ?></p></td>
										<td><p><?php echo $each->gelar; ?></p></td>
										<td><p><?php echo $each->asal; ?></p></td>
										
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