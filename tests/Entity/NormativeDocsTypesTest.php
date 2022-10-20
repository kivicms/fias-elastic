<?php

declare(strict_types=1);

namespace Kivicms\Fias\Elastic\Tests\Entity;

use DateTimeImmutable;
use Kivicms\Fias\Elastic\Entity\NormativeDocsTypes;
use Kivicms\Fias\Elastic\Tests\EntityCase;

/**
 * Тест для сущности 'Сведения по типам нормативных документов'.
 *
 * @internal
 */
class NormativeDocsTypesTest extends EntityCase
{
    /**
     * {@inheritDoc}
     */
    protected function createEntity()
    {
        return new NormativeDocsTypes();
    }

    /**
     * {@inheritDoc}
     */
    protected function accessorsProvider(): array
    {
        return [
            'id' => $this->createFakeData()->numberBetween(1, 1000000),
            'name' => $this->createFakeData()->word,
            'startdate' => new DateTimeImmutable(),
            'enddate' => new DateTimeImmutable(),
        ];
    }
}
