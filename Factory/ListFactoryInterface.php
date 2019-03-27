<?php declare(strict_types=1);

namespace Caldera\Art11Bundle\Factory;

interface ListFactoryInterface
{
    public function getList(): array;
    public function getWhiteList(): array;
    public function getBlackList(): array;
}