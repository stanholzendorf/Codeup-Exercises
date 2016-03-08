<?php
date_default_timezone_set('America/Chicago');
function logMessage($logLevel, $message)
{
    
	$date = date("y-m-d");
    $time = date("h:i:s");

    $filename = $date . '.log';
    $handle =  fopen($filename, 'a');
    fwrite($handle, $date . " " . $time . " " .  "[$logLevel]" . " " . $message . PHP_EOL);
	fclose($handle);
}


function logInfo($message)
{
  logMessage("INFO", $message);
}

function logError($message)
{
  logMessage("ERROR", $message);
}

logInfo("ALERT ALERT ALERT");
logError("This is just a test");


// logMessage("INFO", "This is an info message.");
// logMessage("ERROR", "This is an info message.");












// $newentry = $date . $loglevel . $message . PHP_EOL;


