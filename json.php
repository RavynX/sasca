<?php
  $axwareBaseEventURL = 'https://axwaresystems.com/axorm/calendar_main.php?viewevent=';
  $axwareBaseResultsURL = 'https://axwaresystems.com/axorm/files/';
  $currentSeasonJson = 'assets/json/sasca.json';
  $archiveSeasonJson = 'assets/json/archive.json';
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

  function getPreviousEvent($events) {
    $previousEvent = null;
    foreach($events as $event) {
      if (beforeToday($event['date'])) {
        $previousEvent = $event;
      }
    }
    #If previous event is null, check previous season
    if(is_null($previousEvent)) {
      // pull previous season's events
      $previousSeasonEvents = getPreviousSeasonEvents();
      // call previousEvent on previous season
      $previousEvent = end($previousSeasonEvents);
    }
    return $previousEvent;
  }

  function decodeJson($filePath) {
    $fileContents = file_get_contents($filePath);
    return json_decode($fileContents, true);
  }

  function getThisSeason() {
    global $currentSeasonJson;
    $json = decodeJson($currentSeasonJson);
    return $json;
  }

  function getThisSeasonYear() {
    global $currentSeasonJson;
    $thisSeason = decodeJson($currentSeasonJson);

    if (isset($thisSeason)) {
      return $thisSeason['season'];
    }
    else {
      return null;
    }
  }

  function getThisSeasonEvents() {
    global $currentSeasonJson;
    $thisSeason = decodeJson($currentSeasonJson);

    if (isset($thisSeason)) {
      return $thisSeason['events'];
    }
    else {
      return null;
    }
  }

  function getPreviousSeasonEvents() {
    global $archiveSeasonJson;
    $archiveJson = decodeJson($archiveSeasonJson);

    // Calculate last season's year
    $currentEvents = getThisSeasonEvents();
    $eventDate = new DateTime($currentEvents[0]['date']);
    $previousYear = strval(intval($eventDate->format("Y")) - 1);

    return $archiveJson[$previousYear]['events'];
  }

  $thisSeasonYear = getThisSeasonYear();
  $thisSeason = getThisSeason();
  $events = getThisSeasonEvents();
  $meetings = $thisSeason['meetings'];
  $previousEvent = getPreviousEvent($events);
  $nextEvent = getNextEvent($events);
  $nextMeeting = getNextMeeting($meetings);
?>
