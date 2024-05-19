<!-- contatnt section start -->

<footer class="contact pb-2" id="contact">	 
		  <div id="preloader" class="preloader">
			  <div class="loader">
				<img src="<?php echo site_url('/wp-content/uploads/2023/10/LogoDev.png');?>" class="img-fluid" alt="Seu Logo" width="300" height="60">
			  </div>
		</div>
	
	
	<div class="max-width">
		<h2 class="title">
			Contato profissional
		</h2>
		<div class="contact-content row justify-content-between">
			
			<div class="column left col-12 col-lg-7">
				<div class="text">
					Entre em contato
				</div>
				<p>
					Clique no ícone para falar agora!
				</p>
				
				<div class="icons">
					
					<div class="line">
						<a href="https://api.whatsapp.com/send?phone=5511997470327"><i class="fab fa-whatsapp"></i></a>
						<div class="info">
							<div class="head">
								<a href="https://api.whatsapp.com/send?phone=5511997470327" class="text-dark" style="text-decoration: none;">(11)99747-0327</a>
							</div>							
						</div>
					</div>

					<div class="line">
						<a href="mailto:contato@marcosreis.dev.br?subject=Contato"><i class="fas fa-envelope"></i></a>
						<div class="info">
							<div class="head">
								<a href="mailto:contato@marcosreis.dev.br?subject=Contato" class="text-dark" style="text-decoration: none;">contato@marcosreis.dev.br</a>
							</div>							
						</div>
					</div>
					
				</div>
				
				<div class="row" id="social">
					<div class="col-12">
		<a href="https://github.com/marcosreisdevbr" target="_blank"><i class="fa-brands fa-github"></i></a>
		<a href="https://www.linkedin.com/in/marcos-reis-8b01bb201/" target="_blank"><i class="fab fa-linkedin"></i></a>			
					</div>
				</div>
				
			</div>			
				<div class="col-12 col-lg-5 text-center">
					<?php echo do_shortcode('[contact-form-7 id="34" title="Contato"]');?>
				</div>			
		</div>	
	</div> <!-- fim container -->	
</footer>
<section class="range">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 text-center text-white p-2">					
				 Copyright &copy; <?php echo date('Y');?> <span>Marcos Reis</span> Todos os direitos reservados | Desenvolvido com <span style="color: red;">&#10084;</span> 
				</div>
			</div>
		</div>
	</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js" integrity="sha512-3J8teBiHrSyaaRBajZyIEtpDsXdPq1gsznKWIVb5CnorQuFhjWGhWe54z8YNnHHr7MZuExb9m5kvf964HiT1Sw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/custom.js"></script>
<?php wp_footer(); ?>
</body>
</html>