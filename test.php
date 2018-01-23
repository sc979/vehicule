<?php

include_once ('voiture.php');
include_once ('camion.php');

try{
	//new objects
	$matricule = 0;

	$mercedesCar = new voiture(++$matricule,2005,"classe A", 7500);
	$mercedesTruck = new camion(++$matricule,2005,"grosCamion", 25000);
	$renaultTruck = new camion(++$matricule, 2018,"camionLourd", 75000);
	$renaultCar = new voiture(++$matricule,2016,"classe A", 15500);


	//testing methods
	$mercedesCar->ToString();

	$mercedesTruck->ToString();
	$mercedesTruck->demarrer();
	$mercedesTruck->accelerer();

	$renaultTruck->ToString();

	$renaultCar->ToString();
	$renaultCar->demarrer();
	$renaultCar->accelerer();
	
}

catch (Exception $e)
{
	echo $e->getMessage();
	throw new Exception("Error Processing Request", 1);
}

