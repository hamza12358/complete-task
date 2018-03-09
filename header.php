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

<div class="slider-wrapper">
    <div class="slider">
        <div class="fs_loader"></div>
        <div class="slide">
            <img src="<?php echo get_template_directory_uri(); ?>/images/slider/slide1_bg.jpg" width="1920" height="588" data-position="0,-400" data-in="fade" data-delay="0" data-out="fade">
            <img src="<?php echo get_template_directory_uri(); ?>/images/slider/slide1-01.png" width="195" height="171" data-position="120,100" data-in="left" data-delay="200" data-out="left">
            <h1 class="text_wht" data-position="20,200" data-in="top" data-step="1" data-out="top"  data-delay="0" data-ease-in="easeOutBounce">
            Solutions for all your IT needs</h1>            
            <h4 class="text_wht" data-position="100,320" data-in="left" data-step="2" data-delay="0">When it comes to creative work, just think of appexos</h4>
            <img src="<?php echo get_template_directory_uri(); ?>/images/slider/slide1-02.png" width="218" height="148" data-position="290,89" data-in="bottomRight" data-delay="250">
            <img src="<?php echo get_template_directory_uri(); ?>/images/slider/slide1-03.png" width="371" height="265" data-position="170,400" data-in="top" data-delay="300" data-out="left">
            <img src="<?php echo get_template_directory_uri(); ?>/images/slider/slide1-04.png" width="140" height="312" data-position="130,900" data-in="Right" data-delay="400" data-out="left">            
        </div>
        <div class="slide">
            <img src="<?php echo get_template_directory_uri(); ?>/images/slider/slide2_bg.jpg" width="1920" height="588" data-position="0,-400" data-in="fade" data-delay="0" data-out="fade">
            <img src="<?php echo get_template_directory_uri(); ?>/images/slider/slide2-01.png" width="138" height="138" data-position="250,190" data-in="right" data-delay="200" data-out="left">
            <img src="<?php echo get_template_directory_uri(); ?>/images/slider/slide2-02.png" width="168" height="167" data-position="235,320" data-in="bottomLeft" data-delay="300" data-out="topLeft">
            <img src="<?php echo get_template_directory_uri(); ?>/images/slider/slide2-03.png" width="206" height="206" data-position="210,480" data-in="top" data-delay="400" data-out="bottom">
            <img src="<?php echo get_template_directory_uri(); ?>/images/slider/slide2-04.png" width="167" height="167" data-position="235,680" data-in="topLeft" data-delay="500" data-out="left">
            <img src="<?php echo get_template_directory_uri(); ?>/images/slider/slide2-05.png" width="139" height="139" data-position="250,840" data-in="topRight" data-delay="500" data-out="Right">
            <h1 class="text_blck" data-position="50,350" data-in="bottom" data-step="1" data-out="top"  data-delay="100" data-ease-in="easeOutBounce">Services We Provide</h1>
        </div>
        <!--<div class="slide">
            <img src="images/slider/slide3_bg.jpg" width="1920" height="588" data-position="0,-400" data-in="fade" data-delay="0" data-out="fade">
            <img src="images/slider/slide3-02.png" width="200" height="375" data-position="130,500" data-in="bottom" data-delay="200" data-out="top">
            <img src="images/slider/slide3-01.png" width="878" height="401" data-position="100,150" data-in="top" data-delay="400" data-out="bottom">
            <h1 class="text_wht" data-position="20,250" data-in="top" data-step="1" data-out="bottom"  data-delay="100" data-ease-in="easeOutBounce">We Give Reality to your Ideas</h1>
        </div>-->
        <div class="slide">
            <img src="<?php echo get_template_directory_uri(); ?>/images/slider/slide4_bg.jpg" width="1920" height="588" data-position="0,-400" data-in="fade" data-delay="0" data-out="fade">
            <h1 class="text_blck" data-position="-15,230" data-in="top" data-step="1" data-time="1750" data-delay="10" data-ease-in="easeOutBounce"><span>Technologies we use to Build Products</span></h1>
            <img src="<?php echo get_template_directory_uri(); ?>/images/slider/slide4-01.png" width="709" height="163" data-position="300,235" data-in="bottom" data-delay="200" data-out="top">
            
            <img src="<?php echo get_template_directory_uri(); ?>/images/slider/slide4-02.png" width="360" height="267" data-position="70,410" data-in="top" data-delay="300" data-out="bottom">
            <img src="<?php echo get_template_directory_uri(); ?>/images/slider/slide4-03.png" width="220" height="105" data-position="200,235" data-in="right" data-delay="400" data-out="left">
            <img src="<?php echo get_template_directory_uri(); ?>/images/slider/slide4-04.png" width="214" height="90" data-position="220,700" data-in="left" data-delay="600" data-out="right">
        </div>
    </div>
</div>



