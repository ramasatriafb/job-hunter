<div class="col-md-12 w3ls-about-top-right-grid">
				  <section class="agileits about-page">
			<div class="container">
				<div class="w3-about-top">
				<div class="grid_3 grid_5">
					  <div class="tab-content">
							<div class="tab-pane active" id="horizontal-form">
							
							<?php foreach ($id as $id_pelamar) {		?>
								
							
								<?php echo form_open('pelamar/profil/tambah_pengalaman/'.$id_pelamar->id);  ?>
								<?php } ?>
									<div class="form-group">
										<label for="focusedinput" class="col-sm-4 control-label">Nama Perusahaan</label>
										<div class="col-sm-8">
											<input type="text" class="form-control1" id="focusedinput"  name="nama_perusahaan"  required >
										</div>
										
									</div>
									
									<div class="form-group">
									<label for="focusedinput" class="col-sm-4 control-label">Posisi</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="focusedinput" name="posisi"  required>
									</div>
										
									</div>
										<div class="form-group">
										<label for="focusedinput" class="col-sm-4 control-label">Tanggung Jawab</label>
										<div class="col-sm-8">
											<textarea name="tanggung_jawab" id="txtarea1" cols="50" rows="4" class="form-control1"></textarea>
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
						</div>			  
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				</section>
							
					</div>