<div class="col-md-12 w3ls-about-top-right-grid">
				  <section class="agileits about-page">
			<div class="container">
				<div class="w3-about-top">
				<div class="grid_3 grid_5">
					  <div class="tab-content">
							<div class="tab-pane active" id="horizontal-form">
							
							<?php foreach ($id as $id_pelamar) {		?>
								
							
								<?php echo form_open('pelamar/profil/tambah_pendidikan/'.$id_pelamar->id);  ?>
								<?php } ?>

									<div class="form-group">
									<label for="focusedinput" class="col-sm-4 control-label">Pendidikan</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="focusedinput" name="gelar"  required>
									</div>
										
									</div>
									<div class="form-group">
										<label for="focusedinput" class="col-sm-4 control-label">Sekolah / Perguruan Tinggi</label>
										<div class="col-sm-8">
											<input type="text" class="form-control1" id="focusedinput"  name="sekolah"  required >
										</div>
										
									</div>
									<div class="form-group">
										<label for="focusedinput" class="col-sm-4 control-label">Jurusan</label>
										<div class="col-sm-8">
									   <select name = "jurusan_id" class="form-control select2" style="width: 100%;">
					                     <option value="13">--</option>
					                     <?php foreach($jurusan as $each)
					                      {
					                          ?>
					                          <option value="<?=$each->id?>"><?=$each->nama ?></option>
					                          <?php
					                      }
					                      ?>?>
					                    </select>
										</div>
										
									</div>
									<div class="form-group">
									<label for="focusedinput" class="col-sm-4 control-label">Tahun Lulus</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="focusedinput" name="tahun_lulus" >
									</div>
									</div>
									<div class="form-group">
									<label for="focusedinput" class="col-sm-4 control-label">Nilai Akhir</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="focusedinput" name="nilai_akhir" placeholder="Nilai Ijazah / IPK">
									</div>
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