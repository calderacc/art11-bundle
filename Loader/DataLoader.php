<?php declare(strict_types=1);

namespace Caldera\Art11Bundle\Loader;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;

class DataLoader implements DataLoaderInterface
{
    public function loadList(array $params = []): string
    {
        $client = new Client();

        $url = sprintf('%s?%s', self::LIST_URL, http_build_query($params));

        /** @var Response $response */
        $response = $client->get($url);

        return $response->getBody()->getContents();
    }
}