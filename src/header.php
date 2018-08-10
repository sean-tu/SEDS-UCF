<html lang="en">
<head>
    <?php
    $title = 'SEDS-UCF';
    if (isset($pageTitle) && $pageTitle !== 'Home') {
        $title .= ': ' . $pageTitle;
    }
    ?>
	<title><?php echo $title;?></title>
	<meta name="description" content="The UCF chapter of SEDS- Students for the Development and Exploration of Space" />
	<meta name="author" content="Sean Reedy" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta charset="utf-8" />

	<link rel="stylesheet" type="text/css" href="css/style.css?build=2.0" />
	<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' />
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" />
	<link rel="icon" href="images/SEDS-favicon.png" type="image/x-icon" />

    <script type="text/javascript" src="js/tabs.js"></script>

</head>

<body>

	<header>
		
    	<a id="logo" href="index.php">
    		<img src="images/SEDS-UCF_2018_gold.png" alt="SEDS-UCF logo" />
    	</a>
		
		<nav>
			<div id="icons">
				<a href="https://www.facebook.com/SEDSatUCF/"><img src="images/facebook-icon.png" alt="Facebook"/></a>
				<a href="https://twitter.com/sedsucf"><img src="images/twitter-icon.png" alt="Twitter" /></a>
				<a href="mailto:sedsucf@gmail.com"><img src="images/email-icon.png" alt="Email icon"/></a>
			</div>

            <button class='nav-link' id="nav-icon">+ Menu</button>
			<div id="navigation">
				<a class='nav-link' href="index.php">Home</a>
				<a class='nav-link' href="about.php">About</a>
				<a class='nav-link' href="projects.php">Projects</a>
				<a class='nav-link' href="membership.php">Membership</a>
				<a class='nav-link' href="archive.php">Archive</a>
				<a class='nav-link' href="events.php">Events</a>
			</div>
			
		</nav> 

	</header>

