<?php

declare(strict_types=1);

namespace CloudCastle\Http;

use CloudCastle\Http\Contract\HttpInterface;
use CloudCastle\Http\Exception\HttpException;

/**
 * Точка входа пакета Http.
 *
 * Заглушка скаффолда: замените на реальный публичный API.
 */
final class Http implements HttpInterface
{
    /**
     * Версия пакета для диагностики.
     */
    public const VERSION = '0.1.0';

    /**
     * Возвращает идентификатор пакета Composer.
     */
    #[\Override]
    public function name(): string
    {
        return 'cloud-castle/http';
    }

    /**
     * Завершает работу с ошибкой пакета.
     *
     * @throws HttpException
     */
    public function abort(string $message): never
    {
        throw new HttpException($message);
    }
}
