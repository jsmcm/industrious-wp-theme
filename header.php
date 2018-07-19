<?php
/**
 * The header for our industrious
 *
 * @link https://www.softsmart.co.za/industrious-wordpress-template
 *
 * @package Industrious
 * @version 1.0
 */

/*

	Industrious by TEMPLATED
	
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
	
	-- modified by John McMurray on 21 June 2018. www.softsmart.co.za
		- The original template has just a burger menu. We wanted a burger menu for responsiveness but a full menu bar for desktops.
		
*/
?><!DOCTYPE HTML>
<html>
	<head>
	
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

		<?php wp_head(); ?>
		
	</head>
	
	
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<a class="logo" href="/"><?php bloginfo('name'); ?></a>
				<nav id="burger">
					<a href="#menu">Menu</a>
				</nav>
				
				<!-- Nav -->
				
                <?php
                if (has_nav_menu('primary')) : 
        
                    wp_nav_menu(
                        array(
                            'container' => 'nav',
                            'container_class' => '',
                            'container_id' => 'menu',
                            'theme_location' => 'primary',
                            'menu_class'     => 'links',
                        )
                    );

                endif; 
                ?>





			</header>
