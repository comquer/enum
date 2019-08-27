<?php declare(strict_types=1);

namespace FatCode\Exception;

use UnexpectedValueException;

final class EnumException extends UnexpectedValueException
{
    public static function forInvalidValue(string $enumClass, $value) : self
    {
        return new self("{$enumClass} does not define `{$value}` value as a valid value.");
    }

    public static function forInvalidKey(string $enumClass, string $key) : self
    {
        return new self("{$enumClass} does not define `{$key}` constant.");
    }
}
