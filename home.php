<div class="quick-block">
	<div class="title">Next Event</div>
	<div class="content">
		<?php
			echo '<div class="quick-block-left">';
			echo 'Points Event #'.$nextEvent['id'].'<br/>';
			echo $nextEvent['venue'].'<br/>';
			echo '<a href="'.$nextEvent['map_url'].'" target="_blank">'.$nextEvent['address'].'</a><br/>';
			echo '</div>';
			echo '<div class="quick-block-right">';
			echo '<a href="'.$axwareBaseEventURL.$nextEvent['axware_id'].'" target="_blank" class="btn btn-primary" role="button">Register Here</a><br/>';
			echo '<a href="'.$nextEvent['map_url'].'" target="_blank" class="btn btn-primary" role="button">Map to Event</a>';
			echo '</div>';
		 ?>
	</div>
</div>
<div class="quick-block results">
	<div class="title">Event Results</div>
	<div class="content">
		<p>Points Event #<?php echo $lastEvent['id']; ?></p>
		<?php
			echo '<a href="'.$axwareBaseResultsURL.$lastEvent['axware_host'].'/'.$lastEvent['results_filename'].'_fin.htm" target="_blank" class="btn btn-primary" role="button">Final</a>';
			echo '<a href="'.$axwareBaseResultsURL.$lastEvent['axware_host'].'/'.$lastEvent['results_filename'].'_raw.htm" target="_blank" class="btn btn-primary" role="button">Raw</a>';
			echo '<a href="'.$axwareBaseResultsURL.$lastEvent['axware_host'].'/'.$lastEvent['results_filename'].'_pax.htm" target="_blank" class="btn btn-primary" role="button">PAX</a>';
			echo '<a href="'.$axwareBaseResultsURL.$lastEvent['axware_host'].'/'.$lastEvent['results_filename'].'_sum.htm" target="_blank" class="btn btn-primary" role="button">Summary</a>';
		?>
	</div>
</div>
<div class="quick-block meeting">
	<div class="title">Next Meeting</div>
	<div class="content">
		<?php echo date_format((new DateTime($nextMeeting['date'])), 'l\, F jS\, Y'); ?><br/>
		Arrive by 6:30pm, Meeting @ <b>7:30pm</b><br/>
		<?php echo $nextMeeting['venue']; ?><br/>
		<?php echo '<a href="'.$nextMeeting['map_url'].'" target="_blank">'.$nextMeeting['address'].'</a>'; ?><br/>
	</div>
</div>

<div id="content">
	<h1>Welcome to SASCA!</h1>
	<p style="margin-top: 8px;">Thanks for swinging on by!  We're your local autocross club for the San Antonio, TX area.  Interested in seeing what we're about?  Come to our next event or one of our monthly meetings and introduce yourself.  It's free to spectate and many people offer their passenger seat for ride-alongs.</p>
	<br/>
</div>
