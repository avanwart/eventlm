<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>	

<section class="standard">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-4 col-md-3">
						<?php
							get_sidebar();
						?>
					</div>
					<div class="col-sm-8 col-md-9 col-lg-8 card">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php
							$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
							$url = $thumb['0'];
						?>
						<header style="background-image: url(<?=$url?>);">
							<div class="overlay">
								<h1 class="page-title"><?php the_title(); ?></h1>
							</div>
						</header>
						<div class="row">
							<div class="col-sm-12">
								<article>
									<?php the_content(); ?>
								</article> <!-- end article -->
							</div>
						</div>
						<?php endwhile; endif; ?>
					</div>
				</div>
			</div>			
		</div>
	</div>
</section>
<script>
	jQuery(document).ready(function($){
		// Accordion
		$('#collapse1').addClass('in').parent().find('.panel-heading a').removeClass('collapsed');

		$('.scroll, .scroll a').smoothScroll({
			offset: -60,
			easing: 'swing'
		});
	});
</script>

<?php get_footer(); ?>