<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>	
<section class="hero light" id="hero">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center">
				<h1><?php the_field('hero_headline'); ?></h1>
				<h2 class=""><?php the_field('hero_subhead'); ?></h2>
				<!-- CTA -->
				<div class="row">
					<div class="col-sm-5 call">
						Call us today to explore your event transportation needs: <strong>1-800-555-5555</strong>
					</div>
					<div class="col-sm-2 text-center or">
						or
					</div>
					<div class="col-sm-5 cta">
						<button class="btn btn-lg btn-primary" id="toggle_intake">Submit your RFP <i class="glyphicon glyphicon-chevron-right"></i></button>
					</div>
				</div>
			</div>
		</div>
		<!-- <a class="down-arrow scroll" href="#services"></a> -->
	</div>
</section>
<section class="logos lightGrey">
	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-lg-offset-1 clients text-center">Our Clients:</div>
			<div class="col-lg-8">
				<div class="row">
					<div class="col-xs-6 col-sm-2"><img src="<?php bloginfo('template_directory'); ?>/library/images/oracle-racing-logo.jpg" alt=""></div>
					<div class="col-xs-6 col-sm-2 levis"><img src="<?php bloginfo('template_directory'); ?>/library/images/levis-stadium-logo.jpg" alt=""></div>
					<div class="col-xs-6 col-sm-2"><img src="<?php bloginfo('template_directory'); ?>/library/images/twitter-logo.jpg" alt=""></div>
					<div class="col-xs-6 col-sm-2 ea"><img src="<?php bloginfo('template_directory'); ?>/library/images/ea-games-logo.jpg" alt=""></div>
					<div class="col-xs-6 col-sm-2 pge"><img src="<?php bloginfo('template_directory'); ?>/library/images/pge-logo.jpg" alt=""></div>
					<div class="col-xs-6 col-sm-2 dreamforce"><img src="<?php bloginfo('template_directory'); ?>/library/images/dreamforce-logo.jpg" alt=""></div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="features" id="services">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<div class="row">
					<div class="col-sm-12">
						<h1>Headache-Free Event Logistics</h1>
					</div>
				</div>
	    	<div class="row">
	    		<div class="col-sm-6 col-lg-6">
	    			<h3><a href="<?php the_field('conventions_url'); ?>">Conventions &amp; Corporate Events</a></h3>
	    			<p><?php the_field('conventions_text'); ?></p>
	    		</div>
	    		<div class="col-sm-6 col-lg-6">
	    			<h3><a href="<?php the_field('sporting_events_url'); ?>">Sporting Events</a></h3>
	    			<p><?php the_field('sporting_events_text'); ?></p>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-sm-6 col-lg-6">
	    			<h3><a href="<?php the_field('festivals_url'); ?>">Festivals &amp; Concerts</a></h3>
	    			<p><?php the_field('festivals_text'); ?></p>
	    		</div>
	    		<div class="col-sm-6 col-lg-6">
	    			<h3><a href="<?php the_field('marathons_url'); ?>">Marathons &amp; Endurance Challenges</a></h3>
	    			<p><?php the_field('marathons_text'); ?></p>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-sm-6 col-lg-6">
	    			<h3><a href="<?php the_field('political_conventions_url'); ?>">Politcal Conventions</a></h3>
	    			<p><?php the_field('political_conventions_text'); ?></p>
	    		</div>
	    		<div class="col-sm-6 col-lg-6">
	    			<h3><a href="<?php the_field('disaster_relief_url'); ?>">Disaster Relief</a></h3>
	    			<p><?php the_field('disaster_relief_text'); ?></p>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-sm-6 col-lg-6">
	    			<h3><a href="<?php the_field('gov_services_url'); ?>">Government Services</a></h3>
	    			<p><?php the_field('gov_services_text'); ?></p>
	    		</div>
	    		<div class="col-sm-6 col-lg-6">
	    			<h3><a href="<?php the_field('golf_tournaments_url'); ?>">Golf Tournaments</a></h3>
	    			<p><?php the_field('golf_tournaments_text'); ?></p>
	    		</div>
	    	</div>
	    	<!-- CTA -->
				<div class="row">
					<div class="col-sm-5 call">
						Call us today to explore your event transportation needs: <strong>1-800-555-5555</strong>
					</div>
					<div class="col-sm-2 text-center or">
						or
					</div>
					<div class="col-sm-5 cta">
						<button class="btn btn-lg btn-primary" id="toggle_intake">Submit your RFP <i class="glyphicon glyphicon-chevron-right"></i></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="testimonials light" id="testimonials">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Testimonials</h1>
			</div>
		</div>
		<?php if(get_field('testimonials')): ?>
		<div class="row">
			<?php while(has_sub_field('testimonials')): ?>
      <div class="col-sm-4 text-center">
				<img class="thumbnail img-circle" src="<?php the_sub_field('headshot'); ?>" alt="">
  			<blockquote>
      		<?php the_sub_field('quote'); ?> <small><?php the_sub_field('name'); ?>, <?php the_sub_field('company'); ?></small>
      	</blockquote>
      </div>
      <?php endwhile; ?>
    </div>
  	<?php endif; ?>
  	<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
  			<!-- CTA -->
				<div class="row">
					<div class="col-sm-5 call">
						Call us today to explore your event transportation needs: <strong>1-800-555-5555</strong>
					</div>
					<div class="col-sm-2 text-center or">
						or
					</div>
					<div class="col-sm-5 cta">
						<button class="btn btn-lg btn-default" id="toggle_intake">Submit your RFP <i class="glyphicon glyphicon-chevron-right"></i></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="benefits">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<div class="row">
					<div class="col-sm-12">
						<h1>Expert Services</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="row">
							<div class="col-sm-4 col-lg-5"><img class="img-responsive img-thumbnail" src="<?php bloginfo('template_directory'); ?>/library/images/budget-scoping.jpg" alt=""></div>
							<div class="col-sm-8 col-lg-7">
								<h2><?php the_field('benefits_subhead_1'); ?></h2>
								<p><?php the_field('benefits_micro_text_1'); ?></p>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="row">
							<div class="col-sm-4 col-lg-5"><img class="img-responsive img-thumbnail" src="<?php bloginfo('template_directory'); ?>/library/images/traffic-management.jpg" alt=""></div>
							<div class="col-sm-8 col-lg-7">
								<h2><?php the_field('benefits_subhead_2'); ?></h2>
								<p><?php the_field('benefits_micro_text_2'); ?></p>
							</div>
						</div>
					</div>
				</div>
				<hr class="hidden-xs hidden-sm"/>
				<div class="row">
					<div class="col-sm-6">
						<div class="row">
							<div class="col-sm-4 col-lg-5"><img class="img-responsive img-thumbnail" src="<?php bloginfo('template_directory'); ?>/library/images/management.jpg" alt=""></div>
							<div class="col-sm-8 col-lg-7">
								<h2><?php the_field('benefits_subhead_3'); ?></h2>
								<p><?php the_field('benefits_micro_text_3'); ?></p>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="row">
							<div class="col-sm-4 col-lg-5"><img class="img-responsive img-thumbnail" src="<?php bloginfo('template_directory'); ?>/library/images/choices.jpg" alt=""></div>
							<div class="col-sm-8 col-lg-7">
								<h2><?php the_field('benefits_subhead_4'); ?></h2>
								<p><?php the_field('benefits_micro_text_4'); ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br class="hidden-xs hidden-sm"/><br class="hidden-xs"/>
		<!-- CTA -->
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<div class="row">
					<div class="col-sm-5 call">
						Call us today to explore your event transportation needs: <strong>1-800-555-5555</strong>
					</div>
					<div class="col-sm-2 text-center or">
						or
					</div>
					<div class="col-sm-5 cta">
						<button class="btn btn-lg btn-primary" id="toggle_intake">Submit your RFP <i class="glyphicon glyphicon-chevron-right"></i></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="faq light">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<h1>Frequently Asked Questions</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-8 col-md-offset-2">
				<?php if(get_field('faq')): ?>
 
					<div class="panel-group" id="accordion">

					<?php while(has_sub_field('faq')): ?>

						<div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php the_sub_field('id'); ?>" class="collapsed">
					          <i class="glyphicon glyphicon-plus"></i><i class="glyphicon glyphicon-minus"></i>	<?php the_sub_field('question'); ?>
					        </a>
					      </h4>
					    </div>
					    <div id="collapse<?php the_sub_field('id'); ?>" class="panel-collapse collapse">
					      <div class="panel-body">
					        <?php the_sub_field('answer'); ?>
					      </div>
					    </div>
					  </div>
				
					<?php endwhile; ?>
				
					</div>
				
				<?php endif; ?>
				
			</div>
		</div>
		<!-- <div class="row">
			<div class="col-sm-12">
				<p class="text-center"><a href="#hero" class="btn btn-lg btn-default signup">Submit your RFP <i class="glyphicon glyphicon-chevron-right"></i></a></p>
			</div>
		</div> -->
	</div>
</section>
<script>
	jQuery(document).ready(function($){
		// Accordion
		$('#collapse1').addClass('in').parent().find('.panel-heading a').removeClass('collapsed');

		// Smooth Scroll Functionality
		$('.scroll, .scroll a').smoothScroll({
			offset: -60,
			easing: 'swing'
		});

		var userAgent = window.navigator.userAgent;

		if (userAgent.match(/iPad/i) || userAgent.match(/iPhone/i)) {
		  $('.signup').smoothScroll({
				offset: 260,
				easing: 'swing',
				beforeScroll: function() {
					$('#toggle_intake').remove();
					$('.quick-quote').addClass('active');
				},
				afterScroll: function() {
					setTimeout(function(){
						$('.card').addClass('hot');
						$('#service').addClass('hot');
					}, 150);
				}
			});
		}
		else {
		  $('.signup').smoothScroll({
				offset: -100,
				easing: 'swing',
				afterScroll: function() {
					setTimeout(function(){
						$('.card').addClass('hot');
						$('#service').addClass('hot');
					}, 150);
				}
			});
		}
		

		$('#service').bind('change', function(){
	    if( $(this).val() !== "" ){
	      $(this).addClass('valid').removeClass('hot');
	    } else {
	      $(this).removeClass('valid');
	    }
		});

		// Quick Quote Form Field Functionality
		$('#service').change(function(){
			if ( $(this).val() == "charter" ){
				$('#name_of_event').hide();
				$('.supplementary').fadeIn();
			} else if ( $(this).val() == "commuter" ){
				$('.supplementary').fadeOut();
				$('#name_of_event').fadeOut();
			} else if ( $(this).val() == "events" ){
				$('.supplementary').hide();
				$('#name_of_event').fadeIn();
			}
		});

		// Input mask - Restrict count, formatting, numbers only
		$.extend($.inputmask.defaults, {
			'placeholder': " "
		});
		$('input[type="tel"]').inputmask("(999) 999-9999");

		// Form Validation
		$('#intake').validate({
			submitHandler: function() { 
				window.location = "quick-quote-thank-you"
			}
		});

	});
</script>

<?php get_footer(); ?>