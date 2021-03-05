<?php

declare(strict_types=1);

#[ClassAttribute('Class attribute')]
class Example {
    #[ConstAttribute]
    private const FOO_CONST = 28;
    #[ConstAttribute]
    private const BAR_CONST = 28;

    #[PropertyAttribute(Example::BAR_CONST, 'string')]
    private string $foo;

    #[MethodAttribute, SomeOtherMethodAttribute]
    public function getFoo(#[ArgumentAttribute(28)] $a): string{}
}

#[Attribute]
class ClassAttribute {
    public function __construct(private string $param) {}
}

#[Attribute]
class ConstAttribute {

}
#[Attribute]
class MethodAttribute {

}

#[Attribute]
class SomeOtherMethodAttribute {

}

#[Attribute]
class PropertyAttribute {
    public function __construct(private int $param1, private string $param2)
    {
    }
}

#[Attribute]
class ArgumentAttribute {
    public function __construct(int $param) {}
}

$reflector = new \ReflectionClass(Example::class);
$attrs = $reflector->getAttributes();

foreach ($attrs as $attribute) {

    var_dump($attribute->getName());
}

/*
- Możliwe jest dodanie wiecje niz jednego atrybutu
- Atrybuty mogą być mieszne z dockblokiem i moga wystepowąc zarówno przed nim jak i po nim
 */
