<?php declare(strict_types=1);

namespace Caldera\Art11Bundle\Factory;

use Caldera\Art11Bundle\Loader\DataLoaderInterface;
use JMS\Serializer\SerializerInterface;

class ListFactory implements ListFactoryInterface
{
    /** @var DataLoaderInterface $dataLoader */
    protected $dataLoader;

    /** @var SerializerInterface $serializer */
    protected $serializer;

    public function __construct(DataLoaderInterface $dataLoader, SerializerInterface $serializer)
    {
        $this->dataLoader = $dataLoader;
        $this->serializer = $serializer;
    }

    public function getList(): array
    {
        $content = $this->dataLoader->loadList();

        return $this->serializer->deserialize($content);
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