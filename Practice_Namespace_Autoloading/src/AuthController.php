<?php

namespace Acme;

use Acme\RegisterUser;
use Acme\RespondsToUserRegistration;

class AuthController implements RespondsToUserRegistration {

 	protected $registration;

 	public function __construct(RegisterUser $registration)
 	{
 		$this->registration = $registration;
 	}

 	public function register() 
 	{
 		$this->registration->execute([], $this);
 	}
 	
 	public function userRegisteredSuccessfully()
 	{
 		var_dump('Create successfully');
 	}

 	public function userRegisteredFailed()
 	{
 		var_dump('Create Failed');
 	}
}