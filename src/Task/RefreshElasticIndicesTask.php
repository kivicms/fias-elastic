<?php

declare(strict_types=1);

namespace Kivicms\Fias\Elastic\Task;

use Kivicms\Fias\Elastic\IndexBuilder\IndexBuilder;
use Kivicms\Fias\Elastic\IndexMapperRegistry\IndexMapperRegistry;
use Liquetsoft\Fias\Component\Pipeline\State\State;
use Liquetsoft\Fias\Component\Pipeline\Task\Task;

/**
 * Операция, которая обновляет все индексы.
 */
class RefreshElasticIndicesTask implements Task
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
            $this->builder->refresh($mapper);
        }
    }
}
