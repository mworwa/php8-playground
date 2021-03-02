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
