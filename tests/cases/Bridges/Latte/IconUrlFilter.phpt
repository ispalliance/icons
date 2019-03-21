<?php declare(strict_types = 1);

use Ispa\Icons\Bridges\Latte\IconUrlFilter;
use Tester\Assert;

require_once __DIR__ . '/../../../bootstrap.php';

test(function (): void {
	$filter = new IconUrlFilter();

	Assert::equal('https://raw.githack.com/ispalliance/icons/master/icons/128/ct1-hd.png', $filter('ČT 1 HD'));
});

test(function (): void {
	$filter = new IconUrlFilter('https://example.com');

	Assert::equal('https://example.com/128/ct1-hd.png', $filter('ČT 1 HD'));

	Assert::exception(function () use ($filter): void {
		$filter('ČT11hDD');
	}, InvalidArgumentException::class, '"ČT11hDD" not found, did you mean "ČT 1 HD"?');
});
