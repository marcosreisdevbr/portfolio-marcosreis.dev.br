<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="">
    <meta name="description" content="">
	<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>    
	
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
	<link rel="shortcut icon" href="https://marcosreis.dev.br/wp-content/uploads/2022/01/icon-1.png" type="image/png">	
	
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" />	
	<?php wp_head(); ?>
	
	<!-- Primary Meta Tags -->
<title>Marcos Reis - Developer</title>
<meta name="title" content="Marcos Reis - Developer">
<meta name="description" content="Desenvolvedor Front End">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://marcosreis.dev.br/">
<meta property="og:title" content="Marcos Reis - Developer">
<meta property="og:description" content="Desenvolvedor Front End">
<meta property="og:image" content="<?php echo site_url();?>/wp-content/uploads/2022/04/imagen-meta-tag.jpg">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://marcosreis.dev.br/">
<meta property="twitter:title" content="Marcos Reis - Developer">
<meta property="twitter:description" content="Desenvolvedor Front End">
<meta property="twitter:image" content="<?php echo site_url();?>/wp-content/uploads/2022/04/imagen-meta-tag.jpg">
	
</head>
<body <?php body_class(); ?>>
	
	<nav class="navbar">
		<div class="max-width d-flex align-items-center">
			<div class="logo">
				<a href="https://marcosreis.dev.br/" class="fs-2">Marcos<span> Reis</span></a>
			</div>			
			<ul class="menu" id="nav">
				<li><a href="https://marcosreis.dev.br/">Início</a></li>
				<?php if(is_front_page()) :?>
				<li><a href="#about">Sobre</a></li>
				<li><a href="#services">Serviços</a></li>
				<li><a href="#skills">Habilidades</a></li>
				<li><a href="https://marcosreis.dev.br/portfolio/">Portfólio</a></li>
				<?php endif;?>
				<li><a href="#contact">Contato</a></li>
			</ul>	
			<div class="menu-btn">
				<i class="fas fa-bars"></i>
			</div>		
		</div>
	</nav>