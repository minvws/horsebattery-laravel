# HorseBattery password generator Laravel package

A Laravel package providing a Service Provider for the [HorseBattery](https://github.com/minvws/horsebattery)
password generator package.

## Requirements

- PHP >= 8.1
- Composer
- Laravel >= 10

## Installation

1. Install the package via composer:

```sh
composer require minvws/horsebattery-laravel
```

# Usage

```php
use MinVWS\HorseBattery\Laravel\Facades\PasswordGenerator;

$generator = new PasswordGenerator();
$generator->generate(4, '-');

// result: Aandeel-Bijkomende-Deregulering-Handelingen
```

See for more information the [HorseBattery documentation](https://github.com/minvws/horsebattery).

## Contributing

If you encounter any issues or have suggestions for improvements, please feel free to open an issue or submit a pull
request on the GitHub repository of this package.

## License

This package is open-source and released under the European Union Public License version 1.2. You are free to use,
modify, and distribute the package in accordance with the terms of the license.
