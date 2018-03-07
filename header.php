<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css" />
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fractionslider.css">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
	    <header>
		    <div class="top_header">
    	        <div class="container">
        	        <div class="row">
                        <div class="col-sm-4">
                	        <i class="fa fa-phone-square text_g999"></i> 1-306-209-1323 &nbsp; 
                            <i class="fa fa-envelope text_g999"></i> <a href="mailto:sales@appexos.com" class="text_wht">sales@appexos.com</a>
                        </div>
                        <div class="col-sm-6">&nbsp;</div>
                        <div class="col-sm-2">
                	        <ul class="social">
                    	        <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-tumblr"></i></a></li>
                                <!---li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-header" data-spy="affix" data-offset-top="200" data-offset-bottom="200">
    	        <nav class="navbar navbar-default">
  			        <div class="container">
    			        <div class="navbar-header">
                             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mobile-nav" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                             </button>
                           
      				   
      				        <a class="navbar-brand logo" href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="img-responsive"></a>
                            <a class="site-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                            
                        </div>
                        <div class="collapse navbar-collapse" id="mobile-nav">
                            <ul class="">
                              
                                    <?php html5blank_nav(); ?>
                            
                            </ul>
                        </div>
                        
                        
					<!-- /nav -->
  			        </div>
		        </nav> 
		    </div>	<!-- wrapper -->
		</header>
			<!-- /header -->
