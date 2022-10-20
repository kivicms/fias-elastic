<?php

declare(strict_types=1);

namespace Kivicms\Fias\Elastic\Task;

use Kivicms\Fias\Elastic\IndexBuilder\IndexBuilder;
use Kivicms\Fias\Elastic\IndexMapperRegistry\IndexMapperRegistry;
use Liquetsoft\Fias\Component\Pipeline\State\State;
use Liquetsoft\Fias\Component\Pipeline\Task\Task;

/**
 * Операция, которая помечает все индексы заморожеными.
 */
class FreezeElasticIndiciesTask implements Task
{
    private IndexMapperRegistry $registry;

    private IndexBuilder $builder;

    public function __construct(IndexMapperRegistry $registry, IndexBuilder $builder)
    {
        $this->registry = $registry;
        $this->builder = $builder;
    }

    /**
     * {@inheritDoc}
     */
    public function run(State $state): void
    {
        $mappers = $this->registry->getAllMappers();

        foreach ($mappers as $mapper) {
            if (!$this->builder->isFrozen($mapper)) {
                $this->builder->freeze($mapper);
            }
        }
    }
}
