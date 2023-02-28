<div class="notification-block">
	<a href="covid.php" class="btn btn-primary redBtn" role="button">COVID-19 Impact for Events</a><br/>
	<a href="novices.php" class="btn btn-primary" role="button">New to SASCA? Click here to Learn More!</a>
</div>
<div class="quick-block">
	<div class="title">Next Event</div>
	<div class="content nextEvent">
		<?php
			if (empty($nextEvent)) {
				echo '<div class="quick-block-left">';
				echo 'End of Season.';
				echo '</div>';
				echo '<div class="quick-block-right">';
				echo 'Check back later for new schedule.';
				echo $nextEvent;
				echo '</div>';
			}
			else if ($nextEvent['status'] == 'canceled') {
				echo '<div class="quick-block-left">';
				echo 'Points Event #'.$nextEvent['id'].'<br/>';
				echo '<p class="red">Canceled</red>';
				echo '</div>';
			}
			else {
				echo '<div class="quick-block-left">';
				echo 'Points Event #'.$nextEvent['id'].'<br/>';
				echo date_format((new DateTime($nextEvent['date'])), 'l\<\b\r\> F j\, Y').'<br/>';
				echo '@ '.$nextEvent['site'].'<br/>';
				echo '</div>';
				echo '<div class="quick-block-right">';
				echo '<a href="'.$axwareBaseEventURL.$nextEvent['axware_id'].'" target="_blank" class="btn btn-primary" role="button">Register Here</a>';
				echo '<a href="'.$nextEvent['map_url'].'" target="_blank" class="btn btn-primary" role="button">Map to Event</a>';
				echo '</div>';
			}
		 ?>
	</div>
</div>
<div class="quick-block results">
	<div class="title">Event Results</div>
	<div class="content">
		<?php 
			if (is_null($previousEvent)) {
				echo '<br/>';
			}
			else {
				echo '<p>Points Event #'.$previousEvent['id'].'</p>';
			}
		?>
		<div class="resultsGroup">
		<?php
			if ($previousEvent['status'] == 'canceled')
			{
				echo 'Previous Event was Canceled';
			}
			else if (is_null($previousEvent)) {
				echo 'No Prior Events this Year';
			}
			else {
				echo '<a href="'.$axwareBaseResultsURL.$previousEvent['axware_host'].'/'.$previousEvent['results_filename'].'_fin.htm" target="_blank" class="btn btn-primary" role="button">Final</a>';
				echo '<a href="'.$axwareBaseResultsURL.$previousEvent['axware_host'].'/'.$previousEvent['results_filename'].'_raw.htm" target="_blank" class="btn btn-primary" role="button">Raw</a>';
				echo '<a href="'.$axwareBaseResultsURL.$previousEvent['axware_host'].'/'.$previousEvent['results_filename'].'_pax.htm" target="_blank" class="btn btn-primary" role="button">PAX</a>';
				echo '<a href="'.$axwareBaseResultsURL.$previousEvent['axware_host'].'/'.$previousEvent['results_filename'].'_sum.htm" target="_blank" class="btn btn-primary" role="button">Summary</a>';
			}
		?>
		</div>
	</div>
</div>
<div class="quick-block meeting">
	<div class="title">Next Meeting</div>
	<div class="content nextMeeting">
		<div class="quick-block-left">
			<?php
				if($nextMeeting['venue'] == 'Online') {
					$meetingVenue = $nextMeeting['venue'].' - '.$nextMeeting['address'];
				}
				else {
					$meetingVenue = $nextMeeting['venue'];
				}

				if (empty($nextMeeting)) {
					echo 'End of Season';
				}
				else if ($nextMeeting['status'] == 'canceled') {
					echo 'Event #'.$nextMeeting['event_id'].' Meeting<br/>';
					echo '<p class="red">Canceled</red>';
				}
				else {
					echo date_format(new DateTime($nextMeeting['date']), 'D, M j, Y');
					echo '<br/>';
					echo $meetingVenue;
					echo '<br/>Chat @ 6:30pm<br/>Meeting @ <b>7:30pm</b>';
				}
			?>
		</div>
				<div class="quick-block-right">
				<?php
					if (empty($nextMeeting)) {
						echo 'Check back later for new schedule.';
					}
					else if ($nextMeeting['status'] == 'canceled') {
						echo '';
					}
					else if ($nextMeeting['venue'] == 'Online') {
						echo '<a href="'.$nextMeeting['map_url'].'" target="_blank" class="btn btn-primary" role="button">Online Meeting</a>';
					}
					else {
						echo '<a href="'.$nextMeeting['map_url'].'" target="_blank" class="btn btn-primary" role="button">Map to Event</a>';
					}
				?>
				</div>
	</div>
</div>
<div id="content">
	<div id="content-notifications">
		<a href="covid.php" class="btn btn-primary redBtn hideWeb" role="button">COVID-19 Impact for Events</a>
	</div>
	<h1>Welcome to SASCA!</h1>
	<p style="margin-top: 8px;">Thanks for swinging on by!  We're your local autocross club for the San Antonio, TX area.  Interested in seeing what we're about?  Come to our next event or one of our monthly meetings and introduce yourself.  It's free to spectate and many people offer their passenger seat for ride-alongs.</p>
	<br/>
</div>
