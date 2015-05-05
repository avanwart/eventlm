<?php
/*
Template Name: Quick Quote Thank You
*/
?>

<?php get_header(); ?>	

<section class="thank-you">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				&nbsp;
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
				<h1 class="text-center page-title borderless">Thank you for your inquiry!</h1>
				<?php the_content(); ?>
				<br>
				<br>
				<br>
				<br>
			</div>			
		</div>
	</div>
</section>
<script>
	jQuery(document).ready(function($){
		
	});
</script>
<?php the_field('conversion_pixels'); ?>
<?php get_footer(); ?>