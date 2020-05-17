<?php

declare(strict_types = 1);

namespace XRuff\Foursquare;

class Foursquare extends FoursquareApi {

	/** @var string $selfUrl The url for obtaining user basic information */
	private $selfUrl = 'users/self';

	public function getMyCheckins($params = [])
	{
		$response = $this->GetPrivate($this->selfUrl . '/checkins', $params);
		return new Checkins(json_decode($response));
	}

	public function getMyInfo()
	{
		$result = $this->GetPrivate($this->selfUrl);
		$json = json_decode($result);
		return $json;
	}
}
