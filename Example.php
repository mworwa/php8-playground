<?php

declare(strict_types=1);

class Example
{
    private int $test;
    public function __construct(
        private int $id,
        private string $name,
        private int $depositBalance,
    ) {}
}

$example = new Example(1, 'Marcin', 666);

var_dump($example);

/*
- Można uruchamiac dodatkowy kod w constructorze
- Można mieszać promoted constructor promoted oraz zwykle
- Typehint nie jest wymagany
- Brak możliwości duplikowania pól
- Brak molziwosci używania w interfejsach oraz klasach abstrakcyjnych
- Składnie można wykorzystywac tylko w konstruktorze
 */
