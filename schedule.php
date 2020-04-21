<?php include 'index.php' ?>
<?php startblock('content') ?>
<div id="register">
	<h1><?php echo $thisSeasonYear ?> SASCA Schedule</h1>
	<table id="events">
		<tr>
			<th class="number">&nbsp;</th>
			<th class="date">Date</th>
			<th class="location">Location</th>
			<th class="register">Register</th>
		</tr>
<?php
	foreach ($events as $key => $event) {

				echo "<tr>";
				echo "<td>#".$event['id']."</td>";

				if ($event['status'] == 'none') {
					echo "<td></td>";
				}
				else if ($event['date'] == '') {
					echo "<td>TBD</td>";
				}
				else {
					echo "<td>".date_format((new DateTime($event['date'])), 'M j').'</td>';
				}

				echo "<td><a href='".$event['map_url']."' target='_blank'>".$event['site']."</a></td>";

				if ($event['status'] == 'canceled') {
					echo '<td><a href="'.$axwareBaseEventURL.$event['axware_id'].'" target="_blank" role="button" class="canceled">Canceled</a></td>';
				}
				else if ($event['status'] == 'none') {
					echo '<td>No Event Planned</td>';
				}
				else if ($event['axware_id'] == 0) {
					echo '<td>TBD</td>';
				}
				else if(afterYesterday($event['date'])) {
					echo '<td><a href="'.$axwareBaseEventURL.$event['axware_id'].'" target="_blank" class="btn btn-primary" role="button">Register</a></td>';
				}
				else {
					echo '<td><a href="'.$axwareBaseEventURL.$event['axware_id'].'" target="_blank" role="button">Results</a></td>';
				}
				echo "</tr>";
}
	?>
	</table>
</div>

<div id="calendar" class="clearfix">
  <div class="add_cal">
    <a href="https://calendar.google.com/calendar/ical/sascaracing%40gmail.com/public/basic.ics">
      <img class="icon" src="assets/images/iCalendar_icon.png"/>
      <p>iCalendar (ics)</p>
    </a>
  </div>
  <div class="add_cal">
    <a href="https://calendar.google.com/calendar/embed?src=sascaracing%40gmail.com&ctz=America/Chicago">
      <img class="icon" src="assets/images/calendar-icon.png"/>
      <p>Google Calendar</p>
    </a>
  </div>
	<div
</div>

<?php endblock() ?>
