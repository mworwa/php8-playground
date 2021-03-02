<?php

declare(strict_types=1);

class Example
{
    private int|string $id;

    public function getId(): int|string
    {
        return $this->id;
    }

    public function setId(int|string $id): void
    {
        $this->id = $id;
    }
}
