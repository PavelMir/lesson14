<?php
class Vehicle{
	public $firm;
	public $year;
	public $model;
	public $vinCode;
	
	public function getInformation()
	{	
		return $this->firm.' '.$this->year.' '.$this->model.' '.$this->vinCode;
	}
}

class Car extends Vehicle
{
	protected $uniqueFeature = 'full';
	public function getUnique()
	{
		return $this->uniqueFeature;
	}
}

class Truck extends Vehicle
{
	protected $uniqueFeature = 'five tons';
	public function getUnique()
	{
		return $this->uniqueFeature;
	}
}

$myCar = new Car;
$myCar->firm=ww;
$myCar->year=2007;
$myCar->model='golf';
$myCar->vinCode=6534;
echo $myCar->getInformation().'<br>';
echo $myCar->getUnique().'<br><br><br>';

$myTruck = new Truck;
$myTruck->firm='scania';
$myTruck->year=2000;
$myTruck->model='RS';
$myTruck->vinCode=3434;
echo $myTruck->getInformation().'<br>';
echo $myTruck->getUnique();