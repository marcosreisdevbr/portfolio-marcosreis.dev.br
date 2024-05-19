<?php
	/* Template Name: portifolio */
	get_header();
?>

<section class="projects w-100 h-auto pb-5" id="projects">
	<div class="container">
		<div class="row">
			
			
				<?php 
							$args = array(
								'post_type' => 'post',
								'posts_per_page' => -1,
								'order' => 'asc',
								'orderby' => 'date',
							);

							$loop = new WP_Query($args);

							while ($loop->have_posts()) : $loop->the_post();
								$id = get_the_ID();
								$link = get_post_meta($id, 'link', true);
			$tags = get_the_tags();
							?>
							<div class="content col-12 col-md-6 col-lg-4">
								<div class="card">
									<a href="<?php echo esc_url($link); ?>" target="_blank">
									<div class="box">                    
										<div class="w-100 bannerProjetos" style="height: 266px; background-image: url('<?php echo get_the_post_thumbnail_url($loop->post->ID, 'full'); ?>');"></div>         
									</div>
										</a>
									<div class="text mt-2">
										<?php the_title();?>
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
								<p class="mt-2">
									<a href="<?php echo esc_url($link); ?>" target="_blank">
										<span>Ver online</span>
									</a>
								</p>
							</div>
							<?php endwhile; wp_reset_query(); ?>
				
			
		</div>
	</div>
</section>

<?php get_footer(); ?>
