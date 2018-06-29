<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <header id="masthead" class="site-header" role="banner">
    <div class="container">
			<div class="header-block">
				<a href="../home/"><div class="header-logo">					
				</div>				
				<!-- /.header-block__logo -->
				</a>
				<div class="header-block__menu">
					<div class="toggle">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>
					<!-- /.toggle -->				
					<?php wp_nav_menu(array( 'theme_location'  => 'menu',
												'container' => false,
												'item_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
												'menu_class' => 'nav',
												'menu_id' => '',
												'depth' => 2,
												'walker' => new Walker_Nav_Primary()
											));												
											?>
				</div>
				<!-- /.header-block__menu -->
				<div class="header-block__lang">
					<?php pll_the_languages(array('dropdown'=>1));  ?>
				</div>
				<!-- /.header-block__logo -->  
			</div>
			<!-- /.header-block -->				
		</div>

	<?php get_template_part( 'parts/popup');?>

    </header><!-- .site-header -->

