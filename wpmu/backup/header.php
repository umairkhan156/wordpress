<?php
/* The main index file */
?>

<!DOCTYPE html>
<!--[if lt IE 7]><html lang="en-US" class="ie6"><![endif]-->
<!--[if IE 7]><html lang="en-US" class="ie7"><![endif]-->
<!--[if IE 8]><html lang="en-US" class="ie8"><![endif]-->
<!--[if IE 9]><html lang="en-US" class="ie9"><![endif]-->
<!--[if gt IE 9]><html lang="en-US"><![endif]-->
<!--[if !IE]><html lang="en-US"><![endif]-->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width" />
<title>WordPress Writer and Instructor | RACHEL McCOLLIN</title>

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link href="https://fonts.googleapis.com/css?family=Assistant|Oswald" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<div class="header-bg">
	
		<header role="banner">
	
			<hgroup class="site-name three-quarters left">
				
				<!-- site name and description - site name is inside a div element on all pages execpt the front page and/or main blog page, where it is in a h1 element -->
				<h1 id="site-title" class="one-half-left">
					<a href="https://rachelmccollin.com/" title="RACHEL McCOLLIN" rel="home">RACHEL McCOLLIN</a>
				</h1>
				
				<h2 id="site-description">Fiction and Technical Writer</h2>
			
			</hgroup>
	
			<div class="right quarter">
								
					<a class="toggle-nav" href="#">&#9776;</a>
					
			</div> <!-- .right quarter -->
		
		</header><!-- header -->
		
	</div><!-- header-bg-->
	
			
	<!-- full width navigation menu -->
	<nav class="menu main">

	<div class="skip-link screen-reader-text">
		<a href="#content" title="<?php esc_attr_e( 'Skip to content', 'wpmu' ); ?>"><?php _e( 'Skip to content', 'wpmu' ); ?></a>
	</div>
	
	<?php wp_nav_menu( array( 'container_class' => 'main-nav', 'theme_location' => 'primary' ) ); ?>
		
</nav><!-- .main -->
