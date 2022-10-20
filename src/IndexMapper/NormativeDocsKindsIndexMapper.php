<?php

declare(strict_types=1);

namespace Kivicms\Fias\Elastic\IndexMapper;

use Kivicms\Fias\Elastic\IndexMapperAbstract;

/**
 * Описание полей индекса для сущности 'Сведения по видам нормативных документов'.
 */
class NormativeDocsKindsIndexMapper extends IndexMapperAbstract
{
    /**
     * {@inheritDoc}
     */
    public function getName(): string
    {
        return 'normative_docs_kinds';
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
            'name' => [
                'type' => 'text',
            ],
        ];
    }
}
