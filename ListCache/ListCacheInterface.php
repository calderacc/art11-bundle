<?php declare(strict_types=1);

namespace Caldera\Art11Bundle\ListCache;

interface ListCacheInterface
{
    const CACHE_KEY = 'caldera_art11_list';

    public function getList(): ?array;
    public function setList(array $list): ListCacheInterface;
}