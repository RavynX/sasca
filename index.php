<!doctype html>
<?php require_once 'ti.php' ?>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title>SASCA - San Antonio Sports Car Association</title>
		<meta property="og:title" content="SASCA - San Antonio Sports Car Association" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://www.sasca.org/" />
		<meta property="og:image" content="http://www.sasca.org/assets/images/sasca_social.gif" />
		<meta property="og:description" content="SASCA - San Antonio Sports Car Association : The Autocrossing community from San Antonio, TX.">
		<meta property="fb:app_id" content="" />


		<meta name="title" content="SASCA - San Antonio Sports Car Association" />
		<meta name="thumbnail" content="http://www.sasca.org/assets/images/sasca_social.gif" />
		<meta name="description" content="SASCA - San Antonio Sports Car Association : The Autocrossing community from San Antonio, TX.">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans" rel="stylesheet">

		<!-- Styles -->
		<link rel="stylesheet" type="text/css" href="assets/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/normalize.css" />

		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/style.css" />

		<!--[if IE]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

		<script type="text/javascript" src="assets/js/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<!-- sasca.js script included in footer.php -->
	</head>
  <body>
		<?php	include('json.php'); ?>
    <div id="page-container">
      <div id="header-container">
				<a id="header-logo-url" href="/"><img id="header-logo" src="assets/images/sasca_white_transparent.png" alt="San Antonio Sports Car Association"/></a>
				<div id="nav-container">
					<div class="menu-btn">
						<div></div>
						<span></span>
						<span></span>
						<span></span>
					</div>
					<nav>
						<ul id="nav-links">
	            <li><a href="index.php">Home</a></li>
	            <li><a href="info.php">Club Info</a></li>
	            <li><a href="itinerary.php" class="wide">Event Itinerary</a></li>
	            <li><a href="schedule.php" class="wide">Annual Schedule</a></li>
							<li><a href="faq.php">FAQ</a></li>
	            <li><a href="novices.php">Novices</a></li>
	            <!-- <li><a href="calendar.php">Calendar</a></li> -->
	            <li><a target="_blank" href="http://www.sasca.org/forum/">Forum</a></li>
	          </ul>
	        </nav>
				</div>
      </div>
      <div id="content-container">
				<?php startblock('content') ?>
					<?php include('home.php') ?>
				<?php endblock() ?>
			</div>
			<div id="footer-container">
				&copy;2021 SASCA All rights reserved
				<script type="text/javascript" src="assets/js/sasca.js"></script>
			</div>
		</div>
	</body>
</html>
