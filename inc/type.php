<?php

use Sikessem\Type\{Let, Statement};

if (!function_exists('let')) {
    function let(string|object $type, mixed $value): Statement {
        return Let::var($type, $value);
    }
}
