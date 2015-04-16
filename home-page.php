<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>	
<section class="hero light" id="hero">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h1><?php the_field('hero_headline'); ?></h1>
				<!-- <p class="text-center"><?php the_field('hero_subhead'); ?></p> -->
			</div>
		</div>
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<ul>
							<li><i class="glyphicon glyphicon-ok"></i> National Event Consulting Services</li>
							<li><i class="glyphicon glyphicon-ok"></i> Transportation Logistics Planning</li>
							<li><i class="glyphicon glyphicon-ok"></i> Parking Management</li>
						</ul>
					</div>
				</div>
				<!-- CTA -->
				<div class="row">
					<div class="col-sm-12">
						<button class="btn btn-lg btn-primary" id="toggle_intake">Request a Free Consultation <i class="glyphicon glyphicon-chevron-right"></i></button>
					</div>
				</div>
			</div>
		</div>
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
					<div class="col-xs-6 col-sm-2 livenation"><img src="<?php bloginfo('template_directory'); ?>/library/images/live-nation-logo.jpg" alt=""></div>
					<div class="col-xs-6 col-sm-2 ea"><img src="<?php bloginfo('template_directory'); ?>/library/images/ea-games-logo.jpg" alt=""></div>
					<div class="col-xs-6 col-sm-2"><img src="<?php bloginfo('template_directory'); ?>/library/images/49ers-logo.jpg" alt=""></div>
					<div class="col-xs-6 col-sm-2 dreamforce"><img src="<?php bloginfo('template_directory'); ?>/library/images/dreamforce-logo.jpg" alt=""></div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="services" id="services">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Headache-Free Event Transportation</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div role="tabpanel">
				  <!-- Nav tabs -->
				  <ul class="nav nav-tabs" role="tablist">
				    <li role="presentation" class="active"><a href="#planning" aria-controls="home" role="tab" data-toggle="tab">Transportation Logistics Planning</a></li>
				    <li role="presentation"><a href="#traffic" aria-controls="profile" role="tab" data-toggle="tab">Traffic Operations Management</a></li>
				    <li role="presentation"><a href="#budget" aria-controls="messages" role="tab" data-toggle="tab">Budget Reduction <br class="hidden-xs"/>Services</a></li>
				    <li role="presentation"><a href="#parking" aria-controls="settings" role="tab" data-toggle="tab">Parking <br class="hidden-xs"/>Solutions</a></li>
				    <li role="presentation"><a href="#vehicle" aria-controls="settings" role="tab" data-toggle="tab">Vehicle <br class="hidden-xs"/>Procurement</a></li>
				  </ul>
				  <!-- Tab panes -->
				  <div class="tab-content">
				    <div role="tabpanel" class="tab-pane fade in active planning" id="planning">
							<div class="row">
								<div class="col-md-10 col-md-offset-1">
									<div class="row">
										<div class="col-sm-7">
											<h2>Transportation Logistics Planning</h2>
											<p>ELM coordinators will produce a complete A to Z plan that encompasses:</p>
											<ul>
												<li>Scope of work identification</li>
												<li>City impact and Traffic management plan</li>
												<li>Operational and Communication system</li>
												<li>Customized routing design</li>
												<li>Budget Forecasting</li>
											</ul>
											<p class="text-center">
												<a class="btn btn-lg btn-primary" id="toggle_intake">Request a Free Consultation <i class="glyphicon glyphicon-chevron-right"></i></a>
												<a href="#" class="btn btn-lg btn-default">Learn more <i class="glyphicon glyphicon-chevron-right"></i></a>
											</p>
										</div>
										<div class="col-sm-5">
											<img src="<?php bloginfo('template_directory'); ?>/library/images/imac-mockup.jpg" class="img-responsive" alt="">
										</div>
									</div>
								</div>
							</div>
				    </div>
				    <div role="tabpanel" class="tab-pane fade traffic" id="traffic">
							<div class="row">
								<div class="col-md-10 col-md-offset-1">
									<div class="row">
										<div class="col-sm-7">
											<h2>Traffic Operations Management</h2>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit illum quam debitis.</p>
											<ul>
												<li>Assistance in securing permits for street closures and load zones</li>
												<li>Operator monitoring center with realtime traffic reporting</li>
												<li>Crowd and safety management</li>
											</ul>
											<p class="text-center">
												<a class="btn btn-lg btn-primary" id="toggle_intake">Request a Free Consultation <i class="glyphicon glyphicon-chevron-right"></i></a>
												<a href="#" class="btn btn-lg btn-default">Learn more <i class="glyphicon glyphicon-chevron-right"></i></a>
											</p>
										</div>
										<div class="col-sm-5">
											<img src="<?php bloginfo('template_directory'); ?>/library/images/map-routes.jpg" class="img-responsive" alt="">
										</div>
									</div>
								</div>
							</div>
				    </div>
				    <div role="tabpanel" class="tab-pane fade budget" id="budget">
							<div class="row">
								<div class="col-md-10 col-md-offset-1">
									<div class="row">
										<div class="col-sm-7">
											<h2>Budget Reduction Services</h2>
											<p>With a database of over 1200 vendors and partners, we can ensure that the right equipment and services are delivered to our client at the right price.  Through proven relationships and industry standing, Event Logistics Management has the ability to secure vehicles of all types at below market value.  These relationships significantly reduce operational costs for our clients and also for passengers.</p>
											<p class="text-center">
												<a class="btn btn-lg btn-primary" id="toggle_intake">Request a Free Consultation <i class="glyphicon glyphicon-chevron-right"></i></a>
												<a href="#" class="btn btn-lg btn-default">Learn more <i class="glyphicon glyphicon-chevron-right"></i></a>
											</p>
										</div>
										<div class="col-sm-5">
											<img src="<?php bloginfo('template_directory'); ?>/library/images/piggy-bank-calculator.jpg" class="img-responsive" alt="">
										</div>
									</div>
								</div>
							</div>
				    </div>
				    <div role="tabpanel" class="tab-pane fade parking" id="parking">
							<div class="row">
								<div class="col-md-10 col-md-offset-1">
									<div class="row">
										<div class="col-sm-7">
											<h2>Parking Solutions</h2>
											<p>As part of the event experience, the Event Logistics Management team will become familiar and comfortable with the venue layout, parking facilities and shuttle drop and load zone opportunities.  We will work alongside city and local agencies to optimize ingress and egress for the event, and produce a solution which reduces the impact of the event to its guests and the local community.</p>
											<p class="text-center">
												<a class="btn btn-lg btn-primary" id="toggle_intake">Request a Free Consultation <i class="glyphicon glyphicon-chevron-right"></i></a>
												<a href="#" class="btn btn-lg btn-default">Learn more <i class="glyphicon glyphicon-chevron-right"></i></a>
											</p>
										</div>
										<div class="col-sm-5">
											<img src="<?php bloginfo('template_directory'); ?>/library/images/parking-lot.jpg" class="img-thumbnail img-responsive" alt="">
										</div>
									</div>
								</div>
							</div>
				    </div>
				    <div role="tabpanel" class="tab-pane fade vehicle" id="vehicle">
							<div class="row">
								<div class="col-md-10 col-md-offset-1">
									<div class="row">
										<div class="col-sm-7">
											<h2>Vehicle Procurement</h2>
											<p>Through strong relationships and our industry standing, we can ensure that the right equipment is delivered to our client at the right price.</p>
											<ul>
												<li>Motor Coaches and Shuttles</li>
												<li>School Buses</li>
												<li>Public Transit Buses (FTA License and Insurance Qualifications)</li>
												<li>Sedan, SUV, Limousines and Vans</li>
											</ul>
											<p class="text-center">
												<a class="btn btn-lg btn-primary" id="toggle_intake">Request a Free Consultation <i class="glyphicon glyphicon-chevron-right"></i></a>
												<a href="#" class="btn btn-lg btn-default">Learn more <i class="glyphicon glyphicon-chevron-right"></i></a>
											</p>
										</div>
										<div class="col-sm-5">
											<img src="<?php bloginfo('template_directory'); ?>/library/images/shuttle-bus.jpg" class="img-responsive" alt="">
										</div>
									</div>
								</div>
							</div>
				    </div>
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
					<div class="col-sm-12 text-center">
						<button class="btn btn-lg btn-default" id="toggle_intake">Request a Free Consultation <i class="glyphicon glyphicon-chevron-right"></i></button>
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

		// Tooltips
		$(function () {
			$('[data-toggle="tooltip"]').tooltip()
		});

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