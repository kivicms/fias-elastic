<?php

declare(strict_types=1);

namespace Kivicms\Fias\Elastic\Tests\Entity;

use Kivicms\Fias\Elastic\Entity\NormativeDocsKinds;
use Kivicms\Fias\Elastic\Tests\EntityCase;

/**
 * Тест для сущности 'Сведения по видам нормативных документов'.
 *
 * @internal
 */
class NormativeDocsKindsTest extends EntityCase
{
    /**
     * {@inheritDoc}
     */
    protected function createEntity()
    {
        return new NormativeDocsKinds();
    }

    /**
     * {@inheritDoc}
     */
    protected function accessorsProvider(): array
    {
        return [
            'id' => $this->createFakeData()->numberBetween(1, 1000000),
            'name' => $this->createFakeData()->word,
        ];
    }
}
