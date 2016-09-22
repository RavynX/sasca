<?php
	include('json.php');
?>
<div class="quick-block">
	<div class="title">Next Event</div>
	<div class="content">
		Points Event #<?php echo $nextEvent['id']; ?>
	</div>
</div>
<div class="quick-block">
	<div class="title">Event Results</div>
	<div class="content">
		<p>Points Event #<?php echo $lastEvent['id']; ?></p>

	</div>
</div>
<div class="quick-block meeting">
	<div class="title">Next Meeting</div>
	<div class="content">
		<?php echo date_format((new DateTime($nextMeeting['date'])), 'l\, F jS\, Y'); ?><br/>
		Arrive by 6:30pm, Meeting @ <b>7:30pm</b><br/>
		<?php echo $nextMeeting['location']; ?><br/>
		<?php echo '<a href="'.$nextMeeting['map_link'].'" target="_blank">'.$nextMeeting['address'].'</a>'; ?><br/>
	</div>
</div>

<div id="content">
	<h1>Welcome to SASCA!</h1>
	<p style="margin-top: 8px;">Thanks for swinging on by!  We're your local autocross club for the San Antonio, TX area.  Interested in seeing what we're about?  Come to our next event or one of our monthly meetings and introduce yourself.  It's free to spectate and many people offer their passenger seat for ride-alongs.</p>
	<br/>
</div>

<?php
echo "<br/>Last event id: ".$lastEvent['id']."<br/>";
echo "Next event id: ".$nextEvent['id']."<br/>";
echo "Next meeting id: ".$nextMeeting['id']."<br/>";
?>
