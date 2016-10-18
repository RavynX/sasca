<?php include 'index.php' ?>
<?php startblock('content') ?>
<div id="register">
	<h1>2016 SASCA Schedule</h1>
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
				echo "<td>".date_format((new DateTime($event['date'])), 'M j').'</td>';
				echo "<td><a href='".$event['map_url']."' target='_blank'>".$event['site']."</a></td>";
				if(afterYesterday($event['date'])) {
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

<?php endblock() ?>
