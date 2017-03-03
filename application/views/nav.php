<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav">
					<li><a href="<?php echo base_url("index.php/welcome/index"); ?>">Home</a></li>
					<li><a href="<?php echo base_url("index.php/welcome/cari_lowongan"); ?>">Cari Lowongan</a></li>
					<li><a href="<?php echo base_url("index.php/welcome/cari_perusahaan"); ?>">Cari Perusahaan</a></li>
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Join <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="<?php echo base_url("index.php/welcome/sign_in"); ?>">Sign In</a></li>
						<li><a href="<?php echo base_url("index.php/welcome/sign_up"); ?>">Sign Up</a></li>
					  </ul>
					</li>
					
				  </ul>
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>