<?php declare(strict_types = 1);

$boolean = false;

$fn = function () use (&$boolean) : void {
	$iter = [0];

	foreach ($iter as $_) {
		$boolean = true;

		return;
	}
};

$fn();

if ($boolean === true) {
	echo 'success';
}
