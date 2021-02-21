<!DOCTYPE html>
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title><?php the_title(); ?></title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   <!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="<?php echo wp_get_attachment_url( carbon_get_theme_option('site_favicon')); ?>">

</head>
<?php 
 ?>
<body id="top">

	<!-- header 
   ================================================== -->
   
   <header>

   	<div class="row">
	   

   		<div class="logo">
		   
	         <a id="logos" href="index.html"></a>
			 <style>
			 	.logo a{
				 background: url("<?php echo wp_get_attachment_url( carbon_get_theme_option('site_logo')); ?>") no-repeat center;
				 }
			 </style>
	      </div>
		  


	   	<nav id="main-nav-wrap">
				<?php 
			wp_nav_menu( [
				'theme_location'  => 'menu_main_header',
				'container'       => null , 
				'menu_class'      => 'main-navigation', 
        ]);  ?>	
			</nav>

			<a class="menu-toggle" href="#"><span>Menu</span></a>
   		
   	</div>   	
   	<?php wp_head(); ?>
   </header> <!-- /header -->