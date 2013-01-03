<?php

//version 1.1
class RandomQuote 
{
	
/**
* @desc		Displays a randomly selected line from file
* @param str $sFileName		name of file to read from
*/
	public function DisplayQuote($sFileName)
	{
		$quotes = file($sFileName);
		if (!$quotes)
			echo "Unable to open file $sFileName";
		
		srand((double)microtime() * 1000000);
		$randNum = rand(0, count($quotes)-1);
		
		echo $quotes[$randNum];
		
		return 0;
	}
	
/**
* @desc		Returns a randomly selected line from file
* @param str $sFileName		name of file to read from
*/
	public function GetQuote($sFileName)
	{
		$quotes = file($sFileName);
		if (!$quotes)
			return "Unable to open file $sFileName";
		
		srand((double)microtime() * 1000000);
		$randNum = rand(0, count($quotes)-1);
		
		return $quotes[$randNum];
	}
	
}


