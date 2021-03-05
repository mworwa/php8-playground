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

/*
 - Nie można używac redundancyjncyh typów (bool|false)
 - Nie można używac duplikatów (int|int)
 - Można użyc union type Parent|Child
 - W klasie dziecka możemy dodawać lub usuwać typy z zachowaniem kontraktu
 - Return type zezwalaja na pominiecie nullable, natomiast parametry zezwalają na dodanie nullable
 */
