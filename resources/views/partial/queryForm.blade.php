<div class="queryForm col-xs-12 col-sm-12 col-md-4">
<h2>Make an appointment</h2>
<h2>Call (08) 9387 3389</h2>
 <h3>or</h3>
				<form id="contactForm">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="form-group">
						<input type="text" class="form-control" name="name" id="contactName" placeholder="FullName" required>
					</div>
					<div class="form-group">
						<input type="email" class="form-control" name="email" id="contactEmail" placeholder="Email" required>
					</div>
					<div class="form-group">
						<input type="number" class="form-control" name="phone" id="contactPhone" placeholder="Contact number" required>
					</div>
					<div class="form-group">
						<textarea class="form-control" placeholder="Message" name="message" rows="5" required></textarea>
					</div>
					<button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
				</form>	
</div>