<?php

declare(strict_types=1);

function handleGet(): string {
    return 'Handling GET request';
}

function handlePost(): string {
    return 'Handling POST request';
}
$requestMethod = 'POST';

$status = match ($requestMethod) {
    'POST' => handlePost(),
    'GET' => handleGet(),
    default => throw new Exception('Unsupported HTTP method'),
};

var_dump($status);


/*
- Match expression moze zwracac wartosc
- Dozwolone jest wiele wyrazeń 'POST', 'UPDATE' => handle()
- Zostanie wykonany tylko jedna instrukcja podczas dopasowania wyrazenia
- Wspierany jest default, ktory zostanie wykonany w przypadku niedopasowania do zdefiniowanych wyrazen
- Match expression musi dopasować wyrażenie. W przypadku niedopasowania zostanie rzucony UnhandledMatchError
 */
