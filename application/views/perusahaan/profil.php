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
				<h2 class="agile-inner-title">Profil Perusahaan</h2>
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
					<h4><?php echo $each->nama; ?></h4>

					
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
							<p><?php echo $each->kota; ?></p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="w3ls-about-gd">
						<div class="w3-about-gd-left">
							<i class="fa fa-home"></i>
						</div>
						<div class="w3-about-gd-right">
							<p><?php echo $each->alamat; ?></p>
						</div>
						<div class="clearfix"> </div>
					</div>
					
						<div class="clearfix"> </div>
					</div>

						   <?php
                      }
                      ?>
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
							<p><?php echo $each->telpon; ?></p>
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
				            url  : '<?php echo site_url('perusahaan/profil/getEdit');?>',
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
				</section>

				

			<!--//clients-->
		<!-- /.about-page -->
		<!-- //main-content -->
	
<?php $this->load->view('footer'); ?>