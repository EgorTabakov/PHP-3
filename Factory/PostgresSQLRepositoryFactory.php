<?php

namespace AbstractFactory\Factory;

use AbstractFactory\Contract\RepositoryFactoryInterface;
use AbstractFactory\Contract\DBRecordRepositoryInterface;
use AbstractFactory\Contract\DBQueryBuilderRepositoryInterface;
use AbstractFactory\Repository\PostgresSQLBuilderRepository;
use AbstractFactory\Repository\PostgresSQLRecordRepository;
use AbstractFactory\DB\PostgresSQL;

abstract class PostgresSQLRepositoryFactory implements RepositoryFactoryInterface
{
    private $postgresSQLConnection;

    /**
     * PostgresSQLRepositoryFactory constructor.
     * @param PostgresSQL $postgresSQLConnection
     */
    public function __construct(PostgresSQL $postgresSQLConnection) {

        $this->postgresSQLConnection = $postgresSQLConnection;
    }

    /**
     * @return DBRecordRepositoryInterface
     */
    public function createDBRecordRepository(): DBRecordRepositoryInterface
    {

        return new PostgresSQLRecordRepository($this->postgresSQLConnection);
    }

    /**
     * @return DBQueryBuilderRepositoryInterface
     */
    public function createDBQueryBuilderRepository(): DBQueryBuilderRepositoryInterface
    {

        return new PostgresSQLBuilderRepository($this->postgresSQLConnection);
    }
}