<?php include_once("header.php"); ?>

<div id="main">

	<div class="slide" id="membershippage">
		<p><span class="special">Become a SEDS-UCF Member</span><br />SEDS is open to students of all majors. Join now!</p>
	</div>

	<div id="main-content">
	<div class="content-wrap">
		<h2>1. Fill out membership form</h2>
		<p>Complete the form with Google Docs.</p>
		<a class="button" href="https://goo.gl/forms/TtUp62bOIgTey9n33">MEMBERSHIP FORM</a>

		<h2>2. Pay Dues</h2>
		<p>Annual membership dues can be paid through PayPal or in-person at meetings or office hours (see <a href="events.html">event calendar</a> for office hours in ENG1-140). Membership is good for one year from the time the form is submitted and the payment is made in full. Options are below: </p>
		<!--<table>
			<thead>
				<tr>
					<th>Option</th>
					<th>Price (USD)</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>New Member</td>
					<td>$20</td>
				</tr>
				<tr>
					<td>New Member with SEDS T-shirt</td>
					<td>$30</td>
				</tr>
				<tr>
					<td>Returning Member</td>
					<td>$15</td>
				</tr>
				<tr>
					<td>Returning Member with SEDS T-shirt</td>
					<td>$25</td>
				</tr>
			</tbody>
			</table>-->

			<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="SWPK9SCV5WA5G">
			<table>
			<tr><td><input type="hidden" name="on0" value="Membership Options (w/ PayPal Fee)">Membership Options (w/ PayPal Fee)</td></tr><tr><td><select name="os0">
				<option value="New Member">New Member $20.91 USD</option>
				<option value="New Member w/ Shirt">New Member w/ Shirt $31.20 USD</option>
				<option value="Returning Member">Returning Member $15.76 USD</option>
				<option value="Returning Member w/ Shirt">Returning Member w/ Shirt $26.06 USD</option>
			</select> </td></tr>
			</table>
			<input type="hidden" name="currency_code" value="USD">
			<input type="image" id="center" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynow_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
			<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
			</form>

			<p>Note that PayPal charges a small convenience fee.</p>

		<h2>3. Get the Newsletter</h2>
		<p>Subscribe to the SEDS-UCF newsletter to get the latest SEDS news delivered straight to your email inbox.</p>
		<a href="https://ucf.us8.list-manage.com/subscribe?u=371c61cbec99cee1a10d785eb&id=76ac33e57e" class="button">Join mailing list</a>

		<h2>4. Connect with the Club</h2>
		<p>Like and follow SEDS-UCF on social media to connect with other members and see what's going on with the club.</p>


		<div class="contrast-box">
			<a class="emphasis" href="https://twitter.com/sedsucf"><img class="icon" src="images/twitter-icon.png" alt="Twitter" />Follow @SEDSUCF on Twitter</a>
			<br />
			<a class="emphasis" href="https://www.facebook.com/SEDSatUCF/"><img class="icon" src="images/facebook-icon.png" alt="Facebook"/>Like SEDSatUCF on Facebook</a>
		</div>

	</div> <!-- END CONTENT-WRAP -->
	</div> <!-- END MAIN-CONTENT -->
</div>

</div><!--  END WRAP DIV  -->

<?php include_once("footer.php"); ?>