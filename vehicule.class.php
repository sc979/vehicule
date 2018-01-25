<?php

abstract class vehicule
{

	//public $matricule = 0; // autoincrement
	
	protected $year = 0;
	protected $modele = NULL;
	protected $price = 0;


	/**
	*
	* Return the value
	* @param void
	* @return integer $matricule
	*
	*/
	public function getMatricule()
	{
		return $this->matricule;
	}
	

	/**
	*
	* Set the matricule
	* @param integer $matricule
	* @return void
	*
	*/
	public function setMatricule($matricule)
	{
		$this->matricule = $matricule;
	}


	/**
	*
	* Return the value
	* @param void
	* @return integer $year
	*
	*/
	public function getYear()
	{
		return $this->year;
	}
	

	/**
	*
	* Set the year
	* @param integer $year
	* @return void
	*
	*/
	public function setYear($year)
	{
		$this->year = $year;
	}


	/**
	*
	* Return the value
	* @param void
	* @return string $modele
	*
	*/
	public function getModele()
	{
		return $this->modele;
	}
	

	/**
	*
	* Set the modele
	* @param string $modele
	* @return void
	*
	*/
	public function setModele($modele)
	{
		$this->modele = $modele;
	}


	/**
	*
	* Return the value
	* @param void
	* @return integer $price
	*
	*/
	public function getPrice()
	{
		return $this->price;
	}
	

	/**
	*
	* Set the price
	* @param integer $price
	* @return void
	*
	*/
	public function setPrice($price)
	{
		$this->price = $price;
	}


	/**
	*
	* Print a message
	*@param void
	*@return void
	*
	*/
	abstract function demarrer();


	/**
	*
	* Print a message
	*@param void
	*@return void
	*
	*/
	abstract function accelerer();


	/**
	*
	* Convert values to a message
	*@param 
	*@return void
	*
	*/
	abstract function ToString ();

}
