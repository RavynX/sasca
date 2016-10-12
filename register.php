<?php include 'index.php' ?>
<?php startblock('content') ?>
<h1>Online Registration</h1><br/>
<div id="register">
	<h2>2016 SASCA Schedule</h2>
	<table id="events">
		<tr>
			<th class="number">Points Event</th>
			<th class="date">Date</th>
			<th class="location">Location</th>
			<th class="register">Register</th>
			<th class="info">Results</th>
		</tr>
<?php
	foreach ($events as $key => $event) {

				echo "<tr>";
				echo "<td>#".$event['id']."</td>";
				echo "<td>".date_format((new DateTime($event['date'])), 'F j').'</td>';
				echo "<td><a href='".$event['map_url']."' target='_blank'>".$event['site']."</a></td>";
				echo '<td><a href="'.$axwareBaseEventURL.$event['axware_id'].'" target="_blank" class="btn btn-primary" role="button">Register</a></td>';


				echo "<td>";
				if (beforeToday($event['date'])) {
					echo '<a href="'.$axwareBaseResultsURL.$lastEvent['axware_host'].'/'.$lastEvent['results_filename'].'_fin.htm" target="_blank" class="btn btn-primary" role="button">Final</a>';
					echo '<a href="'.$axwareBaseResultsURL.$lastEvent['axware_host'].'/'.$lastEvent['results_filename'].'_raw.htm" target="_blank" class="btn btn-primary" role="button">Raw</a>';
					echo '<a href="'.$axwareBaseResultsURL.$lastEvent['axware_host'].'/'.$lastEvent['results_filename'].'_pax.htm" target="_blank" class="btn btn-primary" role="button">PAX</a>';
					echo '<a href="'.$axwareBaseResultsURL.$lastEvent['axware_host'].'/'.$lastEvent['results_filename'].'_sum.htm" target="_blank" class="btn btn-primary" role="button">Summary</a>';
				}
				echo "</td>";
				echo "<td></td>";
				echo "</tr>";
}
	?>
	<!--
		<tr>
			<td>#1 </td>
			<td>January 23</td>
			<td><a href="http://goo.gl/maps/nIz4r" target="_blank">RCCC</a></td>
			<td><a href="https://axwaresystems.com/axorm/calendar_main.php?viewevent=12213" target="_blank">Register Here</a></td>
			<td class="info">Saturday Event!</td>
		</tr>
		<tr>
			<td>#2 </td>
			<td>February 20</td>
			<td><a href="http://goo.gl/maps/nIz4r" target="_blank">RCCC</a></td>
			<td><a href="https://axwaresystems.com/axorm/calendar_main.php?viewevent=12279" target="_blank">Register Here</a></td>
			<td class="info"></td>
		</tr>
		<tr>
			<td>#3 </td>
			<td>March 5</td>
			<td><a href="http://goo.gl/maps/nIz4r" target="_blank">RCCC</a></td>
			<td><a href="https://axwaresystems.com/axorm/calendar_main.php?viewevent=12290" target="_blank">Register Here</a></td>
			<td class="info"></td>
		</tr>
		<tr>
			<td>#4 </td>
			<td>April 9</td>
			<td><a href="http://goo.gl/maps/nIz4r" target="_blank">RCCC</a></td>
			<td><a href="https://axwaresystems.com/axorm/calendar_main.php?viewevent=12313" target="_blank">Register Here</a></td>
			<td class="info"></td>
		</tr>
		<tr>
			<td>#5 </td>
			<td>May 21</td>
			<td><a href="http://goo.gl/maps/nIz4r" target="_blank">RCCC</a></td>
			<td><a href="https://axwaresystems.com/axorm/calendar_main.php?viewevent=12314" target="_blank">Register Here</a></td>
			<td class="info"></td>
		</tr>
		<tr>
			<td>#6 </td>
			<td>June 25</td>
			<td><a href="http://goo.gl/maps/nIz4r" target="_blank">RCCC</a></td>
			<td><a href="https://axwaresystems.com/axorm/calendar_main.php?viewevent=12315" target="_blank">Register Here</a></td>
			<td class="info"></td>
		</tr>
		<tr>
			<td>#7 </td>
			<td>July 30</td>
			<td><a href="http://goo.gl/maps/nIz4r" target="_blank">RCCC</a></td>
			<td><a href="https://axwaresystems.com/axorm/calendar_main.php?viewevent=12293" target="_blank">Register Here</a></td>
			<td class="info">SASCA/Spokes Joint Event</td>
		</tr>
		<tr>
			<td>#8 </td>
			<td>August 21</td>
			<td><a href="https://goo.gl/maps/cKzPJfwN5zM2" target="_blank">SAR</a></td>
			<td><a href="https://axwaresystems.com/axorm/calendar_main.php?viewevent=12294" target="_blank">Register Here</a></td>
			<td class="info">Spokes/SASCA Joint Event</td>
		</tr>
		<tr>
			<td>#9 </td>
			<td>September 24</td>
			<td><a href="http://goo.gl/maps/nIz4r" target="_blank">RCCC</a></td>
			<td><a href="https://axwaresystems.com/axorm/calendar_main.php?viewevent=12316" target="_blank">Register Here</a></td>
			<td class="info"></td>
		</tr>
		<tr>
			<td>#10 </td>
			<td>October 15</td>
			<td><a href="http://goo.gl/maps/nIz4r" target="_blank">RCCC</a></td>
			<td><a href="https://axwaresystems.com/axorm/calendar_main.php?viewevent=12317" target="_blank">Register Here</a></td>
			<td class="info"></td>
		</tr>
		<tr>
			<td>#11 </td>
			<td>November 12</td>
			<td><a href="http://goo.gl/maps/nIz4r" target="_blank">RCCC</a></td>
			<td><a href="https://axwaresystems.com/axorm/calendar_main.php?viewevent=12318" target="_blank">Register Here</a></td>
			<td class="info">&nbsp;</td>
		</tr>
		<tr>
			<td>#12 </td>
			<td>December 10</td>
			<td><a href="http://goo.gl/maps/nIz4r" target="_blank">RCCC</a></td>
			<td><a href="https://axwaresystems.com/axorm/calendar_main.php?viewevent=12319" target="_blank">Register Here</a></td>
			<td class="info">&nbsp;</td>
		</tr>
	-->
	</table>
</div>

<div id="faq">
	<h1>Frequently Asked Questions</h1><br/>

	<h2>What payment types are accepted?</h2>
	<p class="ans">SASCA accepts Cash, Checks, Debit, and Credit Cards.</p>

	<h2>Do I have to register online?</h2>
	<p class="ans">No, you may register on-site the day of the event but it's easier on both you and us if you preregister online to streamline your time through checking in at the trailer in the morning.</p>

	<h2>Do I pay online or at the event?</h2>
	<p class="ans">Whether you register online or on-site, you will pay when you check in at the trailer on race day.</p>

	<h2>How long do I have to preregister online?</h2>
	<p class="ans">You have until midnight on the Friday before the event to preregister online.</p>

	<h2>What if I'm preregistered and I have to change a numer/class/car/etc on race day?</h2>
	<p class="ans">You may change what you need to on race day during the check-in process at the trailer.  Just go to the non-preregistered side of the trailer (the side with the computer) in order to change details on your registration.</p>

	<h2>How do I register for the 'Double' PAX class?</h2>
	<p class="ans">Doubles are no longer pre-register option.  We are currently limiting the Double class to the first 15 drivers who sign up at the event.  You must be a member to register as a Double participant and you must work two assignments.</p>
</div>

<?php endblock() ?>
