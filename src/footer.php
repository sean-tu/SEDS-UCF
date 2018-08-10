
<footer>
<div id="footerwrap">
	<div class="footerblock">
		<h5>Quick Links</h5>
			<ul>
				<li><a href="http://www.ucf.edu">University of Central Florida</a></li>
				<li><a href="http://seds.org">SEDS-National Home Page</a></li>
				<li><a href="https://spacevision.seds.org/">SpaceVision 2017</a></li>
			</ul> 
	</div>

	<div class="footerblock">
		<h5>Website Information</h5> 
		<ul>
			<li>Copyright 2018</li>
			<li id="shoutout">Designed by Sean Reedy</li>
		</ul>
	</div> 

	<div class="footerblock">
		<h5>Connect with Us</h5>
		<ul>
			<li><a href="https://www.facebook.com/SEDSatUCF/"><img class="icon-small" src="images/facebook-icon.png" alt="Facebook icon"/>Facebook</a></li>
			<li><a href="https://twitter.com/sedsucf"><img class="icon-small" src="images/twitter-icon.png" alt="Twitter icon" />Twitter</a></li>
			<li><a href="mailto:sedsucf@gmail.com"><img class="icon-small" src="images/email-icon.png" alt="Email icon"/>Email</a></li>
		</ul>
	</div>

</div>
</footer>

<script type="text/javascript">
    var pageTitle = <?php echo json_encode($pageTitle);?>;
    console.log('title', pageTitle);
    var nav = document.getElementById('navigation').children;
    for (var i=0; i<nav.length; i++) {
        if (nav[i].textContent === pageTitle) {
            nav[i].classList.add('active');
            break;
        }
    }

</script>


</body>
</html> 
