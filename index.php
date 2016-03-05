<!doctype html>
<?php require_once 'ti.php' ?>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title>SASCA - San Antonio Sports Car Association</title>
		<meta name="description" content="SASCA - San Antonio Sports Car Association : The Autocrossing community from San Antonio, TX.">
		<!--Mobile specific meta goodness :)-->
	    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" type="text/css" href="assets/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />

		<!--[if IE]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

		<script type="text/javascript" src="assets/js/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<!-- sasca.js script included in footer.php -->
	</head>
  <body>
    <div id="page-container">
      <div id="header-container">
        <div id="nav">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li>Club Info
              <ul>
                <li><a style="color:yellow	" href="membership.php">Become a Member</a></li>
                <li><a href="bod.php">BOD &amp; Chairs</a></li>
                <li><a href="clubrules.php">Club Rules</a></li>
                <li><a href="tech.php">Tech Inspection</a></li>
                <li><a href="bylaws.php">By Laws</a></li>
                <li><a href="history.php">History</a></li>
              </ul>
            </li>
            <li><a href="schedule.php">Schedule</a></li>
            <li><a href="register.php">Event Sign Up</a></li>
            <li>Novices
              <ul>
                <li><a href="firsttime.php">First Time?</a></li>
                <li><a href="improve.php">How to Improve</a></li>
                <li><a href="articles.php">Articles</a></li>
              </ul>
            </li>
            <li><a href="calendar.php">Calendar</a></li>
            <li><a target="_blank" href="http://www.sasca.org/forum/">Forum</a></li>
            <li><a target="_blank" href="https://www.facebook.com/groups/SASCA210/">Facebook</a></li>
          </ul>
        </div>
        <div id="logo"></div>
      </div>
      <div id="content-container">
				<?php startblock('content') ?>
					<?php include('home.php') ?>
				<?php endblock() ?>
			</div>
			<div id="footer-container">
				<script src="assets/js/sasca.js"></script>
				©2009 SASCA All rights reserved
			</div>
		</div>
	</body>
</html>
