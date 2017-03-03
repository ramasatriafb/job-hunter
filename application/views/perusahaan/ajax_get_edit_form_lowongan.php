<?php $this->load->view('header'); ?>
<body>
	<?php $this->load->view('navigation'); ?>
	<!-- navigation -->
				<?php $this->load->view('perusahaan/navigation'); ?>
		<!-- //navigation -->
		<!-- //main-content -->
		<div class="wthree-main-content">
<div class="col-md-12 w3ls-about-top-right-grid">
				  <section class="agileits about-page">
			<div class="container">
				<div class="w3-about-top">
				<div class="grid_3 grid_5">
					  <div class="tab-content">
							<div class="tab-pane active" id="horizontal-form">
							<?php foreach($lowongan as $each)
                      {
                          ?>
								<?php echo form_open_multipart('perusahaan/lowongan/edit_lowongan/'.$each->id);  ?>
									<div class="form-group">
										<label for="focusedinput" class="col-sm-4 control-label">Judul Lowongan</label>
										<div class="col-sm-8">
											<input type="text" class="form-control1" id="focusedinput"  value="<?php echo $each->judul; ?>"" name="judul" required >
										</div>
										
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label">Tanggung Jawab</label>
										<div class="col-sm-8">
										<input type="text" class="form-control1" id="focusedinput" value="<?php echo $each->tanggung_jawab; ?>" name="tanggung_jawab"  required>
										</div>
									</div>
									<div class="form-group">
									<label for="focusedinput" class="col-sm-4 control-label">Tanggal Buka Lowongan</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="focusedinput" value="<?php echo $each->tanggal_buka; ?>" name="tanggal_buka"  required>
									</div>
										
									</div>
									<div class="form-group">
									<label for="focusedinput" class="col-sm-4 control-label">Tanggal Tutup Lowongan</label>
									<div class="col-sm-8">
										<input type="date" class="form-control1" id="focusedinput" value="<?php echo $each->tanggal_tutup; ?>" name="tanggal_tutup" required>
									</div>
									
									</div>
								

									<button type="submit" class="btn btn-primary"><i class=" fa fa-check"></i>Simpan</button>
					
								</form>
								   <?php
                      }
                      ?>
							</div>
						</div>			  
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				</section>
							
					</div>
					</div>