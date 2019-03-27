<?php declare(strict_types=1);

namespace Caldera\Art11Bundle\Factory;

class ListFactory implements ListFactoryInterface
{
    public function __construct()
    {
    }

    public function getList(): array
    {
        
    }

    public function getWhiteList(): array
    {
        return $this->getList();
    }

    public function getBlackList(): array
    {
        return $this->getList();
    }
}