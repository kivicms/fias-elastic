<?php

declare(strict_types=1);

namespace Kivicms\Fias\Elastic\Tests\ClientProvider;

use Elasticsearch\Client;
use Kivicms\Fias\Elastic\ClientProvider\DIProvider;
use Kivicms\Fias\Elastic\Tests\BaseCase;
use Throwable;

/**
 * Тест для провайдера клиента, который возвращает клиента, переданного через DI.
 *
 * @internal
 */
class DIProviderTest extends BaseCase
{
    /**
     * Проверяет, что провайдер вернет в точности того клиента, который был ему передан через DI.
     *
     * @throws Throwable
     */
    public function testProvide(): void
    {
        $client = $this->getMockBuilder(Client::class)->disableOriginalConstructor()->getMock();

        $provider = new DIProvider($client);

        $this->assertSame($client, $provider->provide());
    }
}
