<?php declare(strict_types=1);

namespace Caldera\Art11Bundle\ListCache;

use Symfony\Component\Cache\Adapter\AdapterInterface;

class ListCache implements ListCacheInterface
{
    /** @var AdapterInterface $adapter */
    protected $adapter;

    public function __construct(AdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }

    public function getList(): ?array
    {
        $listItem = $this->adapter->getItem(self::CACHE_KEY);

        if ($listItem->isHit()) {
            return $listItem->get();
        }

        return null;
    }

    public function setList(array $list): ListCacheInterface
    {
        $listItem = $this->adapter->getItem(self::CACHE_KEY);

        $listItem->set($list);

        $this->adapter->save($listItem);

        return $this;
    }
}