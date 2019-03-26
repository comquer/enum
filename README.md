# Enum [![Build Status](https://travis-ci.org/fat-code/enum.svg?branch=master)](https://travis-ci.org/fatcode/enum) [![Maintainability](https://api.codeclimate.com/v1/badges/a3ad92200e13a6219750/maintainability)](https://codeclimate.com/github/fatcode/enum/maintainability) [![Test Coverage](https://api.codeclimate.com/v1/badges/a3ad92200e13a6219750/test_coverage)](https://codeclimate.com/github/fatcode/enum/test_coverage)
Enumeration library for connoisseurs.

## Installation
`composer install fatcode/enum`

## Enum declaration
```php
<?php

use  FatCode\Enum;

class Colors extends Enum
{
    public const RED = 'red';
    public const GREEN = 'green';
    protected const INVISIBLE_COLOR = 'invisible_color';
}
```

## Enum usage
```php
<?php
// $red is instance of Enum with value 'red'
$red = Colors::RED();
$red->getValue(); // "red"
$red->getKey();// "RED"
```
