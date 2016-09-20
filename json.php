<?php
  //$date->format('m-d-Y');
  date_default_timezone_set('America/Chicago');

  function beforeTomorrow($date) {
    $tomorrow = new DateTime("tomorrow");
    if ($tomorrow->getTimestamp() > strtotime($date->getTimestamp())) {
      return true;
    }
    return false;
  }

  function isXBeforeY($date1, $date2) {
    if (strtotime($date1) < strtotime($date2)) {
      return true;
    }
    return false;
  }

  function isXAfterY($date1, $date2) {
    if (strtotime($date1) > strtotime($date2)) {
      return true;
    }
    return false;
  }

  function getNextEventId($events) {
    $nextEventId = $events[0]->id;
    foreach($events as $event) {
      if (beforeTomorrow($event->date) && isXAfterY($event->date, $events[$nextEventId-1]->date)) {
        $nextEventId = $event->id;
      }
    }
    return $nextEventId;
  }

  $string = file_get_contents('sasca.json');
  $json = json_decode($string, true);

  $events = $json['events'];
  $nextEventId = getNextEventId($events);

?>
