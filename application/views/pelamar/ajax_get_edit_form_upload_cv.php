<div class="col-md-12 w3ls-about-top-right-grid">
				  <section class="agileits about-page">
			<div class="container">
				<div class="w3-about-top">
				<div class="grid_3 grid_5">
					  <div class="tab-content">
							<div class="tab-pane active" id="horizontal-form">
							<?php foreach ($profil as $data) {           ?>
								<?php echo form_open_multipart('pelamar/profil/upload_cv/'.$data->id);  ?>

									<div class="form-group">
									<label for="focusedinput" class="col-sm-4 control-label">Curriculum Vitae <span class="label label-danger">Maksimal 2 MB</span></label>
									<div class="col-sm-8">
										<input type="file" class="form-control1" name="cv" id="focusedinput" value="<?php echo $data->foto; ?>" required>
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