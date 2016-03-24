<?php

require_once 'rectangle.php';

class Square extends Rectangle
{
	public function __construct($side)
	{
		parent::__construct($side, $side);
	}
	
	public function perimeter()
	{
		return $this->getheight() * 4;
	}
	public function area()
	{
		return $this->getheight() * $this->getheight();
	}
}