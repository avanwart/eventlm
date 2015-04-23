<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>	
<section class="hero light" id="hero">
	<div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">
		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active stadium">
				<div class="row">
					<div class="col-sm-6 col-sm-offset-6 caption">
						We handle everything from budgeting to the actual ride.
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<h1><?php the_field('hero_headline'); ?></h1>
							<div class="text-center">
								<ul>
									<li><i class="glyphicon glyphicon-ok"></i> National Event Consulting Services</li>
									<li><i class="glyphicon glyphicon-ok"></i> Transportation Logistics Planning</li>
									<li><i class="glyphicon glyphicon-ok"></i> Parking Management</li>
								</ul>
							</div>
							<div class="text-center">
								<button class="btn btn-lg btn-primary" id="toggle_intake">Request a free consultation <i class="glyphicon glyphicon-chevron-right"></i></button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item oracle">
				<div class="row">
					<div class="col-sm-6 col-sm-offset-6 caption">
						Oracle Racing at America's Cup regatta - 2014.
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<h1><?php the_field('hero_headline'); ?></h1>
							<div class="text-center">
								<ul>
									<li><i class="glyphicon glyphicon-ok"></i> National Event Consulting Services</li>
									<li><i class="glyphicon glyphicon-ok"></i> Transportation Logistics Planning</li>
									<li><i class="glyphicon glyphicon-ok"></i> Parking Management</li>
								</ul>
							</div>
							<div class="text-center">
								<button class="btn btn-lg btn-primary" id="toggle_intake">Request a free consultation <i class="glyphicon glyphicon-chevron-right"></i></button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item levis">
				<div class="row">
					<div class="col-sm-6 col-sm-offset-6 caption">
						49ers vs. Patriots - Fall 2014
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<h1><?php the_field('hero_headline'); ?></h1>
							<div class="text-center">
								<ul>
									<li><i class="glyphicon glyphicon-ok"></i> National Event Consulting Services</li>
									<li><i class="glyphicon glyphicon-ok"></i> Transportation Logistics Planning</li>
									<li><i class="glyphicon glyphicon-ok"></i> Parking Management</li>
								</ul>
							</div>
							<div class="text-center">
								<button class="btn btn-lg btn-primary" id="toggle_intake">Request a free consultation <i class="glyphicon glyphicon-chevron-right"></i></button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item dreamforce">
				<div class="row">
					<div class="col-sm-6 col-sm-offset-6 caption">
						SalesForce's massive DreamForce convention - 2014.
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<h1><?php the_field('hero_headline'); ?></h1>
							<div class="text-center">
								<ul>
									<li><i class="glyphicon glyphicon-ok"></i> National Event Consulting Services</li>
									<li><i class="glyphicon glyphicon-ok"></i> Transportation Logistics Planning</li>
									<li><i class="glyphicon glyphicon-ok"></i> Parking Management</li>
								</ul>
							</div>
							<div class="text-center">
								<button class="btn btn-lg btn-primary" id="toggle_intake">Request a free consultation <i class="glyphicon glyphicon-chevron-right"></i></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<?php /*<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h1><?php the_field('hero_headline'); ?></h1>
				<div class="text-center">
					<ul>
						<li><i class="glyphicon glyphicon-ok"></i> National Event Consulting Services</li>
						<li><i class="glyphicon glyphicon-ok"></i> Transportation Logistics Planning</li>
						<li><i class="glyphicon glyphicon-ok"></i> Parking Management</li>
					</ul>
				</div>
				<div class="text-center">
					<button class="btn btn-lg btn-primary" id="toggle_intake">Request a free consultation <i class="glyphicon glyphicon-chevron-right"></i></button>
				</div>
			</div>
		</div>
	</div> */ ?>
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
				<h1>Major Events Made Easy</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<ul class="visible-xs">
					<li><a href="#">Transportation Logistics Planning</a></li>
					<li><a href="#">Traffic Operations Management</a></li>
					<li><a href="#">Budget Reduction Services</a></li>
					<li><a href="#">Parking Solutions</a></li>
					<li><a href="#">Vehicle Procurement</a></li>
				</ul>
				<div role="tabpanel" class="hidden-xs">
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
						<div role="tabpanel" class="tab-pane active planning" id="planning">
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
												<a href="#" class="btn btn-lg btn-default">Learn more </a>
												<a class="btn btn-lg btn-primary" id="toggle_intake">Request a free consultation <i class="glyphicon glyphicon-chevron-right"></i></a>
											</p>
										</div>
										<div class="col-sm-5">
											<img src="<?php bloginfo('template_directory'); ?>/library/images/imac-mockup.jpg" class="img-responsive" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane traffic" id="traffic">
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
												<a href="#" class="btn btn-lg btn-default">Learn more </a>
												<a class="btn btn-lg btn-primary" id="toggle_intake">Request a free consultation <i class="glyphicon glyphicon-chevron-right"></i></a>
											</p>
										</div>
										<div class="col-sm-5">
											<img src="<?php bloginfo('template_directory'); ?>/library/images/map-routes.jpg" class="img-responsive" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane budget" id="budget">
							<div class="row">
								<div class="col-md-10 col-md-offset-1">
									<div class="row">
										<div class="col-sm-7">
											<h2>Budget Reduction Services</h2>
											<p>With a database of over 1200 vendors and partners, we can ensure that the right equipment and services are delivered to our client at the right price.  Through proven relationships and industry standing, Event Logistics Management has the ability to secure vehicles of all types at below market value.  These relationships significantly reduce operational costs for our clients and also for passengers.</p>
											<p class="text-center">
												<a href="#" class="btn btn-lg btn-default">Learn more </a>
												<a class="btn btn-lg btn-primary" id="toggle_intake">Request a free consultation <i class="glyphicon glyphicon-chevron-right"></i></a>
											</p>
										</div>
										<div class="col-sm-5">
											<img src="<?php bloginfo('template_directory'); ?>/library/images/piggy-bank-calculator.jpg" class="img-responsive" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane parking" id="parking">
							<div class="row">
								<div class="col-md-10 col-md-offset-1">
									<div class="row">
										<div class="col-sm-7">
											<h2>Parking Solutions</h2>
											<p>As part of the event experience, the Event Logistics Management team will become familiar and comfortable with the venue layout, parking facilities and shuttle drop and load zone opportunities.  We will work alongside city and local agencies to optimize ingress and egress for the event, and produce a solution which reduces the impact of the event to its guests and the local community.</p>
											<p class="text-center">
												<a href="#" class="btn btn-lg btn-default">Learn more </a>
												<a class="btn btn-lg btn-primary" id="toggle_intake">Request a free consultation <i class="glyphicon glyphicon-chevron-right"></i></a>
											</p>
										</div>
										<div class="col-sm-5">
											<img src="<?php bloginfo('template_directory'); ?>/library/images/parking-lot.jpg" class="img-thumbnail img-responsive" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane vehicle" id="vehicle">
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
												<a href="#" class="btn btn-lg btn-default">Learn more </a>
												<a class="btn btn-lg btn-primary" id="toggle_intake">Request a free consultation <i class="glyphicon glyphicon-chevron-right"></i></a>
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
						<button class="btn btn-lg btn-default" id="toggle_intake">Request a free consultation <i class="glyphicon glyphicon-chevron-right"></i></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="events">
	<div class="container">
		<div class="row">
			<div class="col-md-11 col-md-offset-1">
				<div class="row">
					<div class="col-sm-12">
						<h1>We've Got Your Covered</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-7">
						<h3>Types of events we regularly service:</h3>
						<ul>
							<li>Conventions</li>
							<li>Sporting Events</li>
							<li>Festivals / Concerts</li>
							<li>Golf Tournaments</li>
							<li>Corporate Events</li>
							<li>National Political Conventions</li>
							<li>Disaster Relief</li>
							<li>Government Services</li>
							<li>Marathons</li>
							<li>Endurance Challenges</li>
						</ul>
						<div class="text-center">
							<a href="?page_id=4" class="btn btn-lg btn-default">Learn more </a>
							<a href="#" class="btn btn-lg btn-primary">Request a free consultation <i class="glyphicon glyphicon-chevron-right"></i></a>
						</div>
					</div>
					<div class="col-sm-5">
						<img src="<?php bloginfo('template_directory'); ?>/library/images/events-montage-2.jpg" alt="" class="img-responsive">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
	jQuery(document).ready(function($){

		$('.carousel').carousel();

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