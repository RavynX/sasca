<div class="novice-block">
	<a href="novices.php" class="btn btn-primary" role="button">New to SASCA? Click here to Learn More!</a>
</div>
<div class="quick-block">
	<div class="title">Next Event</div>
	<div class="content nextEvent">
		<?php
			if ($nextEvent['status'] == 'canceled') {
				echo 'Canceled';
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
		<p>Points Event #<?php echo $previousEvent['id']; ?></p>
		<div class="resultsGroup">
		<?php
			echo '<a href="'.$axwareBaseResultsURL.$previousEvent['axware_host'].'/'.$previousEvent['results_filename'].'_fin.htm" target="_blank" class="btn btn-primary" role="button">Final</a>';
			echo '<a href="'.$axwareBaseResultsURL.$previousEvent['axware_host'].'/'.$previousEvent['results_filename'].'_raw.htm" target="_blank" class="btn btn-primary" role="button">Raw</a>';
			echo '<a href="'.$axwareBaseResultsURL.$previousEvent['axware_host'].'/'.$previousEvent['results_filename'].'_pax.htm" target="_blank" class="btn btn-primary" role="button">PAX</a>';
			echo '<a href="'.$axwareBaseResultsURL.$previousEvent['axware_host'].'/'.$previousEvent['results_filename'].'_sum.htm" target="_blank" class="btn btn-primary" role="button">Summary</a>';
		?>
		</div>
	</div>
</div>
<div class="quick-block meeting">
	<div class="title">Next Meeting</div>
	<div class="content nextMeeting">
		<div class="quick-block-left">
			<?php
				if ($nextMeeting['status'] == 'canceled') { echo 'Event #'.$nextMeeting['event_id'].' Meeting<br/>Canceled'; }
				else {
					echo date_format((new DateTime($nextMeeting['date'])), 'D\, M j\, Y') + '<br/>';
					echo $nextMeeting['venue'] + '<br/>';
					echo 'Chat @ 7:00pm<br/>Meeting @ <b>7:30pm</b>';
				}
			?>
		</div>
				<div class="quick-block-right">
				<?php
					if ($nextMeeting['status'] == 'canceled') { echo ''; }
					else {
						echo '<a href="'.$nextMeeting['map_url'].'" target="_blank" class="btn btn-primary" role="button">Map to Event</a>';
					}
				?>
				</div>
	</div>
</div>

<div id="content">
	<h1>COVID-19 Update</h1>
	<p style="margin-top: 8px;">In light of the concerns surrounding COVID-19, SASCA is regretfully cancelling our May 2, 2020 event. Regardless of how one feels one way or the other about the virus, there are some key issues that are preventing this event from happening:<br/><br/>- Bexar county judge Nelson Wolff's latest executive order NW-06 mandates "Stay at Home" measures that prevent events like ours from taking place through April 30, 2020. At this time, we are unsure if these measures will be lifted after that date or if another will be issued to further extend the time frame of these orders.<br/><br/>- The other unfortunate secondary reason for not having the event, regardless of the measures in place, is that our insurance provider for the event will not write a policy for coverage until the lockdown orders have been lifted by the county that the event takes place in. Even if the lockdown is lifted after April 30, this does not give enough time to get a policy underwritten for the event in one day and present the insurance certificate to our venue before the event on May 2.<br/><br/>At the end of it all, we want everyone to be safe. We are currently looking at possible backup options to host an event later in May. As long as it is permissible to do so, we will do whatever we can do host an event as soon as it is feasible and with appropriate precautions in place.<br/><br/>Please stay tuned!</p>
	<br/>
	<h1>Welcome to SASCA!</h1>
	<p style="margin-top: 8px;">Thanks for swinging on by!  We're your local autocross club for the San Antonio, TX area.  Interested in seeing what we're about?  Come to our next event or one of our monthly meetings and introduce yourself.  It's free to spectate and many people offer their passenger seat for ride-alongs.</p>
	<br/>
</div>
