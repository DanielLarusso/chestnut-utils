<?php

declare(strict_types=1);

namespace Chestnut\Utils;

use Exception;
use Exceptions\SingletonException;

abstract class AbstractSingleton implements SingletonInterface
{
    protected static ?self $instance = null;

    private function __construct()
    {
        // must not be reached
    }

    private function __clone(): void
    {
        // must not be reached
    }

    public function __wakeup(): void
    {
        throw new SingletonException('Cannot unserialize singleton');
    }

    public static function getInstance(): static
    {
        return self::$instance ?? self::$instance = new static();
    }
}
