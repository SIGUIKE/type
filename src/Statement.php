<?php

namespace Sikessem\Type;

interface Statement {
    public static function parse(mixed $value): self;
}
