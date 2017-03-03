<div class="col-md-12 w3ls-about-top-right-grid">
				  <section class="agileits about-page">
			<div class="container">
				<div class="w3-about-top">
				<div class="grid_3 grid_5">
					  <div class="tab-content">
							<div class="tab-pane active" id="horizontal-form">
							<?php foreach ($profil as $data) {           ?>
								<?php echo form_open_multipart('perusahaan/profil/edit/'.$data->id);  ?>
									<div class="form-group">
										<label for="focusedinput" class="col-sm-4 control-label">Nama Perusahaan</label>
										<div class="col-sm-8">
											<input type="text" class="form-control1" id="focusedinput"  name="nama" value="<?php echo $data->nama; ?>" required >
										</div>
										
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label">Kota</label>
										<div class="col-sm-8">
										<input type="text" class="form-control1" id="focusedinput" name="kota" value="<?php echo $data->kota; ?>" required>
										</div>
									</div>
									<div class="form-group">
									<label for="focusedinput" class="col-sm-4 control-label">Alamat</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="focusedinput" name="alamat" value="<?php echo $data->alamat; ?>" required>
									</div>
										
									</div>
									<div class="form-group">
									<label for="focusedinput" class="col-sm-4 control-label">Nomor Telepon</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="focusedinput" name="telpon" value="<?php echo $data->telpon; ?>" required>
									</div>
									
									</div>
									<div class="form-group">
									<label for="disabledinput" class="col-sm-4 control-label">Alamat Email</label>
									<div class="col-sm-8">
										<input disabled type="text" class="form-control1" id="focusedinput" value="<?php echo $data->email; ?>"  required>
									</div>
									
									</div>
									<div class="form-group">
									<label for="focusedinput" class="col-sm-4 control-label">Foto</label>
									<div class="col-sm-8">
										<input type="file" class="form-control1" name="foto" id="focusedinput" value="<?php echo $data->foto; ?>" required>
									</div>
									
									</div>
									

									<button type="submit" class="btn btn-primary"><i class=" fa fa-check"></i>Simpan</button>
					
								</form>
								<?php }?> 
							</div>
						</div>			  
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				</section>
							
					</div>