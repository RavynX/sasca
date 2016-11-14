<?php include 'index.php' ?>
<?php startblock('content') ?>
<div id="calendar">
  <p>
    <a href="https://calendar.google.com/calendar/ical/sascaracing%40gmail.com/public/basic.ics"><img class="icon" src="assets/images/iCalendar_icon.png"/><span>Click to add to your iCalendar (ics).</span></a>
  </p>
  <p>
    <a href="https://calendar.google.com/calendar/embed?src=sascaracing%40gmail.com&ctz=America/Chicago"><img class="icon" src="assets/images/calendar-icon.png"/><span>Use this link or the Calendar below. Click the "+GoogleCalendar" link to add.</span></a>
  </p>
</div>
<iframe id="calendar-frame" src="https://www.google.com/calendar/embed?src=sascaracing%40gmail.com&ctz=America/Chicago" style="border: 0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
<?php endblock() ?>
