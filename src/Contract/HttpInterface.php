<?php

declare(strict_types=1);

namespace CloudCastle\Http\Contract;

/**
 * Контракт публичного API пакета Http.
 */
interface HttpInterface
{
    /**
     * Возвращает идентификатор пакета Composer.
     */
    public function name(): string;
}
