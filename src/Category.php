<?php

declare(strict_types = 1);

namespace XRuff\Foursquare;

class Category {

	/* @var string $id */
	public $id;

	/* @var string $name */
	public $name;

	/* @var string $pluralName */
	public $pluralName;

	/* @var string $shortName */
	public $shortName;

	/* @var string $iconPrefix */
	public $iconPrefix;

	/* @var string $iconSuffix */
	public $iconSuffix;

	/* @var boolean $id */
	public $primary;

    public function  __construct(\StdClass $value)
    {
		$this->id = $value->id;
		$this->name = $value->name;
		$this->pluralName = $value->pluralName;
		$this->shortName = $value->shortName;
		$this->iconPrefix = $value->icon->prefix;
		$this->iconSuffix = $value->icon->suffix;
		$this->primary = $value->primary;
	}
}
