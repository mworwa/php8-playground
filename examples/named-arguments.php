<?php

declare(strict_types=1);

class Example
{
    public static function createUser(string $username, int $depositBalance = 20, $bonusBalance = 100): string
    {
        return sprintf(
            'User %s created! Deposit balance = %d, Bonus balance = %d',
            $username,
            $depositBalance,
            $bonusBalance
        );
    }
}

echo Example::createUser(username: 'Janusz666', bonusBalance: 300) . PHP_EOL;

/*
- Pomijanie defaultowych parametrów
- Brak mozliwosci podania nieistniejacego argumentu
- Nie można nadpisywac argumentów, ktore zostały wcześniej ustawione (username: 'Janusz666', bonusBalance: 300, username: 'TurboGrosik777')
- Nazwa parametru nie może być zmienną ($username: 'Janusz666')
- Można mieszać parametry pozycyjne oraz oraz parametry nazwane jednak pozycyjne muszą zostać użyte jako pierwsze ('Janusz666', bonusBalance: 300)
- W przypadku dzieciczenia nazwa parametru musi pochodzic od dziecka
 */

