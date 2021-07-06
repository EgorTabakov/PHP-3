<?php

namespace AbstractFactory\Contract;

interface RepositoryFactoryInterface
{

    /**
     * @return DBRecordRepositoryInterface
     */
    public function createRecordRepository(): DBRecordRepositoryInterface;

    /**
     * @return DBQueryBuilderRepositoryInterface
     */
    public function createDBQueryBuilderRepository(): DBQueryBuilderRepositoryInterface;
}