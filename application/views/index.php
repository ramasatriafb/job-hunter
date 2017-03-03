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
				<h2 class="agile-inner-title">Temukan Pekerjaan Impianmu Bersama Job Hunter</h2>
			 <div class="grid_3 grid_5">
					  <div class="tab-content">
							<div class="tab-pane active" id="horizontal-form">
								<?php echo form_open('welcome/cari'); ?>
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
	<div class="agile-info-advantages">
		<div class="container">
			<h3>Kelebihan Kami </h3>
			<p class="vel">Bersama Mencapai Kesuksesan.</p>
			<div class="w3-agileits-our-advantages-grids">
				<div class="col-md-4 w3layouts-our-advantages-grid">
					<div class="col-xs-3 w3l-our-advantages-grd-left">
						<p>1.</p>
					</div>
					<div class="col-xs-9 w3l-our-advantages-grd-right">
						<h4>Mudah Dalam Pencarian Kerja</h4>
						
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3layouts-our-advantages-grid">
					<div class="col-xs-3 w3l-our-advantages-grd-left">
						<p>2.</p>
					</div>
					<div class="col-xs-9 w3l-our-advantages-grd-right">
						<h4>Member Dapat Keuntungan</h4>
						
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3layouts-our-advantages-grid">
					<div class="col-xs-3 w3l-our-advantages-grd-left">
						<p>3.</p>
					</div>
					<div class="col-xs-9 w3l-our-advantages-grd-right">
						<h4>Banyak Perusahaan Rekomendasi</h4>
						
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3layouts-our-advantages-grid">
					<div class="col-xs-3 w3l-our-advantages-grd-left">
						<p>4.</p>
					</div>
					<div class="col-xs-9 w3l-our-advantages-grd-right">
						<h4>Proses Lamaran Cepat</h4>
						
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3layouts-our-advantages-grid">
					<div class="col-xs-3 w3l-our-advantages-grd-left">
						<p>5.</p>
					</div>
					<div class="col-xs-9 w3l-our-advantages-grd-right">
						<h4>Mudah Mendapatkan Relasi</h4>
						
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3layouts-our-advantages-grid">
					<div class="col-xs-3 w3l-our-advantages-grd-left">
						<p>6.</p>
					</div>
					<div class="col-xs-9 w3l-our-advantages-grd-right">
						<h4>Membantu Pengembangan Karir Anda</h4>
					
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //advantages -->
		</section>
</div>
		
		<!--clients-->
			<div class="w3layouts-clients">
				<div class="container">
					<h3>BRIDGE TO THE FUTURE</h3>
					<div class="flex-slider">
						<ul id="flexiselDemo1">			
							<li>
								<img src="<?php echo base_url("assets/images/c1.png"); ?>" alt=""/>
							</li>
							<li>
								<img src="<?php echo base_url("assets/images/c2.png"); ?>" alt=""/>
							</li>
							<li>
								<img src="<?php echo base_url("assets/images/c3.png"); ?>" alt=""/>
							</li>
							<li>
								<img src="<?php echo base_url("assets/images/c4.png"); ?>" alt=""/>
							</li>
						</ul>
						<script type="text/javascript">
										$(window).load(function() {
											$("#flexiselDemo1").flexisel({
												visibleItems: 4,
												animationSpeed: 1000,
												autoPlay: true,
												autoPlaySpeed: 3000,    		
												pauseOnHover: true,
												enableResponsiveBreakpoints: true,
												responsiveBreakpoints: { 
													portrait: { 
														changePoint:414,
														visibleItems: 1
													}, 
													landscape: { 
														changePoint:667,
														visibleItems: 2
													},
													tablet: { 
														changePoint:991,
														visibleItems: 3
													}
												}
											});
											
										});
						</script>
						<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.flexisel.js"); ?>"></script>
					</div>
				</div>
			</div>
			<!--//clients-->
		<!-- /.about-page -->
		<!-- //main-content -->
	
<?php $this->load->view('footer'); ?>