<?php $this->load->view('header'); ?>
<body>
	<?php $this->load->view('navigation'); ?>
	<!-- navigation -->
				<?php $this->load->view('perusahaan/navigation'); ?>
		<!-- //navigation -->
		<!-- //main-content -->
		<div class="wthree-main-content">
		<!-- About-page -->
		<section class="agileits about-page">
			<div class="container">
				<h2 class="agile-inner-title">Pasang Lowongan Kerja</h2>
				<div class="w3-about-top">
				
				<div class="col-md-10 w3ls-about-top-right-grid">
				
					<div class="w3ls-about-gd">
						<div class="w3-about-gd-left">
						
						</div>
						<div class="w3-about-gd-right">
							</div>

						<div class="clearfix"> </div>
				
						   
					</div>
					
					<div class="col-md-8 w3ls-about-top-right-grid">
				
					<div class="w3ls-about-gd">
						<div class="w3-about-gd-left">
							<button id="tambah_lowongan" class="btn btn-primary"> Tambah</button>
						</div>

						<div class="clearfix"> </div>
				
					</div>
					</div>
		
				
				<div id ="form_tambahLowongan"></div>
				
				
				<script type="text/javascript">
				
					 $(document).ready(function()
				    { $('#tambah_lowongan').click(function(){
				       $.ajax({
				            type : 'POST',
				           url  : '<?php echo site_url('perusahaan/lowongan/get_tambah_lowongan');?>',
				            //data : dataString,
				            success :  function(data)
				            {   
				              $("#form_tambahLowongan").html(data);
				      }
				            });
				            return false;
				  });
				    });
					
				</script>

				</div>
				<div class="col-md-10 w3ls-about-top-right-grid">
				<div id ="form_editLowongan"></div>
				
				 <?php foreach($lowongan as $each)
                      {
                          ?>
				<table class="table table-bordered">
								<thead>
									<tr>
										<th>Lowongan</th>
										<th>Detail</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><div class="w3-about-gd-left">
						
							<h4><?php echo $each->judul; ?></h4><br><span>Pelamar : </span><br><a class="btn btn-primary" href ="<?php echo site_url("perusahaan/lowongan/get_pelamar/$each->id_lowongan"); ?>" ><i class=" fa fa-eye"></i></a>
						</div></td>
										<td><div class="w3-about-gd-right">
							<h4>Keahlian : <?php echo $each->syarat; ?></h4>
							<p>Tanggung Jawab : <br><?php echo $each->tanggung_jawab; ?></p>
							<p>Tanggal Buka Lowongan: <?php echo $each->tanggal_buka; ?></p>
							<p>Tanggal Akhir Lowongan : <?php echo $each->tanggal_tutup; ?></p>

							
							<a class="btn btn-warning" href ="<?php echo site_url("perusahaan/lowongan/get_edit_lowongan/$each->id_lowongan");?>" ><i class=" fa fa-edit"></i></a>
							 <a class="btn btn-danger" href ="<?php echo site_url("perusahaan/lowongan/hapus_lowongan/$each->id_lowongan"); ?>" onClick="return doconfirm()";><i class=" fa fa-trash-o"></i></a>
						</div></span></td>
									</tr>
									<tr>
									
								</tbody>
							  </table>
						<div class="clearfix"> </div>
				
						   <?php
                      }
                      ?>
					</div>
					<script type="text/javascript">
								function doconfirm()
{
    job=confirm("Apakah Anda yakin untuk menghapus data ini ?");
    if(job!=true)
    {
        return false;
    }
</script>					<div class="col-md-2 w3ls-about-top-right-grid">
				
					
					</div>
		
				
				

				
				
				<script type="text/javascript">
				 $(document).ready(function(){
				$("#edit_lowongan").click(function()
				{
					var id = $(this).find('a').attr('id');
					$.ajax({
						data: "id="+id,
						type : 'POST',
						url  : '<?php echo site_url('perusahaan/lowongan/get_edit_lowongan').'/';?>'+id,
						success :  function(data)
				            {   
				              $("#form_editLowongan").html(data);
				      }
				            });
				            return false;
					});
			});
			

				</script>
				</div>
				</section>
</div>
		
			<!--//clients-->
		<!-- /.about-page -->
		<!-- //main-content -->
	
<?php $this->load->view('footer'); ?>