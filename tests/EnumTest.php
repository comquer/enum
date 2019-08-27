<?php declare(strict_types=1);

namespace Comquer\Enum\Tests;

use Comquer\Enum\EnumException;
use PHPUnit\Framework\TestCase;
use Comquer\Enum\Tests\Fixtures\EnumFixture;

final class EnumTest extends TestCase
{
    public function testFromKey() : void
    {
        $enum = EnumFixture::VALID();
        self::assertSame(EnumFixture::VALID, $enum->getValue());
        self::assertSame('VALID', $enum->getKey());
    }

    public function testFromValue() : void
    {
        $enum = EnumFixture::fromValue(EnumFixture::TEST_1);
        self::assertSame(EnumFixture::TEST_1, $enum->getValue());
        self::assertSame('TEST_1', $enum->getKey());
    }

    public function testFailOnInvalidKey() : void
    {
        $this->expectException(EnumException::class);
        $enum = EnumFixture::fromKey('nonexisting');
    }

    public function testFailOnProtectedConst() : void
    {
        $this->expectException(EnumException::class);
        $enum = EnumFixture::fromValue('invalid');
    }

    public function testFailOnInvalidValue() : void
    {
        $this->expectException(EnumException::class);
        $enum = EnumFixture::fromValue('some random value');
    }

    public function testAssertSameEnums() : void
    {
        self::assertSame(EnumFixture::TEST_1(), EnumFixture::TEST_1());
        self::assertSame(EnumFixture::TEST_2(), EnumFixture::TEST_2());
    }

    public function testAssertNotSame() : void
    {
        self::assertNotSame(EnumFixture::TEST_1(), EnumFixture::TEST_2());
        self::assertNotSame(EnumFixture::VALID(), EnumFixture::TEST_2());
    }
}
