<?php

declare(strict_types=1);

namespace Kivicms\Fias\Elastic\ClientProvider;

use Elasticsearch\Client;

/**
 * Провайдер, который возвращает клиента, переданного через DI.
 */
class DIProvider implements ClientProvider
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * {@inheritDoc}
     */
    public function provide(): Client
    {
        return $this->client;
    }
}
