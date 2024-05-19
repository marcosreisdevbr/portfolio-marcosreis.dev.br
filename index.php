<?php get_header(); ?>

<section class="home" id="home">
	<div class="max-width">		
		
		<div class="row align-items-center" id="row">
			<div class="col-12 col-lg-7">
				<div class="home-content">
					<div class="text-1 text-uppercase d-none">
					 Meu Nome é
					</div>
					<div class="text-2 text-uppercase">
						Dev <span style="color: crimson;">Front</span> End
					</div>
					<div class="text-3">
						# <span class="typing"></span>
					</div>
					<a href="https://api.whatsapp.com/send?phone=5511997470327" target="_blank">Whatsapp</a>
				</div>		
			</div>
			<div class="col-lg-5 d-none d-lg-block text-center">
				<img src="<?php echo site_url('/wp-content/uploads/2023/10/LogoDev.png');?>" class="img-fluid" alt="Marcos Reis">
			</div>
		</div>

	</div>
</section>

<!-- About section Start -->
<section class="about pb-4" id="about">
	<div class="max-width">
		<h2 class="title">
			Sobre Mim
		</h2>
		<div class="about-content row justify-content-around">			
			<div class="column left col-12 col-lg-auto text-center">
				<img src="<?php echo site_url('/wp-content/uploads/2023/10/FotoSiteV3.png');?>" class="img-fluid">
			</div>

			<div class="column right col-12 col-lg-6">
				<div class="text">
					Marcos Reis <span class="typing-2"></span>
				</div>
				<p>
					Tenho <?php 
											$ano_nascimento = 1993;
											$idade = date('Y') - $ano_nascimento;
											echo $idade;
											?>
 anos e sou um apaixonado por tecnologia, especialmente por programação. Nasci e cresci em Guarulhos, São Paulo, e desde jovem, desenvolvi uma forte habilidade para aprender e criar soluções inovadoras nesse campo. Minha paixão pelo mundo da tecnologia me motiva a explorar continuamente novas ideias e aprimorar minhas habilidades de programação.
				</p>
				<a href="https://projetos.marcosreis.dev.br/curriculo/" target="_blank"> CV online </a>
			</div>	
			
		</div>
	</div>
</section>

<!--Services Section Start -->
<section class="services pb-4" id="services">
	<div class="max-width">	
		<h2 class="title">
			Meus serviços			
		</h2>
		<div class="serv-content">		
			<div class="card">
				<div class="box">
					<i class="fas fa-paint-brush"></i>
					<div class="text">
						Web designer
					</div>
					<p>
						Criação de páginas e landing pages, tanto em plataformas low code como utilizando linguagem de programação, criação de layouts para sites, banners, e-mail marketing e demais atribuições de design para web. Tenho conhecimento em UX/UI e design responsivo.
					</p>
				</div>
			</div>

			<div class="card">
				<div class="box">
					<i class="fas fa-code"></i>
					<div class="text">
						Dev Front End
					</div>
					<p>
						Criação de sites e aplicações web com tecnologias front end (HTML5, CSS3, Javascript, PHP). Busco sempre evoluir, estou em focado em participar de projetos que aperfeiçoem meus conhecimentos. Futuramente pretendo agregar back end e mobile.
				</div>
			</div>
			
			<div class="card">
				<div class="box">
					<i class="fas fa-chart-line"></i>
					<div class="text">
						E-commerce
					</div>
					<p>
						Possuo sólidos conhecimentos em montagem de lojas virtuais nas plataformas Tray, Vtex e Tiny Erp – e em todas as etapas necessárias para o bm funcionamento do e-commerce. Desenvolvo integrações entre as plataformas  mencionadas com os principais marketplaces.

					</p>
				</div>
			</div>
			
		</div>
	</div>
</section>

<!-- Skills Section Start -->

<section class="skills pb-4" id="skills">
	<div class="max-width">
		<h2 class="title">
			Habilidades
		</h2>
		<div class="skills-content">
			<div class="column left">
				<div class="text">
				Experiências e Habilidades 
				</div>
				
				<div>
					<span class="fw-bold">Made Metal Indústria de displays promocionais</span>
					<span>out/2019 - fev/2021</span>
					<span class="profiss">Operador de Impressão digital</span>
						<span>Operação em impressora mimaki JV 33160-BS e plotter de recorte, em que tive meu primeiro contato com uso de software de edição, tratamento de imagens e utilizava os programas Photoshop e Illustrator. Impressão de vetores em grandes formatos para displays promocionais.
</span>				
				</div>

				<div class="mt-3">
					<span class="fw-bold">Defoco Design</span>
					<span>fev/2021- Atual</span>
					<span class="profiss">Web designer / Dev Front End</span>
					<span> Criação de páginas e landing pages, tanto em plataformas low code como utilizando linguagem de marcação e estilização, criação de layouts para sites, banners, e-mail marketing e demais atribuições de design para web. Tenho conhecimento em UX/UI e design responsivo. Criação de sites e aplicações web com tecnologias front end (HTML5, CSS3, Javascript, PHP). 
</span>				
				</div>
				
			</div>
			
			<div class="column right">
				<div class="bars">
					<div class="infor">
						<img src="<?php echo site_url();?>/wp-content/uploads/2022/01/html-5-svgrepo-com.svg">
						<span>90%</span>						
					</div>
					<div class="line html">
							
					</div>
				</div>
				
				<div class="bars">
					<div class="infor">
						<img src="<?php echo site_url();?>/wp-content/uploads/2022/01/css-3-logo-svgrepo-com.svg">						
						<span>80%</span>						
					</div>
					<div class="line css">
							
					</div>
				</div>				
				
				<div class="bars">
					<div class="infor">
						<img src="<?php echo site_url();?>/wp-content/uploads/2022/01/javascript-svgrepo-com.svg">
						<span>50%</span>						
					</div>
					<div class="line js">
							
					</div>
				</div>				

				<div class="bars">
					<div class="infor">
						<img src="<?php echo site_url();?>/wp-content/uploads/2022/01/php-svgrepo-com.svg">
						<span>40%</span>						
					</div>
					<div class="line php">
							
					</div>
				</div>			
				
			</div>			
		</div>
		
		<div class="row justify-content-md-between pt-3">
			
			<div class="col-12 col-md-3 col-lg-2">
				<img src="<?php echo site_url();?>/wp-content/uploads/2022/01/wordpress-svgrepo-com.svg"><span class="text-white">WordPress</span>
			</div>

			<div class="col-12 col-md-3 col-lg-2">
				<img src="<?php echo site_url();?>/wp-content/uploads/2022/01/bootstrap-svgrepo-com.svg"><span class="text-white">Bootstrap</span>
			</div>
			
			<div class="col-12 col-md-3 col-lg-2">
					<img src="<?php echo site_url();?>/wp-content/uploads/2022/01/jquery-icon-png-7.svg"><span class="text-white">Jquery</span>
			</div>			
				
			<div class="col-12 col-md-3 col-lg-2">
				<img src="<?php echo site_url();?>/wp-content/uploads/2022/01/photoshop-cc-logo-svgrepo-com.svg"><span class="text-white">Photoshop</span>
			</div>
			
			<div class="col-12 col-md-3 col-lg-2">
				<img src="<?php echo site_url();?>/wp-content/uploads/2022/01/adobe-illustrator-cc-logo-svgrepo-com.svg"><span class="text-white">Illustrator</span>
			</div>
			
		</div>
		
 	</div> <!--fim-max width -->
</section>

<!-- portfolio section start -->
<section class="portfolio pb-4" id="portfolio">
	<div class="max-width">
		<h2 class="title">
			Portfólio
		</h2>
		<div class="carousel owl-carousel">	
			
				<?php 
							$args = array(
								'post_type' => 'post',
								'posts_per_page' => 9,
								'order' => 'asc',
								'orderby' => 'date',
							);

							$loop = new WP_Query($args);

							while ($loop->have_posts()) : $loop->the_post();
								$id = get_the_ID();
								$link = get_post_meta($id, 'link', true);
			$tags = get_the_tags();
							?>		
			
							<div class="content">
									<div class="card">											
												<div class="box">
													<a href="<?php echo esc_url($link); ?>" class="p-0 m-0 d-block" target="_blank">
															<div class="w-100 bannerProjetos" style="height:266px; background-image: url('<?php echo get_the_post_thumbnail_url($loop->post->ID, 'full'); ?>'); border: 0;"></div>			</a>		       
											   <div class="text">
													<?php the_title();?>
												</div>
																				
												</div>
										
											<p style="min-height:90px;">
															<?php
																	if ($tags) {
																		foreach ($tags as $tag) {
																			echo '<span>' . esc_html($tag->name) . '</span>';
																		}
																	}
															?>
														</p>
										
										</div>
										<p>
											<a href="<?php echo esc_url($link); ?>" target="_blank">
												<span>Ver online</span>
											</a>
										</p>
									</div>
							<?php endwhile; wp_reset_query(); ?>	

			
		</div>
		
		
		<div class="btn">
				<a href="https://marcosreis.dev.br/portfolio/">Ver Portfólio</a>
		</div>		
	</div>
</section>
<?php get_footer(); ?>
