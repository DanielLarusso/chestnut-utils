<?php

declare(strict_types=1);

namespace Chestnut\Utils;

interface SingletonInterface
{
    public static function getInstance(): static;
}
