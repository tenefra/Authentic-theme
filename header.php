<!DOCTYPE html>
<html lang="en"> 
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Authentic Site Template">   
    <link rel="shortcut icon" href="/wp-content/themes/authentictheme/assets/images/logo.svg"> 
   
    <?php
    wp_head();
    ?>

</head> 

<body>
	<header class="page-title gradient py-2">
		<img class="ml-5 mr-3 logo" src="/wp-content/themes/authentictheme/assets/images/logo.svg" alt="logo">	<h4><?php echo get_bloginfo('name'); ?></h4>
	</header>
    
    <header class="header text-center">	    
	    <nav class="navbar navbar-expand-lg navbar-dark" >
           
			<button id="navbar-btn" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span id="navbar-icon" class="navbar-toggler-icon"></span>
			</button>

			<div id="navigation" class="collapse navbar-collapse" >		

				<?php

					wp_nav_menu(
						array(
							'menu' => 'primary',
							'container' => '',
							'theme_location' => 'primary',
							'items_wrap' => '<ul id="" class="navbar-nav text-sm-center text-md-left">%3$s</ul>'
						)
					);

				?>

			</div>
		</nav>
    </header>