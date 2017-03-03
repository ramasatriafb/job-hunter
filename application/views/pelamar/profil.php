<?php $this->load->view('header'); ?>
<body>
	<?php $this->load->view('navigation'); ?>
	<!-- navigation -->
		<?php $this->load->view('pelamar/navigation'); ?>
		<!-- //navigation -->
		<!-- //main-content -->
		<div class="wthree-main-content">
		<!-- About-page -->
		<section class="agileits about-page">
			<div class="container">
				<h2 class="agile-inner-title">Profil Pelamar</h2>
				<div class="w3-about-top">
				<div class="col-md-4 w3ls-about-top-left-grid">
				  <?php foreach($profil as $each)
                      {
                          ?>
					<img src="<?php if ($each->foto==null) {
						echo base_url("assets/images/Profil.jpg");
						}else{
						 echo base_url("$each->foto") ;
						 } ?>" style="width:180px;height:200px;" alt=" " class="img-responsive" />
					<h4><?php echo $each->nama_lengkap; ?></h4>

					
						   <?php
                      }
                      ?>
				</div>
				<div class="col-md-4 w3ls-about-top-right-grid">
				  <?php foreach($profil as $each)
                      {
                          ?>
                    <div class="w3ls-about-gd">
						<div class="w3-about-gd-left">
							<i class="fa fa-location-arrow"></i>
						</div>
						<div class="w3-about-gd-right">
							<p><?php if ($each->asal==null){
								echo 'Belum Terisi';
								}else{
									echo $each->asal;
									} ?></p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="w3ls-about-gd">
						<div class="w3-about-gd-left">
							<i class="fa fa-user"></i>
						</div>
						<div class="w3-about-gd-right">
							<p><?php if($each->nama==null){
								echo 'Belum Terisi';
							}else{
									echo $each->nama;} ?>, 
							<?php if($each->tahun_lahir==null){
								echo'00';
							}else{
								$lahir =  $each->tahun_lahir;
							 $umur = date("Y") - $lahir;
							   echo $umur;} ?> tahun</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="w3ls-about-gd">
						<div class="w3-about-gd-left">
							<i class="fa fa-cloud-download"></i>
						</div>
						<div class="w3-about-gd-right">
						<?php if ($each->cv==null) { 
							echo '<p>Curriculum Vitae</p>  <button id="upload_cv" type="submit" class="btn btn-primary"><i class=" fa fa-edit"></i>Unggah CV Terbaru Anda</button>';
						}else{
							echo '<a href="'.$each->cv.'">Curriculum Vitae</a> <button id="upload_cv" type="submit" class="btn btn-primary"><i class="fa fa-edit"></i>Unggah CV Terbaru Anda</button>';
						} ?>
							
						</div>
						<div class="clearfix"> </div>
						
					</div>
					
						<div class="clearfix"> </div>
					</div>
					<?php } ?>
						   
                      
                      <div class="w3-about-gd-left">
							
					</div>
					<div class="col-md-4 w3ls-about-top-right-grid">
				  <?php foreach($profil as $each)
                      {
                          ?>
                  
					<div class="w3ls-about-gd">
						<div class="w3-about-gd-left">
							<i class="fa fa-phone"></i>
						</div>
						<div class="w3-about-gd-right">
							<p><?php if($each->telpon==null){
								echo 'Belum Terisi';
								}else{
									echo $each->telpon;} ?></p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="w3ls-about-gd">
						<div class="w3-about-gd-left">
							<i class="fa fa-envelope"></i>
						</div>
						<div class="w3-about-gd-right">
							<p><?php echo $each->email; ?></p>
						</div>
						<div class="clearfix"> </div>
					</div>

						   <?php
                      }
                      ?>
                      <div class="w3-about-gd-left">
							
					</div>
					<div class="w3-about-gd-right">
					<button id="edit" type="submit" class="btn btn-primary"><i class=" fa fa-edit"></i>Ubah</button>
					</div>
					
				</div>
				<div id ="editForm"></div>

				<script type="text/javascript">
					 $(document).ready(function()
				    { $('#edit').click(function(){
				       $.ajax({
				            type : 'POST',
				            url  : '<?php echo site_url('pelamar/profil/getEdit');?>',
				            //data : dataString,
				            success :  function(data)
				            {   
				              $("#editForm").html(data);
				      }
				            });
				            return false;
				  });
				    });
					
				</script>
				<div id ="form_upload_cv"></div>
				<script type="text/javascript">
					 $(document).ready(function()
				    { $('#upload_cv').click(function(){
				       $.ajax({
				            type : 'POST',
				            url  : '<?php echo site_url('pelamar/profil/get_upload_cv');?>',
				            //data : dataString,
				            success :  function(data)
				            {   
				              $("#form_upload_cv").html(data);
				      }
				            });
				            return false;
				  });
				    });
				</script>
				</section>

				<section class="agileits about-page">
			<div class="container">
				<h2 class="agile-inner-title">Pengalaman</h2>
				<div class="w3-about-top">
				
				<div class="col-md-8 w3ls-about-top-right-grid">
					
					 <?php foreach($pengalaman as $each)
                      {
                          ?>
					<div class="w3ls-about-gd">
						<div class="w3-about-gd-left">
							<h4><?php echo $each->tahun; ?> </h4>
						</div>
						<div class="w3-about-gd-right">
							<h4><?php echo $each->posisi; ?></h4>
							<h5 ><?php echo $each->nama_perusahaan; ?></h5>
							<p><?php echo $each->tanggung_jawab; ?></p>
							<a class="btn btn-warning" href ="get_edit_pengalaman/<?php echo $each->id_pengalaman ?>" ><i class=" fa fa-edit"></i></a>
							 <a class="btn btn-danger" href ="hapus_pengalaman/<?php echo $each->id_pengalaman; ?>" onClick="return doconfirm()";><i class=" fa fa-trash-o"></i></a>
						</div>
						<div class="clearfix"> </div>
					</div>
				   <?php
                      }
                      ?>
					</div>
					

					<div class="col-md-2 w3ls-about-top-right-grid">
					<div class="w3-about-gd-right">
							
					</div>
					<div class="w3-about-gd-right">
					<button id="tambah_pengalaman" type="submit" class="btn btn-primary"><i class=" fa fa-edit"></i>Tambah</button>
					</div>
						<div class="clearfix"> </div>
					</div>
					</div>
				
				
				
					
				
				<div id ="form_tambahPengalaman"></div>
				
				
				<script type="text/javascript">
				
					 $(document).ready(function()
				    { $('#tambah_pengalaman').click(function(){
				       $.ajax({
				            type : 'POST',
				            url  : '<?php echo site_url('pelamar/profil/get_tambah_pengalaman');?>',
				            //data : dataString,
				            success :  function(data)
				            {   
				              $("#form_tambahPengalaman").html(data);
				      }
				            });
				            return false;
				  });
				    });
					
				</script>

				<div id ="form_editPengalaman"></div>
				
				
				<script type="text/javascript">
				 $(document).ready(function(){
				$("#edit_pengalaman").click(function()
				{
					var id = $(this).find('a').attr('id');
					$.ajax({
						data: "id="+id,
						type : 'POST',
						url  : '<?php echo site_url('pelamar/profil/get_edit_pengalaman').'/';?>'+id,
						success :  function(data)
				            {   
				              $("#form_editPengalaman").html(data);
				      }
				            });
				            return false;
					});
			});
			

				</script>
				</section>

						<section class="agileits about-page">
			<div class="container">
				<h2 class="agile-inner-title">Pendidikan</h2>
				<div class="w3-about-top">
				
				<div class="col-md-8 w3ls-about-top-right-grid">
					
					 <?php foreach($pendidikan as $each)
                      {
                          ?>
					<div class="w3ls-about-gd">
						<div class="w3-about-gd-left">
							<h4><?php echo $each->tahun_lulus; ?> </h4>
						</div>
						<div class="w3-about-gd-right">
							<h4><?php echo $each->sekolah; ?> - <?php echo $each->gelar; ?></h4>
							<h5 ><?php echo $each->jurusan; ?></h5>
							<p>Nilai Akhir = <?php echo $each->nilai_akhir; ?></p>
							<a class="btn btn-warning" href ="<?php echo site_url("pelamar/profil/get_edit_pendidikan/$each->id_pendidikan"); ?>" ><i class=" fa fa-edit"></i></a>
							 <a class="btn btn-danger" href ="<?php echo site_url("pelamar/profil/hapus_pendidikan/$each->id_pendidikan"); ?>" onClick="return doconfirm()";><i class=" fa fa-trash-o"></i></a>
							<script type="text/javascript">
								function doconfirm()
{
    job=confirm("Apakah Anda yakin untuk menghapus data ini ?");
    if(job!=true)
    {
        return false;
    }
}

							</script>
						</div>
						<div class="clearfix"> </div>
					</div>
				   <?php
                      }
                      ?>
					</div>
					

					<div class="col-md-2 w3ls-about-top-right-grid">
					<div class="w3-about-gd-right">
							
					</div>
					<div class="w3-about-gd-right">
					<button id="tambah_pendidikan" type="submit" class="btn btn-primary"><i class=" fa fa-edit"></i>Tambah</button>
					</div>
						<div class="clearfix"> </div>
					</div>
					</div>

					<div id ="form_tambahPendidikan"></div>
				
				
				<script type="text/javascript">
				
					 $(document).ready(function()
				    { $('#tambah_pendidikan').click(function(){
				       $.ajax({
				            type : 'POST',
				            url  : '<?php echo site_url('pelamar/profil/get_tambah_pendidikan');?>',
				            //data : dataString,
				            success :  function(data)
				            {   
				              $("#form_tambahPendidikan").html(data);
				      }
				            });
				            return false;
				  });
				    });
					
				</script>
				<div id ="form_editPendidikan"></div>
				
				
				<script type="text/javascript">
				 $(document).ready(function(){
				$("#edit_pendidikan").click(function()
				{
					var id = $(this).find('a').attr('id');
					$.ajax({
						data: "id="+id,
						type : 'POST',
						url  : '<?php echo site_url('pelamar/profil/get_edit_pendidikan').'/';?>'+id,
						success :  function(data)
				            {   
				              $("#form_editPendidikan").html(data);
				      }
				            });
				            return false;
					});
			});
			

				</script>
				</section>

			<!--//clients-->
		<!-- /.about-page -->
		<!-- //main-content -->
	
<?php $this->load->view('footer'); ?>