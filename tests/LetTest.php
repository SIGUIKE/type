<?php

use Sikessem\Type\{Let, Statement};

class SkeVar implements Statement {
    public function __construct(protected mixed $value) {}

    public static function parse(mixed $value): self {
        return new self($value);
    }

    public function getValue(): mixed {
        return $this->value;
    }
}

test('The let() function (alias of the '.Let::class.'::var() method) must return an instance of '.Statement::class, function () {
    $skevar = new class(5) extends SkeVar {};
    expect($skevar->getValue())->toBeInt()->toEqual(5);
    expect($var = let($skevar, 2))->toEqual(Let::var(SkeVar::class, 2));
    expect($var->getValue())->toBeInt()->toEqual(2);
});
