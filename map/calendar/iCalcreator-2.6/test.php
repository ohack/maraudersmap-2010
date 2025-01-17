<?

require_once( 'iCalcreator.class.php' ); 
$v = new vcalendar();                                      // <span class="comment">create a new calendar instance</span>
$v->setConfig( 'unique_id', 'icaldomain.com' );            // <span class="comment">set Your unique id, required if any component UID is missing</span>

//$v->setProperty( 'method', 'PUBLISH' );                    // <span class="comment">required of some calendar software</span>
$v->setProperty( "x-wr-calname", "Calendar Sample" );      // <span class="comment">required of some calendar software</span>
$v->setProperty( "X-WR-CALDESC", "Calendar Description" ); // <span class="comment">required of some calendar software</span>
$v->setProperty( "X-WR-TIMEZONE", "Europe/Stockholm" );    // <span class="comment">required of some calendar software</span>

 /* start parse of local file */
//$v->setConfig( 'directory', 'calendar' );                  // <span class="comment">set directory</span>
$v->setConfig( 'filename', 'calendar.ics' );                   // <span class="comment">set file name</span>
$v->parse();

 /* start parse of remote file */
//$v->setConfig( 'url', 'http://www.aDomain.net/file.ics' ); // <span class="comment">iCalcreator also support remote files</span>
//$v->parse();

//$v->sort();

$eventArray = $v->selectComponents();
  // select components occuring today
  // (including components with recurrence pattern)
/*
foreach( $eventArray as $year => $yearArray) {
 foreach( $yearArray as $month => $monthArray ) {
  foreach( $monthArray as $day => $dailyEventsArray ) {
   foreach( $dailyEventsArray as $vevent ) {
    $currddate = $event->getProperty( 'x-current-dtstart' );
      // if member of a recurrence set,
      // returns array( 'x-current-dtstart', <DATE>)
      // <DATE> = (string) date("Y-m-d [H:i:s][timezone/UTC offset]")
    $dtstart = $vevent->getProperty( 'dtstart' );
      // dtstart required, one occurence, (orig. start date)
    $summary = $vevent->getProperty( 'summary' );
    $description = $vevent->getProperty( 'description' );
    }
    }
    }
    }
  */  


print_r($eventArray);


//$v->returnCalendar(); 

?>
