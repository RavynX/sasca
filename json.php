<?php
  $axwareBaseEventURL = 'https://axwaresystems.com/axorm/calendar_main.php?viewevent=';
  $axwareBaseResultsURL = 'https://axwaresystems.com/axorm/files/';
  date_default_timezone_set('America/Chicago');

  // Takes a generic yyyymmdd $date format, adds on 11 hours for end of day
  function beforeTomorrow($dateString) {
    $date = (new DateTime($dateString))->modify("+1 day")->modify("-1 second");
    $tomorrow = new DateTime("tomorrow");

    if ($tomorrow > $date) {
      return true;
    }
    return false;
  }

  function beforeToday($dateString) {
    $date = (new DateTime($dateString))->modify("+1 day")->modify("-1 second");
    $today = new DateTime("today");

    if ($today > $date) {
      return true;
    }
    return false;
  }

  function afterYesterday($dateString) {
    $date = (new DateTime($dateString))->modify("+1 day")->modify("-1 second");
    $yesterday = (new DateTime("today"))->modify("-1 second");

    if ($yesterday < $date) {
      return true;
    }
    return false;
  }

  // This retrieves the next event ID through the day of.
  function getNextEvent($events) {
    foreach($events as $event) {
      if (afterYesterday($event['date'])) {
        return $event;
      }
    }
    return null;
  }

  function getNextMeeting($meetings) {
    foreach($meetings as $meeting) {
      if(afterYesterday($meeting['date'])) {
        return $meeting;
      }
    }
    return null;
  }

  function getLastEvent($events) {
    $lastEvent = null;
    foreach($events as $event) {
      if (beforeToday($event['date'])) {
        $lastEvent = $event;
      }
    }
    return $lastEvent;
  }

  $string = file_get_contents('assets/json/sasca.json');
  $json = json_decode($string, true);

  $events = $json['events'];
  $meetings = $json['meetings'];
  $lastEvent = getLastEvent($events);
  $nextEvent = getNextEvent($events);
  $nextMeeting = getNextMeeting($meetings);
?>
