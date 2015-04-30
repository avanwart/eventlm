<?php
/*
Template Name: Get a Quote
*/
?>

<?php get_header(); ?>	

<section class="quote">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
				<h1>Get a Quote</h1>
				<p>Fill in your details below and one of our dedicated account specialists will get back to you within one business day.</p>
				<form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" class="form form-horizontal">
					<input type=hidden name="oid" value="00DE0000000IvUX">
					<input type=hidden name="retURL" value="http://www.eventlm.com/thank-you">

					<!--  ----------------------------------------------------------------------  -->
					<!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
					<!--  these lines if you wish to test in debug mode.                          -->
					<!--  <input type="hidden" name="debug" value=1>                              -->
					<!--  <input type="hidden" name="debugEmail" value="ckwak@bauersit.com">      -->
					<!--  ----------------------------------------------------------------------  -->

					<div class="form-group">
						<label class="col-sm-4 control-label" for="first_name">First Name</label>
						<div class="col-sm-7">
							<input class="form-control" id="first_name" maxlength="40" name="first_name" size="20" type="text" />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-4 control-label" for="last_name">Last Name</label>
						<div class="col-sm-7">
							<input class="form-control" id="last_name" maxlength="80" name="last_name" size="20" type="text" />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-4 control-label" for="email">Email</label>
						<div class="col-sm-7">
							<input class="form-control" id="email" maxlength="80" name="email" size="20" type="text" />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-4 control-label" for="company">Company</label>
						<div class="col-sm-7">
							<input class="form-control" id="company" maxlength="40" name="company" size="20" type="text" />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-4 control-label" for="lead_source">Lead Source</label>
						<div class="col-sm-7">
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
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label" for="phone">Phone</label>
						<div class="col-sm-7">
							<input class="form-control" id="phone" maxlength="40" name="phone" size="20" type="text" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label" for="00NE0000000cAF6">I am interested in:</label>
						<div class="col-sm-7">
							<select class="form-control" id="00NE0000000cAF6" name="00NE0000000cAF6" title="Interest">
								<option value="">- Select event type</option>
								<option value="Charter">Charters</option>
								<option value="Special Event">Special Events</option>
								<option value="Transit">Transit</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label" for="00NE0000000afvu">Web Source:</label>
						<div class="col-sm-7">
							<input class="form-control" id="00NE0000000afvu" maxlength="255" name="00NE0000000afvu" size="20" type="text" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label" for="00NE0000000cE27"># of Passengers:</label>
						<div class="col-sm-7">
							<input class="form-control" id="00NE0000000cE27" maxlength="15" name="00NE0000000cE27" size="20" type="text" />
						</div>
					</div>
					<div class="form-group">
						<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Submit <i class="glyphicon glyphicon-chevron-right"></i></button>
					</div>

				</form>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>