<?php

declare(strict_types=1);

$contains = str_contains('Foobar', 'Foo');
$startsWith = str_starts_with('PHP 8.0', 'PHP');
$endsWith = str_ends_with('PHP 8.0', '8.0');

var_dump($contains, $startsWith, $endsWith);
