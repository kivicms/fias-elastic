<?php

declare(strict_types=1);

namespace Kivicms\Fias\Elastic\Tests\Entity;

use DateTimeImmutable;
use Kivicms\Fias\Elastic\Entity\Rooms;
use Kivicms\Fias\Elastic\Tests\EntityCase;

/**
 * Тест для сущности 'Сведения по комнатам'.
 *
 * @internal
 */
class RoomsTest extends EntityCase
{
    /**
     * {@inheritDoc}
     */
    protected function createEntity()
    {
        return new Rooms();
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
            'roomtype' => $this->createFakeData()->numberBetween(1, 1000000),
            'opertypeid' => $this->createFakeData()->numberBetween(1, 1000000),
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
