<?php $this->load->view('header'); ?>
<body>
	<?php $this->load->view('navigation'); ?>
	<!-- navigation -->
		<?php $this->load->view('pelamar/navigation'); ?>
		<!-- //navigation -->
		<!-- //main-content -->
		<div class="wthree-main-content">
		<!-- About-page -->

<div class="col-md-12 w3ls-about-top-right-grid">
				  <section class="agileits about-page">
			<div class="container">
				<div class="w3-about-top">
				<div class="grid_3 grid_5">
					  <div class="tab-content">
							<div class="tab-pane active" id="horizontal-form">
							 <?php foreach($pengalaman as $data)
                      {
                          ?>
							<?php echo form_open('pelamar/profil/edit_pengalaman/'.$data->id_pengalaman);  ?>
									<div class="form-group">
										<label for="focusedinput" class="col-sm-4 control-label">Nama Perusahaan</label>
										<div class="col-sm-8">
											<input type="text" class="form-control1" id="focusedinput"  name="nama_perusahaan" value="<?php echo $data->nama_perusahaan; ?>" required >
										</div>
										
									</div>
									
									<div class="form-group">
									<label for="focusedinput" class="col-sm-4 control-label">Posisi</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="focusedinput" name="posisi" value="<?php echo $data->posisi; ?>" required>
									</div>
										
									</div>
										<div class="form-group">
										<label for="focusedinput" class="col-sm-4 control-label">Tanggung Jawab</label>
										<div class="col-sm-8">
											<textarea name="tanggung_jawab" cols="50" rows="4" class="form-control1" value="<?php echo $data->tanggung_jawab; ?>"></textarea>
										</div>
										
									</div>
									<div class="form-group">
									<label for="focusedinput" class="col-sm-4 control-label">Tahun</label>
									<div class="col-sm-4">
										<input type="text" class="form-control1" id="focusedinput" name="tahun_awal" placeholder="Tahun Mulai Bekerja">
									</div>
									<div class="col-sm-4">
										<input type="text" class="form-control1" id="focusedinput" name="tahun_akhir" placeholder="Tahun Akhir Bekerja">
									</div>

								

									<button type="submit" class="btn btn-primary"><i class=" fa fa-check"></i>Simpan</button>
					
								</form>
								 <?php } ?>
						</div>			  
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				</section>
							
							

<?php $this->load->view('footer'); ?>