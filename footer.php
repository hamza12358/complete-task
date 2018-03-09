			<!-- footer -->

			<div class="clear pad-15"></div>
			 <img src="<?php echo get_template_directory_uri(); ?>/images/footer.png" class="img-responsive">
			<footer id="contact">
				<div class="container">
                    <div class="row">
        	            <div class="col-sm-2">
            	            <img src="<?php echo get_template_directory_uri(); ?>/images/stay.png" class="img-responsive">
                        </div>
                        <div class="col-sm-3">
            	            <h4 class="text_blue">Call us Today</h4>
                            <p class="text_18">1-306-209-1323</p>
                        </div>
                        <div class="col-sm-3">
            	            <h4 class="text_blue">Follow Us</h4>
                            <p class="share">
                	            <a href="#" class="fb" target="_blank"><i class="fa fa-facebook fa-2x"></i></a> &nbsp; 
                                <a href="#" class="tw" target="_blank"><i class="fa fa-twitter fa-2x"></i></a> &nbsp; 
                                <!---a href="#" class="in" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a-->
                            </p>
                        </div>
        	           <div class="col-sm-4 text-center">
            	            <div class="text-center mb-10"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" width="75"></a></div>

				                <!-- copyright -->
				                <p class="copyright">
					                <?php echo date('Y'); ?>&copy; <?php bloginfo('name'); ?>. <?php _e('', 'html5blank'); ?>
					                <a href="//wordpress.org" title="WordPress">appexos.inc.</a>All Rights Reserved.
				                </p>
				            </div>
				        </div>
				    </div> 
				</div>           
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.10.2.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fractionslider.js" type="text/javascript" charset="utf-8"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js" type="text/javascript" charset="utf-8"></script>

		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
