<?php

class Person {

	protected $name;

	public function __construct($name)
	{
		$this->name = $name;
	}
}

class Business {
	
	protected $staff;

	public function __construct(Staff $staff)
	{
		$this->staff = $staff;
	}

	public function hire(Person $person)
	{
		$this->staff->add($person);
	} 

	public function getStaffMembers()
	{
		return $this->staff->getMembers();
	}
}

class Staff {

	protected $members = [];

	public function __construct($members = [])
	{
		$this->members = $members;
	}

	public function add(Person $person)
	{
		$this->members[] = $person;
	}

	public function getMembers()
	{
		return $this->members; 
	}
}

$jeffrey = new Person('Jeffrey Way');

$staff = new Staff([$jeffrey]);

$laracasts = new Business($staff);

$laracasts->hire(new Person('Jane Doe'));

var_dump($laracasts->getStaffMembers());