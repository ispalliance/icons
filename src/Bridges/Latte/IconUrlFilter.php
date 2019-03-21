<?php declare(strict_types = 1);

namespace Ispa\Icons\Bridges\Latte;

use Ispa\Icons\Icons;

class IconUrlFilter
{

	/** @var string */
	private $baseUri;

	/** @var Icons */
	private $icons;

	public function __construct(string $baseUri = 'https://raw.githack.com/ispalliance/icons/master/icons')
	{
		$this->baseUri = $baseUri;
		$this->icons = new Icons();
	}

	public function __invoke(string $name, string $size = '128'): string
	{
		return $this->baseUri . '/' . $size . '/' . $this->icons->getFilename($name);
	}

}
