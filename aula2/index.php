<?php

class Math
{
	private $num_1;
	private $num_2;

	public function construct($num_1, $num_2)
	{
		$this->$num_1 = $num_1;
		$this->$num_2 = $num_2;
	}

	public function sumAttributes()
	{
		return $this->num_1 + $this->num_2;
	}
	public function sum($num_1, $num_2)
	{
		if($num_1 < 0 || $num_2 < 0)
			return "CAn not sum";
		return $num_1 + $num_2;
	}
	
	public function sumAll($numbersArray)
	{
		$sum = 0;
	
	}
}
$math = new Math(5,7);
echo $math->sumAttributes();

