<?php include 'index.php' ?>
<?php startblock('content') ?>
<div id="calendar">
  <div class="add_cal">
    <a href="https://calendar.google.com/calendar/ical/sascaracing%40gmail.com/public/basic.ics">
      <img class="icon" src="assets/images/iCalendar_icon.png"/>
      <p>Click to add to your iCalendar (ics).</p>
    </a>
  </div>
  <div class="clear"></div>
  <div class="add_cal">
    <a href="https://calendar.google.com/calendar/embed?src=sascaracing%40gmail.com&ctz=America/Chicago">
      <img class="icon" src="assets/images/calendar-icon.png"/>
      <p>Use this link or the Calendar below. Click the "+GoogleCalendar" link to add.</p>
    </a>
  </div>
</div>
<iframe id="calendar-frame" src="https://www.google.com/calendar/embed?src=sascaracing%40gmail.com&ctz=America/Chicago" style="border: 0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
<?php endblock() ?>
