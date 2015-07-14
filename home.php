<?php get_header(); ?>
	<div class="container-fluid stage">
		<?php get_template_part( 'views/menu' ); ?>
		<div class="row">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/group-jumping-in-lake-purple.jpg" />
		</div>
		<div class="row quote" style="background-color: #9b378a;">
			<p style="color: #fff;">For adults who struggle with incompatability, FellowRed is a series of relationship workshops in NC that provide interactive methods to create healthy relationships.</p>
		</div>
		<div class="row white">
			<div class="col-md-12 column">
				<h3>Anger Management<br />Workshop</h3>
				<h4>It's time for you to regain control</h4>
				<p>On July 18th, 2015, 8 strangers will come together at Bryan Park (Greensboro, NC) for a fun but intense morning of activities to learn practical ways of overcoming anger.</p>
				<br />
				<table class="table">
					<tr>
						<td>Date</td>
						<td>July 18th, 2015</td>
					</tr>
					<tr>
						<td>Time</td>
						<td>9:30AM-12:30PM</td>
					</tr>
					<tr>
						<td>Location</td>
						<td>Bryan Park<br />6275 Bryan Park Rd<br />Browns Summit, NC</td>
					</tr>
					<tr>
						<td>Instructor</td>
						<td>Desiree Briggs, MA, LPC</td>
					</tr>
					<tr>
						<td>Cost</td>
						<td>$15 USD - Includes breakfast, boat rental and supplies</td>
					</tr>
				</table>
				<a class="btn btn-default" href="<?php echo home_url('/product/anger-management-workshop/'); ?>" >Register Now</a>
			</div>
		</div>
		<div class="row red quote">
			<div class="col-md-2">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/desiree-headshot.png" alt="Desiree Briggs headshot" />
			</div>
			<div class="col-md-10">
				<p>Desiree Briggs, MA, LPCA is the creator of the FellowRed Workshop Series.</p>
			</div>
		</div>
	</div>
	<div class="footer container-fluid">
		<div class="row">
			<p>&copy; 2015 Fellow Red / Desiree Briggs, MA, LPCA. All Rights Reserved. Branded by Battle Branding.</p>
		</div>
	</div>
<?php get_footer(); ?>