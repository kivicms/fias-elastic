<?php

declare(strict_types=1);

namespace Kivicms\Fias\Elastic\Tests\Entity;

use DateTimeImmutable;
use Kivicms\Fias\Elastic\Entity\Steads;
use Kivicms\Fias\Elastic\Tests\EntityCase;

/**
 * Тест для сущности 'Сведения по земельным участкам'.
 *
 * @internal
 */
class SteadsTest extends EntityCase
{
    /**
     * {@inheritDoc}
     */
    protected function createEntity()
    {
        return new Steads();
    }

    /**
     * {@inheritDoc}
     */
    protected function accessorsProvider(): array
    {
        return [
            'id' => $this->createFakeData()->numberBetween(1, 1000000),
            'objectid' => $this->createFakeData()->numberBetween(1, 1000000),
            'objectguid' => $this->createFakeData()->word,
            'changeid' => $this->createFakeData()->numberBetween(1, 1000000),
            'number' => $this->createFakeData()->word,
            'opertypeid' => $this->createFakeData()->word,
            'previd' => $this->createFakeData()->numberBetween(1, 1000000),
            'nextid' => $this->createFakeData()->numberBetween(1, 1000000),
            'updatedate' => new DateTimeImmutable(),
            'startdate' => new DateTimeImmutable(),
            'enddate' => new DateTimeImmutable(),
            'isactual' => $this->createFakeData()->numberBetween(1, 1000000),
            'isactive' => $this->createFakeData()->numberBetween(1, 1000000),
        ];
    }
}
