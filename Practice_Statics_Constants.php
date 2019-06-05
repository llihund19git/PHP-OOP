<?php

class Person {
	public static $age = 1;

	const HANDS = 2;

	public function haveBirthday()
	{
		static::$age += 1;
	}

	public function getAge()
	{
		return $this->age;
	}
}

echo Person::HANDS;
$person = new Person;
$person->haveBirthday();
echo Person::$age;