<?php

declare(strict_types = 1);

namespace XRuff\Foursquare;

class Checkin {

	/* @var \StdClass $response */
	public $data;

	public function  __construct(\StdClass $value)
	{
		$cats = [];

		foreach ($value->venue->categories as $key => $cat) {
			$cats[] = new Category($cat);
		}

		$this->data = [
			"id" => $value->id,
			"createdAt" => $value->createdAt,
			"timeZoneOffset" => $value->timeZoneOffset,
			"type" => $value->type,
			"venue_name" => $value->venue->name,
			"venue_id" => $value->venue->id,
			"venue_location_lat" => $value->venue->location->lat,
			"venue_location_lng" => $value->venue->location->lng,
			"venue_location_postalcode" => $value->venue->location->postalCode,
			"venue_location_cc" => $value->venue->location->cc,
			"venue_location_state" => $value->venue->location->state,
			"venue_location_country" => $value->venue->location->country,
			"location" => $value->location,
			"categories" => $cats,
			"sticker" => $value->sticker,
			"isMayor" => $value->isMayor,
			"photos" => $value->photos,
			"comments"  => $value->comments,
			"source_name" =>$value->source->name,
			"source_url" =>$value->source->url,
			"shout" => $value->shout,
			"private" => $value->private,
		];
	}
}
