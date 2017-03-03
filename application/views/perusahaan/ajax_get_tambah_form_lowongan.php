<div class="col-md-12 w3ls-about-top-right-grid">
				  <section class="agileits about-page">
			<div class="container">
				<div class="w3-about-top">
				<div class="grid_3 grid_5">
					  <div class="tab-content">
							<div class="tab-pane active" id="horizontal-form">
							 <?php foreach($id as $data)
                      {
                          ?>
								<?php echo form_open_multipart('perusahaan/lowongan/tambah_lowongan/'.$data->id);  ?>
								<?php } ?>
									<div class="form-group">
										<label for="focusedinput" class="col-sm-4 control-label">Judul Lowongan</label>
										<div class="col-sm-8">
											<input type="text" class="form-control1" id="focusedinput"  name="judul" required >
										</div>
										
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label">Keahlian</label>
										<div class="col-sm-8">
										<input type="text" class="form-control1" id="focusedinput" name="syarat"  required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label">Tanggung Jawab</label>
										<div class="col-sm-8">
										<input type="text" class="form-control1" id="focusedinput" name="tanggung_jawab"  required>
										</div>
									</div>
									<div class="form-group">
									<label for="focusedinput" class="col-sm-4 control-label">Tanggal Buka Lowongan</label>
									<div class="col-sm-8">
										<input type="date" class="form-control1" id="focusedinput" name="tanggal_buka"  required>
									</div>
										
									</div>
									<div class="form-group">
									<label for="focusedinput" class="col-sm-4 control-label">Tanggal Tutup Lowongan</label>
									<div class="col-sm-8">
										<input type="date" class="form-control1" id="focusedinput" name="tanggal_tutup" required>
									</div>
									
									</div>
								

									<button type="submit" class="btn btn-primary"><i class=" fa fa-check"></i>Simpan</button>
					
								</form>
								 
							</div>
						</div>			  
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				</section>
						

<?php $this->load->view('footer'); ?>