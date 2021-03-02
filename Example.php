<?php

declare(strict_types=1);

class Example
{
    public function __construct(
        private int $id,
        private string $name,
        private int $depositBalance,
    ) {}
}

$example = new Example(1, 'Marcin', 666);

var_dump($example);


