<?php

include_once ('voiture.php');
include_once ('camion.php');


class test
{
	public $matricule = 0;

	function __construct()
	{}

	function testVehicule($mode, $year, $modele, $price)
	{
		$this->mode = $mode;
		$this->year = $year;
		$this->modele = $modele;
		$this->price = $price;
	

		try
		{
			if($this->mode === "voiture" || $this->mode === "camion")
			{
			$test = new $this->mode(++$this->matricule, $this->year, $this->modele, $this->price);
			$test->ToString();
			$test->demarrer();
			$test->accelerer();
			}
			else
			{
				echo "\nError : ".$this->mode." isn't a 'voiture' or a 'camion'\n";
			}
		}
		catch (Exception $e)
		{
				echo $e->getMessage();
				throw new Exception("Error : Processing Request", 1);
			}
	}


}

//tests ->

$new_test = new test();
$new_test->testVehicule("voiture", 2016, "classe A", 15500);

$new_test->testVehicule("camion", 2005, "grosCamion", 25000);

$new_test->testVehicule("camion", 2018, "camionElectrique", 75000);

$new_test->testVehicule("voiture", 2017, "clio", 15000);

$new_test->testVehicule("stephane", 2018, "moto", 100000);