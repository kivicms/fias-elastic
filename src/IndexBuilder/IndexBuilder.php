<?php

declare(strict_types=1);

namespace Kivicms\Fias\Elastic\IndexBuilder;

use Kivicms\Fias\Elastic\Exception\IndexBuilderException;
use Kivicms\Fias\Elastic\IndexMapperInterface;

/**
 * Объект, который обновляет описание индексов из хранилища в elasticsearch.
 */
interface IndexBuilder
{
    /**
     * Создает или обеовляет индекс в эластике согласно описанию.
     *
     * @param IndexMapperInterface $indexMapper
     *
     * @throws IndexBuilderException
     */
    public function save(IndexMapperInterface $indexMapper): void;

    /**
     * Закрывает индекс.
     *
     * @param IndexMapperInterface $indexMapper
     *
     * @throws IndexBuilderException
     */
    public function close(IndexMapperInterface $indexMapper): void;

    /**
     * Открывает индекс.
     *
     * @param IndexMapperInterface $indexMapper
     *
     * @throws IndexBuilderException
     */
    public function open(IndexMapperInterface $indexMapper): void;

    /**
     * Обновляет индекс.
     *
     * @param IndexMapperInterface $indexMapper
     *
     * @throws IndexBuilderException
     */
    public function refresh(IndexMapperInterface $indexMapper): void;

    /**
     * Удаляет индекс.
     *
     * @param IndexMapperInterface $indexMapper
     *
     * @throws IndexBuilderException
     */
    public function delete(IndexMapperInterface $indexMapper): void;

    /**
     * Возвращает правду, если индекс заморожен.
     *
     * @param IndexMapperInterface $indexMapper
     *
     * @return bool
     *
     * @throws IndexBuilderException
     */
    public function isFrozen(IndexMapperInterface $indexMapper): bool;

    /**
     * Замораживает индекс.
     *
     * @param IndexMapperInterface $indexMapper
     *
     * @throws IndexBuilderException
     */
    public function freeze(IndexMapperInterface $indexMapper): void;

    /**
     * Размораживает индекс.
     *
     * @param IndexMapperInterface $indexMapper
     *
     * @throws IndexBuilderException
     */
    public function unfreeze(IndexMapperInterface $indexMapper): void;

    /**
     * Возвращает правду, если указанный индекс существует в elasticsearch.
     *
     * @param IndexMapperInterface $indexMapper
     *
     * @return bool
     */
    public function hasIndex(IndexMapperInterface $indexMapper): bool;
}
