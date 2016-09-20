<!doctype html>
<?php require_once 'ti.php' ?>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title>SASCA - San Antonio Sports Car Association</title>
		<meta name="description" content="SASCA - San Antonio Sports Car Association : The Autocrossing community from San Antonio, TX.">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- Fonts -->
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro">
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Libre+Baskerville">

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
    <div id="page-container">
      <div id="header-container">
				<a href="/"><img id="header-logo" src="assets/images/sasca_white_transparent.png"/></a>
				<div id="nav-container">
					<nav>
						<div class="menu-icon"></div>
	          <ul>
	            <li><a href="index.php">Home</a></li>
	            <li><a href="info.php">Club Info</a></li>
	            <li><a href="schedule.php">Schedule</a></li>
	            <li><a href="register.php">Register</a></li>
	            <li><a href="novice.php">Novices</a></li>
	            <li><a href="calendar.php">Calendar</a></li>
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
				&copy;2016 SASCA All rights reserved
			<div>
		</div>
	</body>
</html>
