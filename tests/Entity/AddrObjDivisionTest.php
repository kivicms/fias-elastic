<?php

declare(strict_types=1);

namespace Kivicms\Fias\Elastic\Tests\Entity;

use Kivicms\Fias\Elastic\Entity\AddrObjDivision;
use Kivicms\Fias\Elastic\Tests\EntityCase;

/**
 * Тест для сущности 'Сведения по операциям переподчинения'.
 *
 * @internal
 */
class AddrObjDivisionTest extends EntityCase
{
    /**
     * {@inheritDoc}
     */
    protected function createEntity()
    {
        return new AddrObjDivision();
    }

    /**
     * {@inheritDoc}
     */
    protected function accessorsProvider(): array
    {
        return [
            'id' => $this->createFakeData()->numberBetween(1, 1000000),
            'parentid' => $this->createFakeData()->numberBetween(1, 1000000),
            'childid' => $this->createFakeData()->numberBetween(1, 1000000),
            'changeid' => $this->createFakeData()->numberBetween(1, 1000000),
        ];
    }
}
