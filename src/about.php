<?php include_once("header.php"); ?>

	<div id="main">
		<div class="slide" id="aboutpage">
            <div class="slide-content">
			    <p><span class="lead-text">Students for the Exploration and Development of Space</span><br />University of Central Florida Chapter</p>
            </div>
		</div>

		<div id="main-content" onload="initTabs()">
			<div class="content-wrap">
	
				<h2>SEDS Mission Statement</h2>
				<p>SEDS is an independent, student-based organization which promotes the exploration and development of space. SEDS pursues this mission by educating people about the benefits of space, by supporting a network of interested students, by providing an opportunity for members to develop their leadership skills, and inspiring people through our involvement in space-related projects. SEDS believes in a space-faring civilization and that focusing the enthusiasm of young people is the key to our future in space.</p>

				<img class="centered-image" src="images/group_photo_sv17.jpg" alt="SEDS-UCF group photo at SpaceVision 2017"/>


				<h2>Why Join?</h2>
				<p>SEDS can provide an organized pathway for you to begin space related projects and give you a chance to break away from the usual class work. You can also use SEDS as a stepping stone to a space-related career. Being actively involved in SEDS can put you in touch with many members of the space, technology, and education community and will allow you to develop the experience necessary to take leadership roles in your future career, whatever that may be. <a href="membership.php">Become a SEDS member now.</a></p>

				<h2>Officers</h2>
                <div class="tabs">
                    <button class="tab-link" name='officers-2018' onclick="openTab(event, 'officers-2018')">2018-2019</button>
                    <button class="tab-link" name='officers-2017' onclick="openTab(event, 'officers-2017')">2017-2018</button>
                </div>

                <div class="tab-content" id="officers-2018">
                    <h4>2018 officers here</h4>
                </div>

                <div class="tab-content" id="officers-2017">
					<table class="fluid">

						<thead>
							<tr>	
								<th>Name</th>
								<th>Position</th>
								<th>Major</th>
								<th>Year</th>
								<th>Contact</th>
							</tr>
						</thead>
						
						<!-- You can add "class="hidden"" to a table row opening tage <tr> to hide it from the table if the position is currently vacant. This adds the "hidden" class to the div  -->
						
						<tbody>
							
							<tr>	<!-- President -->
								<!-- Name -->	<td>Sumayya Abukhalil</td>			
								<!-- Office -->	<td>President</td>	
								<!-- Major -->	<td>Aerospace Engineering</td>		
								<!-- Year -->	<td>Senior</td>			
								<!-- Contact --><td><a href="mailto:sumayya@knights.ucf.edu">Email</a></td>			
							</tr>
							
							<tr>	<!-- Vice President -->
								<!-- Name -->	<td>John "Ryan" Boehmer</td>
								<!-- Office -->	<td>Vice President</td>
								<!-- Major -->	<td>Aerospace Engineering</td>
								<!-- Year -->	<td>Senior</td>
								<!-- Contact --><td><a href="mailto:rbaymer@knights.ucf.edu">Email</a></td>
							</tr>
							
							<tr>	<!-- Treasurer -->
								<!-- Name -->	<td>Edward "Daniel" Nichols</td>
								<!-- Office -->	<td>Treasurer</td>
								<!-- Major -->	<td>Electrical Engineering</td>
								<!-- Year -->	<td>Senior</td>
								<!-- Contact --><td><a href="mailto:enichols25@knights.ucf.edu">Email</a></td>
							</tr>
							
							<tr>	<!-- Secretary -->
								<!-- Name -->	<td>Ryan Reedy</td>
								<!-- Office -->	<td>Secretary</td>
								<!-- Major -->	<td>Mechanical Engineering</td>
								<!-- Year -->	<td>Senior</td>
								<!-- Contact --><td><a href="mailto:r.reedy@knights.ucf.edu">Email</a></td>
							</tr>

							<tr>	<!-- Directors of Projects -->
								<!-- Name -->	<td>Emily D'Elia</td>
								<!-- Office -->	<td>Director of Projects</td>
								<!-- Major -->	<td>Aerospace Engineering</td>
								<!-- Year -->	<td>Senior</td>
								<!-- Contact --><td><a href="mailto:edelia@knights.ucf.edu">Email</a></td>
							</tr>

							<tr>	<!-- Director of External Affairs -->
								<!-- Name -->	<td>Zachary Stein</td>
								<!-- Office -->	<td>Director of External Affairs</td>
								<!-- Major -->	<td>Aerospace Engineering</td>
								<!-- Year -->	<td>Sophomore</td>
								<!-- Contact --><td><a href="mailto:steinzj@knights.ucf.edu">Email</a></td>
							</tr>

							<!-- 
							<tr>
									<td>Sean Reedy</td>
									<td>Webmaster</td>
									<td>Computer Science</td>
									<td>Senior</td>
									<td><a href="mailto:sean2@knights.ucf.edu">Email</a></td>
							</tr> 
							-->
					
						</tbody>
						
					</table>
                </div>

				<h2>History</h2>
				<p>Students for the Exploration and Development of Space was founded in 1980 at MIT and Princeton and consists of an international group of high school, undergraduate, and graduate students from a diverse range of educational backgrounds who are working to promote space as a whole. SEDS is a chapter based organization with chapters throughout the United States, Canada, United Kingdom, Asia, Latin America, and the Middle East. The permanent National Headquarters for SEDS-USA resides at MIT. Each chapter is fairly independent and coordinates activities and projects in its own area.</p>


			</div>
		</div> <!-- END CONTENT-WRAP DIV -->
	</div> <!-- END MAIN-CONTENT DIV -->
</div><!--  END WRAP DIV  -->


<?php include_once("footer.php"); ?>