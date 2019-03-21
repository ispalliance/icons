<?php declare(strict_types = 1);

use Ispa\Icons\Icons;
use Tester\Assert;

require_once __DIR__ . '/../bootstrap.php';

test(function (): void {
	$icons = new Icons();

	Assert::true($icons->has('ČT 1 HD'));
	Assert::false($icons->has('ČT11hDD'));

	Assert::same('ct1-hd.png', $icons->getFilename('ČT 1 HD'));

	Assert::exception(function () use ($icons): void {
		$icons->getFilename('ČT11hDD');
	}, InvalidArgumentException::class, '"ČT11hDD" not found, did you mean "ČT 1 HD"?');
});
