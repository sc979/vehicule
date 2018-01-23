<?php

include_once('vehicule.php');

class camion extends vehicule
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
		echo "On fait chauffer le moteur du camion\n";
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
		echo "Ouf, on bouge...\n";
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
		echo "\nCe camion est un ".$this->modele." de ".$this->year."\nIl coûte ". $this->price."€ et est immatriculé : 00".$this->matricule." ABC 75\n";
	}

}