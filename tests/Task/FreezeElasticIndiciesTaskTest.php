<?php

declare(strict_types=1);

namespace Kivicms\Fias\Elastic\Tests\Task;

use Liquetsoft\Fias\Component\Pipeline\State\State;
use Kivicms\Fias\Elastic\IndexBuilder\IndexBuilder;
use Kivicms\Fias\Elastic\IndexMapperInterface;
use Kivicms\Fias\Elastic\IndexMapperRegistry\IndexMapperRegistry;
use Kivicms\Fias\Elastic\Task\FreezeElasticIndiciesTask;
use Kivicms\Fias\Elastic\Tests\BaseCase;
use Throwable;

/**
 * Тест для операции, которая помечает индексы заморожеными.
 *
 * @internal
 */
class FreezeElasticIndiciesTaskTest extends BaseCase
{
    /**
     * Проверяет, что операция заморозит все индексы.
     *
     * @throws Throwable
     */
    public function testRun(): void
    {
        $mapper = $this->getMockBuilder(IndexMapperInterface::class)->getMock();
        $mapper1 = $this->getMockBuilder(IndexMapperInterface::class)->getMock();

        $mapperRegistry = $this->getMockBuilder(IndexMapperRegistry::class)->getMock();
        $mapperRegistry->method('getAllMappers')->willReturn([$mapper, $mapper1]);

        $indexBuilder = $this->getMockBuilder(IndexBuilder::class)->getMock();
        $indexBuilder->method('isFrozen')->willReturn(false);
        $freezedIndicies = [];
        $indexBuilder->method('freeze')->willReturnCallback(
            function (IndexMapperInterface $index) use (&$freezedIndicies): void {
                $freezedIndicies[] = $index;
            }
        );

        $state = $this->getMockBuilder(State::class)->getMock();

        $task = new FreezeElasticIndiciesTask($mapperRegistry, $indexBuilder);
        $task->run($state);

        $this->assertSame(
            [
                $mapper,
                $mapper1,
            ],
            $freezedIndicies
        );
    }
}
