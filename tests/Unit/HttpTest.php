<?php

declare(strict_types=1);

namespace CloudCastle\Http\Tests\Unit;

use CloudCastle\Http\Exception\HttpException;
use CloudCastle\Http\Http;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

/**
 * Модульные тесты заглушки Http.
 */
#[CoversClass(Http::class)]
final class HttpTest extends TestCase
{
    /**
     * Проверяет, что name() возвращает composer-имя пакета.
     */
    public function testNameReturnsComposerPackageName(): void
    {
        $package = new Http();

        self::assertSame('cloud-castle/http', $package->name());
    }

    /**
     * Проверяет, что abort() бросает HttpException.
     */
    public function testAbortThrowsHttpException(): void
    {
        $package = new Http();

        $this->expectException(HttpException::class);
        $this->expectExceptionMessage('тест');

        $package->abort('тест');
    }
}
