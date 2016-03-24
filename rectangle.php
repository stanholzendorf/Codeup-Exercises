<?php

class Rectangle 
{
	private $height;
	private $width;

	public function __construct ($height, $width)
	{
		$this->setheight($height);
		$this->setwidth($width);

	}

	public function area()
	{
		return $this->height * $this->width;
	}

	public function perimeter()
	{
		return $this->height * 2 + $this->width * 2;
	}

	protected function setheight($height)
	{
		$this->height = $height;
	}

	protected function setwidth($width)
	{
		$this->width = $width;
	}

	public function getheight()
	{
		return $this->height;
	}

	public function getwidth()
	{
		return $this->width;
	}
}