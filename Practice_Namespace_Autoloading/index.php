<?php

require 'vendor/autoload.php';

use Acme\{Staff, Business};
use Acme\User\Person;

$jeffrey = new Person('Jeffrey Way');

$staff = new Staff([$jeffrey]);

$laracasts = new Business($staff);

$laracasts->hire(new Person('Jane Doe'));

var_dump($laracasts->getStaffMembers());  