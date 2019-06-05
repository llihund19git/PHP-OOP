<?php

interface Logger {
	public function execute($message);
}

class LogToFile implements Logger {

	public function execute($name)
	{
		echo 'Executing to File... '.$name;
	}
}

class LogToDatabase implements Logger {

	public function execute($name)
	{
		echo 'Executing to Database... '.$name;
	}
}

class UserController {

	protected $logger;

	public function __construct(Logger $logger)
	{
		$this->logger = $logger;
	}

	public function show()
	{
		$user = "Dunhill";

		$this->logger->execute($user);
	}
}

$controller = new UserController(new LogToDatabase);

$controller->show();