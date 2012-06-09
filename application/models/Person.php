<?php
class Person extends CI_model{
	private $firstName = "";
	private $lastName = "";
	private $age = "";
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function GetFirstName()
	{
		return $this->firstName;
	}
	
	public function GetLastName()
	{
		return $this->lastName;
	}
	
	public function GetAge()
	{
		return $this->age;
	}
	
	public function SetFirstName($firstName)
	{
		$this->firstName = $firstName;
	}
	
	public function SetLastName($lastName)
	{
		$this->lastName = $lastName;
	}
	
	public function Age($age)
	{
		$this->age = $age;
	}
	
	
}