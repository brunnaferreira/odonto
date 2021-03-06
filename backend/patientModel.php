<?php
	class Patient{

	private $name;
	private $sex;
	private $address;
	private $neighborhood;
	private $city;
	private $state;
	private $birthdate;
	private $cep;
	private $healthPlan;
	private $responsibleName;
	private $responsiblePhone;
	private $medicalRecords;
	private $clinic;

	public function __construct(){

	}
	
	public function getBirthdate(){
		return $this->birthdate;
	}

	public function setBirthdate($birthdate){
		$this->birthdate = $birthdate;
	}

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getCity(){
		return $this->city;
	}

	public function setCity($city){
		$this->city = $city;
	}
	
	public function getSex(){
		return $this->sex;
	}

	public function setSex($sex){
		$this->sex = $sex;
	}

	public function getAddress(){
		return $this->address;
	}

	public function setAddress($address){
		$this->address = $address;
	}
	
	public function getNeighborhood(){
		return $this->neighborhood;
	}

	public function setNeighborhood($neighborhood){
		$this->neighborhood = $neighborhood;
	}

	public function getState(){
		return $this->state;
	}

	public function setState($state){
		$this->state = $state;
	}

	public function getCep(){
		return $this->cep;
	}

	public function setCep($cep){
		$this->cep = $cep;
	}

	public function getHealthPlan(){
		return $this->healthPlan;
	}

	public function setHealthPlan($healthPlan){
		$this->healthPlan = $healthPlan;
	}

	public function getResponsibleName(){
		return $this->responsibleName;
	}

	public function setResponsibleName($responsibleName){
		$this->responsibleName = $responsibleName;
	}

	public function getResponsiblePhone(){
		return $this->responsiblePhone;
	}

	public function setResponsiblePhone($responsiblePhone){
		$this->responsiblePhone = $responsiblePhone;
	}
	
	public function getMedicalRecords(){
		return $this->medicalRecords;
	}

	public function setMedicalRecords($medicalRecords){
		$this->medicalRecords = $medicalRecords;
	}

	public function getClinic(){
		return $this->clinic;
	}

	public function setClinic($clinic){
		$this->clinic = $clinic;
	}


	}
