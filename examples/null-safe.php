<?php

declare(strict_types=1);

class Client
{
    public function __construct(private ?Address $address = null) {}

    public function getAddress(): ?Address
    {
        return $this->address;
    }
}

class Address {
    public function __construct(private string $country) {}

    public function getCountry(): string
    {
        return $this->country;
    }
}

$client = new Client();
var_dump($client->getAddress()->getCountry());

/*
- Tylko read only ($client->getAddress()?->country = 'pl')
 */
