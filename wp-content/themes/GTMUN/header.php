<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>GTMUN <?php wp_title( '|', true, 'left' ); ?></title>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">	
		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php 
			wp_head(); 
			if (is_home()) {
			    echo '<link rel="stylesheet" href="'.get_stylesheet_directory_uri().'/homepage.css">';
			} 

		?>
		<!-- end of wordpress head -->
				
	</head>

	<?php
		if ( !is_user_logged_in() ) {

			echo '<div id="wpadminbar" class="" role="navigation">	
						<ul id="wp-admin-bar-top-secondary" class="ab-top-secondary ab-top-menu">
							<li id="wp-admin-bar-my-account" class="menupop with-avatar"><a class="ab-item" aria-haspopup="true" href="'.get_bloginfo("wpurl").'/wp-login.php" title="Login">Login</a>		
							</li>
						</ul>						
				</div>';

			$loginClass="not-logged-in";
			$bodyStyle= "style='padding-top: 32px;'";

		}
	?>
	
	<body <?php body_class(); echo $bodyStyle; ?>>
				
		<header role="banner">



				
			<div id="navigation" class="navbar navbar-default navbar-fixed-top <?php echo $loginClass; ?>">
				<div class="container">
          
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<!--LOGO-->
					

							<a class="navbar-brand" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="" /></a>
					</div>


					<div class="collapse navbar-collapse navbar-responsive-collapse">
					<div class="navbar-right">
						<?php wp_bootstrap_main_nav(); // Adjust using Menus in Wordpress Admin ?>
					</div></div>

				</div> <!-- end .container -->
			</div> <!-- end .navbar -->
		
		</header> <!-- end header -->


		<?php if( is_front_page() ) { ?>

			<div class="hero-unit" id="frontpage-hero">
				
				<?php if ( dynamic_sidebar('hero') ) : else : endif; ?>
	        	
	      	</div>
	      	
		      	<?php get_sidebar('homepage'); ?>
	      	
		<?php } else { ?>
			<?php 
			
				if ( '' != get_the_post_thumbnail($post->ID) ) {
				    $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
				} else {
				    $feat_image = get_bloginfo('template_directory')."/images/coverDefault.jpg";
				}

			 
			echo ('<div class="secondary-hero-unit" style="background:url('.$feat_image.') fixed;
					box-sizing: initial;
					  -webkit-background-size: 100%;
					  -moz-background-size: 100%;
					  -o-background-size: 100%;
					  background-size: 100%;
					  -webkit-background-size: cover;
					  -moz-background-size: cover
					  -o-background-size: cover;
					  background-size: cover">');
			?>
			
			<div class="filter">
				<header class="bottom">
								
					<div class="container"><h1><?php wp_title('', true, '' ); ?></h1></div>
							
				</header> <!-- end article header -->
			</div>

			</div>
		<?php } ?>
		<div class="container">
