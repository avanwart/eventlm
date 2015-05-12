<div class="bar">
	
		<?php if ( $post->post_parent == '4' || is_page(4) ) { ?>
			<div class="bucket">
  		<h3 class="bucket-title">Our Services</h3>
  		<?php services_bucket(); ?>
  		</div> <?php
		} elseif ( $post->post_parent == '631' || is_page(631) ) { ?>
			<div class="bucket">
  		<h3 class="bucket-title">Company</h3>
  		<?php company_bucket(); ?>
  		</div> <?php
		} else {

		}?>
	<button class="btn btn-lg btn-block btn-primary visible-xs" id="toggle_intake">Get a free quote <i class="glyphicon glyphicon-chevron-right"></i></button>
	<div class="widget quick-quote" id="intake_widget">
		<form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" class="form" id="rfp">
			<legend>Get a Quote <small>We'll reply within one business day</small></legend>
			<fieldset>
				<div class="form-group">
					<select class="form-control" id="00NE0000000cAF6" name="00NE0000000cAF6" required="">
						<option value="">- Select event type -</option>
						<option value="Charter">Charters</option>
						<option value="Special Event">Special Events</option>
						<option value="Transit">Commuter</option>
					</select>
				</div>
				<div class="form-group">
					<input class="form-control" placeholder="First name" id="first_name" maxlength="40" name="first_name" size="20" type="text" required=""/>
				</div>
				<div class="form-group">
					<input class="form-control" placeholder="Last name" id="last_name" maxlength="80" name="last_name" size="20" type="text" required=""/>
				</div>
				<div class="form-group">
					<input class="form-control" placeholder="Email address" id="email" maxlength="80" name="email" size="20" type="email" required=""/>
				</div>
				<div class="form-group">
					<input class="form-control" placeholder="Company name" id="company" maxlength="40" name="company" size="20" type="text" required=""/>
				</div>
				<div class="form-group hide">
					<select class="form-control" id="lead_source" name="lead_source">
						<option value="">--None--</option>
						<option value="BauersIT.com (Quick Quote)">BauersIT.com (Quick Quote)</option>
						<option value="BauersIT.com (Web Form Long)">BauersIT.com (Web Form Long)</option>
						<option value="BusRates.com (Ad)">BusRates.com (Ad)</option>
						<option value="BusRates.com (Listing)">BusRates.com (Listing)</option>
						<option value="Digioh Lightbox">Digioh Lightbox</option>
						<option value="DMC">DMC</option>
						<option value="Existing Client (Call)">Existing Client (Call)</option>
						<option value="Existing Client (Web)">Existing Client (Web)</option>
						<option value="Gary Bauer">Gary Bauer</option>
						<option value="Gift Certificate">Gift Certificate</option>
						<option value="Google (Ad)">Google (Ad)</option>
						<option value="Google (Organic)">Google (Organic)</option>
						<option value="Inbound Call">Inbound Call</option>
						<option value="Inbound Email">Inbound Email</option>
						<option value="Networking Event">Networking Event</option>
						<option value="Outbound Call">Outbound Call</option>
						<option value="Print Ad">Print Ad</option>
						<option value="Promo Code">Promo Code</option>
						<option value="Referral">Referral</option>
						<option value="Saw Building">Saw Building</option>
						<option value="Saw Vehicle">Saw Vehicle</option>
						<option value="SB1339 Page Form">SB1339 Page Form</option>
						<option value="Trade Account">Trade Account</option>
						<option value="Travel Agent">Travel Agent</option>
						<option value="Word of Mouth">Word of Mouth</option>
						<option value="Yahoo! (Ad)">Yahoo! (Ad)</option>
						<option value="Yahoo! (Organic)">Yahoo! (Organic)</option>
						<option value="Yelp">Yelp</option>
						<option value="Quick Quote 2">Quick Quote 2</option>
					</select>
				</div>
				<div class="form-group">
					<input class="form-control phoneUS" placeholder="Phone number" id="phone" maxlength="40" minlength="14" name="phone" size="20" type="tel" required=""/>
				</div>
				<div class="form-group hide">
					<input class="form-control" placeholder="text" id="00NE0000000afvu" maxlength="255" name="00NE0000000afvu" size="20" type="text" />
				</div>
				<div class="form-group">
					<input class="form-control" placeholder="# of passengers" id="00NE0000000cE27" maxlength="15" name="00NE0000000cE27" size="20" type="text" />
				</div>
				<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Request a free consultation <i class="glyphicon glyphicon-chevron-right"></i></button>
			</fieldset>
		</form>
	</div>
</div>

<script>
	jQuery(document).ready(function($){
		
		// Input mask formatting
		$.extend($.inputmask.defaults, {
			'placeholder': " "
		});
		$('input[type="tel"]').inputmask("(999) 999-9999");

		// Adding a method for US phone numbers
		jQuery.validator.addMethod("phoneUS", function(value, element) {
			return this.optional( element ) || /^(\([0-9]{3}\) |[0-9]{3}-)[0-9]{3}-[0-9]{4}$/.test( value );
		}, 'Enter a valid phone number.');

		// Form Validation
		$('#rfp').validate({
			submitHandler: function() { 
				$('#rfp button').prop('disabled', true);
				window.location = "?p=462"
			}
		});

		// Valid class for select dropdown
		$('select').change(function(){
			if( $(this).val() == "" ){
				$(this).removeClass('valid');
			} else {
				$(this).addClass('valid');
			}
		});

	});
</script>