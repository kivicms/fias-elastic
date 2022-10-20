<?php

declare(strict_types=1);

namespace Kivicms\Fias\Elastic\IndexMapper;

use Kivicms\Fias\Elastic\IndexMapperAbstract;

/**
 * Описание полей индекса для сущности 'Сведения по помещениям'.
 */
class ApartmentsIndexMapper extends IndexMapperAbstract
{
    /**
     * {@inheritDoc}
     */
    public function getName(): string
    {
        return 'apartments';
    }

    /**
     * {@inheritDoc}
     */
    public function getPrimaryName(): string
    {
        return 'id';
    }

    /**
     * {@inheritDoc}
     */
    public function getMappingProperties(): array
    {
        return [
            'id' => [
                'type' => 'keyword',
            ],
            'objectid' => [
                'type' => 'integer',
            ],
            'objectguid' => [
                'type' => 'keyword',
            ],
            'changeid' => [
                'type' => 'integer',
            ],
            'number' => [
                'type' => 'keyword',
            ],
            'aparttype' => [
                'type' => 'integer',
            ],
            'opertypeid' => [
                'type' => 'integer',
            ],
            'previd' => [
                'type' => 'integer',
            ],
            'nextid' => [
                'type' => 'integer',
            ],
            'updatedate' => [
                'type' => 'date',
                'format' => 'yyyy-MM-dd\'T\'HH:mm:ss',
            ],
            'startdate' => [
                'type' => 'date',
                'format' => 'yyyy-MM-dd\'T\'HH:mm:ss',
            ],
            'enddate' => [
                'type' => 'date',
                'format' => 'yyyy-MM-dd\'T\'HH:mm:ss',
            ],
            'isactual' => [
                'type' => 'integer',
            ],
            'isactive' => [
                'type' => 'integer',
            ],
        ];
    }
}
