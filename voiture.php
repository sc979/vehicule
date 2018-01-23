<?php

include_once('vehicule.php');

class voiture extends vehicule
{
	public $matricule;
	public $year;
	public $modele;
	public $price;

	public function __construct($matricule, $year,$modele,$price)
	{
		$this->matricule = $matricule;
		$this->year = $year;
		$this->modele = $modele;
		$this->price = $price;
	}

	/**
	*
	* Print a message
	*@param void
	*@return void
	*
	*/
	public function demarrer()
	{
		echo "On fait chauffer le moteur de la voiture\n";
	}

	/**
	*
	* Print a message
	*@param void
	*@return void
	*
	*/
	public function accelerer()
	{
		echo "En route pour les bouchons...\n";
	}

	/**
	*
	* Convert values to a message
	*@param 
	*@return void
	*
	*/
	public function ToString()
	{
		echo "\nCette voiture est une ".$this->modele." de ".$this->year."\nElle coûte : ". $this->price."€ et est immatriculée : 00".$this->matricule." ABC 75\n";
	}

}

