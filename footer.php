			<!-- footer -->

			<footer class="footer" role="contentinfo">

				<div class="container">
					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo-white.png" alt="AcademWeb.com" class="logo-white">
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12"></div>
					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
						<div class="soc-seti">
							<i class="fa fa-instagram" aria-hidden="true"></i>
							<i class="fa fa-facebook" aria-hidden="true"></i>
							<i class="fa fa-twitter" aria-hidden="true"></i>
							<i class="fa fa-linkedin" aria-hidden="true"></i>
						</div>

					</div>
				</div>

			</footer>
			<!-- /footer -->

			<?php wp_footer(); ?>

			<script>
				jQuery(document).ready(function(){
					if(jQuery(window).height()>768) 
					{

						jQuery("header.top-nav").sticky({topSpacing:0});
					}
					else
					{

					}

					
					jQuery('.btn-contact').click(function(){
						console.log('btn click');
					});
				});
			</script>

		</body>
		</html>
