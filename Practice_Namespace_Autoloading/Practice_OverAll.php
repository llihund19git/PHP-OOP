<?php

require 'vendor/autoload.php';

use Acme\{RegisterUser, AuthController};

$registration = new RegisterUser;
$authController = new AuthController($registration);

$authController->register();