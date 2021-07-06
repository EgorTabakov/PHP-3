<?php

namespace AbstarctFactory\Factory;

use AbstractFactory\Contract\RepositoryFactoryInterface;
use AbstractFactory\Contract\DBRecordRepositoryInterface;
use AbstractFactory\Contract\DBQueryBuilderRepositoryInterface;
use AbstractFactory\Repository\OracleBuilderRepository;
use AbstractFactory\Repository\OracleRecordRepository;
use AbstractFactory\DB\Oracle;

abstract class OracleRepositoryFactory implements RepositoryFactoryInterface
{
    private $oracleConnection;

    /**
     * OracleRepositoryFactory constructor.
     * @param Oracle $oracleConnection
     */
    public function __construct(Oracle $oracleConnection)
    {

        $this->oracleConnection = $oracleConnection;
    }

    /**
     * @return DBRecordRepositoryInterface
     */
    public function createDBRecordRepository(): DBRecordRepositoryInterface
    {

        return new OracleRecordRepository($this->oracleConnection);
    }

    /**
     * @return DBQueryBuilderRepositoryInterface
     */
    public function createDBQueryBuilderRepository(): DBQueryBuilderRepositoryInterface
    {

        return new OracleBuilderRepository($this->oracleConnection);
    }
}
