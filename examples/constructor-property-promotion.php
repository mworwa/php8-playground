<?php

declare(strict_types=1);

class Example
{
    public function __construct(
        private int $id,
        private string $name,
        private int $depositBalance,
    ) {
    }
}

$example = new Example(1, 'Marcin', 666);

var_dump($example);

/*
- Można uruchamiać dodatkowy kod w constructorze
- Można mieszać promoted constructor promoted oraz zwykłe definicje
- Typehint nie jest wymagany
- Brak możliwości duplikowania pól
- Brak możliwości używania w interfejsach oraz klasach abstrakcyjnych
- Składnie można wykorzystywać tylko w konstruktorze
 */
