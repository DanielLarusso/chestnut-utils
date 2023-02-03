<?php

declare(strict_types=1);

namespace Chestnut\Utils;

abstract class AbstractFacade implements FacadeInterface
{
    protected ?FactoryInterface $factory = null;

    protected function getFactory(): FactoryInterface
    {
        if (!$this->factory) {
            $this->initFactory();
        }

        return $this->factory;
    }

    abstract protected function createFactory(): FactoryInterface;

    protected function initFactory(): void
    {
        $this->factory = $this->createFactory();
    }
}
