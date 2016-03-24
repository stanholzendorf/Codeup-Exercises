<?php

class Log 
{
	
	private $filename;
	private $handle;


	protected function setfilenameString($prefix)
	{
		$date = date("y-m-d");
		$this->filename = __DIR__ . '/public/logs/' . $prefix .  $date . '.log';
		if (!is_string($this->filename)) {
			echo "Value needs to be a string!";
			die();
		}
	}


	public function __construct($prefix = "log.")

	{	
		$this->setfilenameString($prefix);
		if (!is_string($prefix)) {
			echo "Value needs to be a string!";
		}

		$this->handle = fopen($this->filename, 'a');
	}

	public function ____destruct()

	{
		fclose($this->handle);
	}



	public function logMessage($logLevel, $message)
	{
		if (!is_writable($this->filename) || !touch($this->filename)) {
			echo "Not possible!";
		} else {
	    	$date = date("y-m-d");
	    	$time = date("h:i:s");
	    	// $this->handle = fopen($this->filename, 'a');
	    	fwrite($this->handle, $date . " " . $time . " " .  "[$logLevel]" . " " . $message . PHP_EOL);
			
		}
  		
	}

	public function logInfo($message)
	
	{
  		$this->logMessage("INFO", $message);
	}


	public function logError($message)
	
	{
  		$this->logMessage("ERROR", $message);
	}

		

}






?>