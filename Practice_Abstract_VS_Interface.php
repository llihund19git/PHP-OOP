<?php


interface Provider {
	public function getAuthorizationUrl();
}

abstract class AbstractProvider{

	public function related()
	{
		echo "Related facebook and twitter";
	}
}

class FacebookProvider extends AbstractProvider implements Provider {

	public function getAuthorizationUrl()
	{
		echo "Facebook";
	}
}

class TwitterProvider extends AbstractProvider implements Provider {

	public function getAuthorizationUrl()
	{
		echo "Twitter";
	}
}

class UserController {

	public static function test(Provider $provider)
	{
		$provider->getAuthorizationUrl();
		$provider->related();
	}
}

UserController::test(new FacebookProvider);