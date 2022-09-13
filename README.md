<div align="center"><a href="https://sikessem.com/" title="SIKessEm"><img src="https://github.com/sikessem/sikessem/blob/main/SIKessEm-logo.png" alt="SIKessEm logo"/></a></div>

***

# Customize Object-Oriented PHP Variable Types

This package allows to define variable types or to declare PHP variables from already existing object types.


## Installation

Using [composer](https://getcomposer.org/), you can install Type with the following command:

```bash
composer require sikessem/type
```


## Usage

Define a variable type:

```php
<?php

namespace App\Types;

use Sikessem\Type\Statement;

class MyType implements Statement {
    public function __construct(protected string $value) {
        $this->setValue($value);
    }

    protected string $value;

    public function setValue(string $value): self {
        $this->value = $value;
        return $this;
    }

    public function getValue(): string {
        return $this->value;
    }

    public function dump(): void {
        exit($this->value);
    }

    // The method to define to parse a value
    public static function parse(mixed $value): self {
        return new self((string)$value);
    }
}

```

Declare a variable with the defined type:

```php
<?php

use App\Types\MyType;

$myVar = let(MyType::class, 'Hello');
$myVar->dump(); // Exit with the string 'Hello'

```

## License

This library is distributed under the [![License](https://img.shields.io/badge/license-MIT-blue.svg)](https://opensource.org/licenses/MIT)


## Security Reports

Please send any sensitive issue to [ske@sikessem.com](mailto:ske@sikessem.com). Thanks!
