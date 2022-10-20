<?php

declare(strict_types=1);

namespace Kivicms\Fias\Elastic;

use Kivicms\Fias\Elastic\Exception\IndexMapperException;
use Kivicms\Fias\Elastic\QueryBuilder\QueryBuilder;

/**
 * Интерфейс для объекта, который предоставляет данные для маппинга индекса elasticsearch.
 */
interface IndexMapperInterface
{
    /**
     * Возвращает имя индекса.
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Возвращает описание индекса.
     *
     * @return array
     */
    public function getMappingProperties(): array;

    /**
     * Возвращает название первичного ключа.
     *
     * @return string
     */
    public function getPrimaryName(): string;

    /**
     * Извлекает значение первичного ключа из сущности.
     *
     * @param object $entity
     *
     * @return string
     *
     * @throws IndexMapperException
     */
    public function extractPrimaryFromEntity(object $entity): string;

    /**
     * Извлекает данные для индексирования из сущности.
     *
     * @param object $entity
     *
     * @return array<string, mixed>
     *
     * @throws IndexMapperException
     */
    public function extractDataFromEntity(object $entity): array;

    /**
     *  Проверяет, что в индексе размечено свойство с указанным именем.
     *
     * @param string $property
     *
     * @return bool
     */
    public function hasProperty(string $property): bool;

    /**
     * Возвращает объект запроса для поиска по данному индексу.
     *
     * @return QueryBuilder
     */
    public function query(): QueryBuilder;
}
