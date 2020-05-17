<?php

declare(strict_types = 1);

namespace XRuff\Foursquare;

class Checkins {

    /* @var \StdClass $response */
    private $response;

    public function  __construct(\StdClass $response)
    {
		$this->response = $response;
    }

    public function getCount(): int
    {
        return $this->response->count;
    }

    /**
     * @return array<int, mixed>|null
     */
	public function getItems(): ?array
	{
		$r = $this->response;
		if ($r && $r->response && $r->response->checkins && $r->response->checkins->items) {

            $data = [];
            foreach ($r->response->checkins->items as $key => $value) {
                $data[] = new Checkin($value);
            }

			return $data;
		}
		return null;
	}
}
