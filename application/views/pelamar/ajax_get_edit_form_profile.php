<div class="col-md-12 w3ls-about-top-right-grid">
				  <section class="agileits about-page">
			<div class="container">
				<div class="w3-about-top">
				<div class="grid_3 grid_5">
					  <div class="tab-content">
							<div class="tab-pane active" id="horizontal-form">
							<?php foreach ($profil as $data) {           ?>
								<?php echo form_open_multipart('pelamar/profil/edit/'.$data->id);  ?>
									<div class="form-group">
										<label for="focusedinput" class="col-sm-4 control-label">Nama Lengkap</label>
										<div class="col-sm-8">
											<input type="text" class="form-control1" id="focusedinput"  name="nama_lengkap" value="<?php echo $data->nama_lengkap; ?>" required >
										</div>
										
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label">Gender</label>
										<div class="col-sm-8">
										<?php foreach($kelamin as $each)
					                      {
					                          ?>
											<div class="radio-inline"><label><input type="radio" name="jenis_kelamin" value="<?=$each->id?>" > <?=$each->nama ?></label></div>
											  <?php
                      }
                      ?>
										</div>
									</div>
									<div class="form-group">
									<label for="focusedinput" class="col-sm-4 control-label">Tahun Kelahiran</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="focusedinput" name="tahun_lahir" value="<?php echo $data->tahun_lahir; ?>" required>
									</div>
										
									</div>
										<div class="form-group">
										<label for="focusedinput" class="col-sm-4 control-label">Kewarganegaraan</label>
										<div class="col-sm-8">
											<input type="text" class="form-control1" id="focusedinput" name="kewarganegaraan" value="<?php echo $data->kewarganegaraan; ?>" required>
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
									<label for="focusedinput" class="col-sm-4 control-label">Kota</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="focusedinput" name="kota" value="<?php echo $data->asal; ?>" required>
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