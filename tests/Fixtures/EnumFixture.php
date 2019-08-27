<?php declare(strict_types=1);

namespace Comquer\Enum\Tests\Fixtures;

use Comquer\Enum\Enum;

/**
 * @method static EnumFixture VALID
 * @method static EnumFixture TEST_1
 * @method static EnumFixture TEST_2
 */
class EnumFixture extends Enum
{
    public const VALID = 'valid';
    public const TEST_1 = 'test_1';
    public const TEST_2 = 'test_2';
    protected const INVALID = 'invalid';
    protected const TEST_PROTECTED = 'test_protected';
    private const TEST_PRIVATE = 'test_private';
}
