<?php

namespace AbstractFactory\Factory;

use AbstractFactory\Contract\RepositoryFactoryInterface;
use AbstractFactory\Contract\DBRecordRepositoryInterface;
use AbstractFactory\Contract\DBQueryBuilderRepositoryInterface;
use AbstractFactory\Repository\MySqlQueryBuilderRepository;
use AbstractFactory\Repository\MySQLRecordRepository;
use AbstractFactory\DB\MySQL;

abstract class MySQLRepositoryFactory implements RepositoryFactoryInterface

{
    private $mySQLConnection;

    /**
     * MySQLRepositoryFactory constructor.
     * @param MySQL $mySQLConnection
     */
    public function __construct(MySQL $mySQLConnection)
    {

        $this->mySQLConnection = $mySQLConnection;
    }

    /**
     * @return DBRecordRepositoryInterface
     */
    public function createDBRecordRepository(): DBRecordRepositoryInterface
    {

        return new MySQLRecordRepository($this->mySQLConnection);
    }

    /**
     * @return DBQueryBuilderRepositoryInterface
     */
    public function createDBQueryBuilderRepository(): DBQueryBuilderRepositoryInterface
    {

        return new MySqlQueryBuilderRepository($this->mySQLConnection);
    }

}
