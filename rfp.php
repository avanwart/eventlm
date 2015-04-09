<?php
/*
Template Name: RFP
*/
?>

<?php get_header(); ?>	

<section class="standard rfp">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-md-9 col-lg-8 col-lg-offset-2">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="row">
					<div class="col-sm-12">
						<article>
							<header>
								<h1 class="page-title"><?php the_title(); ?></h1>
							</header>
							<p class="intro text-center">Fill in your details below and one of our specialists will get in touch with you within one business day.</p>
							<form id="rfp" action="" class="form form-horizontal">
								<div class="form-group">
									<label for="tfa_3" class="col-sm-4 control-label">First name</label>
									<div class="col-sm-4">
										<input type="text" id="tfa_3" name="tfa_3" class="form-control" required="">
									</div>
								</div>
								<div class="form-group">
									<label for="tfa_5" class="col-sm-4 control-label">Last name</label>
									<div class="col-sm-4">
										<input type="text" id="tfa_5" name="tfa_5" class="form-control" required="">
									</div>
								</div>
								<div class="form-group">
									<label for="tfa_7" class="col-sm-4 control-label">Email address</label>
									<div class="col-sm-4">
										<input type="email" id="tfa_7" name="tfa_7" class="form-control" required="">
									</div>
								</div>
								<div class="form-group">
									<label for="tfa_8" class="col-sm-4 control-label">Phone number</label>
									<div class="col-sm-4">
										<input type="tel" id="tfa_8" name="tfa_8" class="form-control" required="">
									</div>
								</div>
								<legend>Which of the following applies to you?</legend>
								<div class="radio row">
									<div class="col-sm-10 col-sm-offset-1">
										<label class="control-label">
											<input type="radio" name="tfa_11" id="tfa_14" value="tfa_14">
											<strong>I have a Large Event request</strong> (I need to move 750 people or more)
										</label>
									</div>
								</div>
								<div class="radio row">
									<div class="col-sm-10 col-sm-offset-1">
										<label class="control-label">
											<input type="radio" name="tfa_11" id="tfa_13" value="tfa_13">
											<strong>I have a Charter or Shuttle Request</strong> (I Need to Move 750 People or Less)
										</label>
									</div>
								</div>
							</form>
							<?php the_content(); ?>
						</article> <!-- end article -->
					</div>
				</div>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
</section>
<script>
	jQuery(document).ready(function($){
		// Input mask - Restrict count, formatting, numbers only
		$.extend($.inputmask.defaults, {
			'placeholder': " "
		});
		$('input[type="tel"]').inputmask("(999) 999-9999");

		// Form Validation
		$('#rfp').validate({
			submitHandler: function() { 
				$('#rfp button').prop('disabled', true);
				window.location = "?p=462"
			}
		});
	});
</script>

<?php get_footer(); ?>