<?php
/*
# ====================================
# header.php
#
# The theme header
# ====================================
*/
?> 
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<!--[if IE]>
	<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
	<![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<!--===== Header Area =====-->
	<header class="site-header">


		<!-- Navigation -->
		<?php if ( has_nav_menu( 'main-menu' ) ) : ?>


			<nav class="main-nav">

				<div class="logo-left-col">
					<div class="logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<?php 
							if ( get_theme_mod( 'custom_logo' ) !='' ) {
								$site_icon = esc_url( get_site_icon_url(32) );
								$site_icon = get_theme_mod( 'custom_logo' );
								the_custom_logo();
							}else{
								echo '<span class="first-letter">' . mb_substr( get_bloginfo('name'), 0, 1 ) . '</span>';
							}
							?>
						</a>
					</div>
				</div>

				<div class="separator"></div>

				<div class="main-menu-wraper">
					<?php
						wp_nav_menu( array( 
							'theme_location' => 'main-menu',
							// 'menu_class' => 'nav navbar-nav nav-menu pull-right',
							'container' => ''
						));
					?>

					<div class="burger-menu">
						<i class="burger-icon"></i>
					</div>

				</div>
			</nav>

			<!-- <nav class="navbar custom-navbar navbar-fixed-top">
				<div class="main-menu">
					<div class="nav-toggle">
						<button class="toggle-btn">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="navbar-collapse collapse in">
						<ul class="nav navbar-nav nav-social">
							<?php 
								// $links = akyl_load_social_links();
								// foreach ( $links as $link ) {
								// 	echo '<li>' . $link . '</li>' ;
								// }
							?>
						</ul>
						<?php
						// wp_nav_menu( array( 
						//  	'theme_location' => 'main-menu',
						//  	'menu_class' => 'nav navbar-nav nav-menu',
						//  	'container' => ''
						// ));
						?>
					</div>
				</div>
			</nav> -->
		<?php endif; ?>

		<!-- Header Banner -->
		<?php 
			if(is_category()){ 		
				// echo var_dump($GLOBALS['catImage']); 
			?>
				<div class="section banner" style="background-image: url('<?php echo $GLOBALS['catImage']; ?>');">
					<div class="display-table">
						<div class="display-table-cell">
							<div class="container">
								<div class="row">
									<div class="col-xs-12">
										<div class="text-center">
										<h1 class="site-title"><?php echo $GLOBALS['catName']; ?></h1>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } else if(is_single()) {
			
				
			
			} else { 
			 	// echo "Is not category page"; 
			?>
			<div class="section banner" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
				<div class="display-table">
						<div class="display-table-cell">
							<div class="container">
								<div class="row">
									<div class="col-xs-12">
										<div class="text-center">
												<h1 class="site-title"><?php the_title(); ?></h1>
											
												<!-- <p class="site-title"></p> -->
						
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
			
				
		<?php 
		// if ( has_post_thumbnail() ) {
		// 	the_post_thumbnail();
		// }  
		?>
	</header>
	<!--===== End Header Area ======-->

	<!-- background overlay -->
	<div class="bg-overlay"></div>
