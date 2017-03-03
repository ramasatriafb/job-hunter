<!-- footer -->
		<footer>
			<div class="container">
				<div class="w3ls-footer-grids">					
					<div class="col-md-3 w3l-footer-grid">
						<h4>Tentang Kami</h4>
						<ul>
							<li><a href="<?php echo base_url("index.php/welcome/latar_belakang"); ?>">Latar Belakang</a></li>
							
						</ul>
					</div>
					<div class="col-md-3 w3l-footer-grid">
						<h4>GET IN TOUCH</h4>
						<ul>
							<li>Nama : M.Ramasatria Firmansyah</li>
							<li>NRP  : 2110165007</li>
							<li>Email: <a href="mailto:ramasatria@it.student.pens.ac.id">ramasatria@it.student.pens.ac.id </a></li>
						</ul>
					</div>
					<div class="col-md-3 w3l-footer-grid">
						
						
					</div>
					<div class="col-md-3 w3l-footer-grid">
						<h4>Copy Rights</h4>
						<p>&copy; 2016 Job Hunter / Cari Kerja. All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a></p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
</footer>
		<!-- //footer -->
	<!-- here stars scrolling icon -->
			<script type="text/javascript">
				$(document).ready(function() {
					/*
						var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
						};
					*/
										
					$().UItoTop({ easingType: 'easeOutQuart' });
										
					});
			</script>
			<!-- start-smoth-scrolling -->
			<script type="text/javascript" src="<?php echo base_url("assets/js/move-top.js"); ?>"></script>
			<script type="text/javascript" src="<?php echo base_url("assets/js/easing.js"); ?>"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
			</script>
			<!-- start-smoth-scrolling -->
		<!-- //here ends scrolling icon -->	
</body>
</html>