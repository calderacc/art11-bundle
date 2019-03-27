<?php declare(strict_types=1);

namespace Caldera\Art11Bundle\Loader;

interface DataLoaderInterface
{
    const LIST_URL = 'https://art11.caldera.cc/api/list';

    public function loadList(array $params = []): string;
}