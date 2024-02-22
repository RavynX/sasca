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
				
				if ($nextEvent['results_host'] === 'axware') {
					echo '<a href="'.$axwareBaseEventURL.$nextEvent['axware_id'].'" target="_blank" class="btn btn-primary" role="button">Register Here</a>';
				}
				else {
					echo '<a href="'.$nextEvent['msr_url'].'" target="_blank" class="btn btn-primary" role="button">Register Here</a>';
				}
				
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
			else if($previousEvent['axware_host'] == 'Spokes') {
				echo '<a href="'.$spokesBaseResultsURL.$thisSeasonYear.'/'.$previousEvent['results_filename'].'_fin.htm" target="_blank" class="btn btn-primary" role="button">Final</a>';
				echo '<a href="'.$spokesBaseResultsURL.$thisSeasonYear.'/'.$previousEvent['results_filename'].'_raw.htm" target="_blank" class="btn btn-primary" role="button">Raw</a>';
				echo '<a href="'.$spokesBaseResultsURL.$thisSeasonYear.'/'.$previousEvent['results_filename'].'_pax.htm" target="_blank" class="btn btn-primary" role="button">PAX</a>';
				echo '<a href="'.$spokesBaseResultsURL.$thisSeasonYear.'/'.$previousEvent['results_filename'].'_sum.htm" target="_blank" class="btn btn-primary" role="button">Summary</a>';
			}
			else if($previousEvent['results_host'] == 'msr') {
				echo '<a href="'.$msrBaseResultsURL.$thisSeasonYear.'/e'.$previousEvent['id'].'/'.$previousEvent['results_filename'].'_fin.htm" target="_blank" class="btn btn-primary" role="button">Final</a>';
				echo '<a href="'.$msrBaseResultsURL.$thisSeasonYear.'/e'.$previousEvent['id'].'/'.$previousEvent['results_filename'].'_raw.htm" target="_blank" class="btn btn-primary" role="button">Raw</a>';
				echo '<a href="'.$msrBaseResultsURL.$thisSeasonYear.'/e'.$previousEvent['id'].'/'.$previousEvent['results_filename'].'_pax.htm" target="_blank" class="btn btn-primary" role="button">PAX</a>';
				echo '<a href="'.$msrBaseResultsURL.$thisSeasonYear.'/e'.$previousEvent['id'].'/'.$previousEvent['results_filename'].'_sum.htm" target="_blank" class="btn btn-primary" role="button">Summary</a>';
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
					echo '<br/>Chat @ 6:30pm<br/>Meeting @ <b>7:00pm</b>';
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
	<div>
		<h1>2024 Announcements</h1>
		<p>SASCA has moved, and registration for SASCA#1-2024 is now open!!!</p>

		<p>Registration for SASCA events will now take place on MotorsportsReg. Become part of the SASCA group so you can find our events easier:</p>

		<p>JOIN THE SASCA MSR GROUP: <a href="http://msreg.com/SASCA-Membership" target="_blank">http://msreg.com/SASCA-Membership</a></p>
		<p>If you were a paid member on AxWare, your membership status should have transferred.</p>
		<p>You probably received an email from MotorsportsReg inviting you to become a member. If you didn’t already have an account, you should be able to create one from the same email that you used in AxWare and things should link up.</p>
		<p>SASCA #1 is now open for registration. It will be on Saturday Feb. 10 at RCCC, so there is under a week for pre-registration. We will still take walk-ups on the day, but that will cost you an extra $5.</p>
		<p><b>REGISTER HERE:</b> <a href="http://msreg.com/SASCA-1-2024" target="_blank">http://msreg.com/SASCA-1-2024</a></p>
		<p>Email <a href="mailto:president@sasca.org">president@sasca.org</a> if you have any issues with membership, or with the registration process.</p>

		<u>Things that are different now:</u>
		<ul style="list-style-type: disc; padding-left: 20px;">
			<li>When picking “Class” and “PAX”, it works a little different than what I expected. Read the Registration Instructions for clarification.</li>
			<li>No reserved numbers. Numbers are up for grabs when each event is created, but there should only be conflicts if the same number is already registered in the same class. This probably won’t happen often.</li>
			<li>No pre-registration without paying. If you pre-register on MSR you need to pay on MSR.</li>
			<li>Other things I am overlooking that will pop up when it’s most inconvenient.</li>
		</ul>
	</div>
	<br/>
	<div id="merch">
		<h1>SASCA Merch is Here</h1>
		<a href="https://merch.sasca.org/" target="_blank">
			<img src="assets/images/sasca_merch.png" class="merch-link"/>
		</a>
	</div>
	<br/>
	<h1>Welcome to SASCA!</h1>
	<p style="margin-top: 8px;">Thanks for swinging on by!  We're your local autocross club for the San Antonio, TX area.  Interested in seeing what we're about?  Come to our next event or one of our monthly meetings and introduce yourself.  It's free to spectate and many people offer their passenger seat for ride-alongs.</p>
	<br/>
	
</div>
