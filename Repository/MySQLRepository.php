<?php

namespace AbstractFactory\Repository;
use AbstractFactory\DB\MySQL;

/**
 * Class MySQLRepository
 * @package AbstractFactory\Repository
 */

class MySQLRepository
{
    /**
     * @var MySQL
     */

    private $MySQLConnect;

    /**
     * @param MySQL $MySQLConnect
     */

    public function __construct(MySQL $MySQLConnect)
    {
        $this->MySQLConnect = $MySQLConnect;
    }

     /**
     * @return MySQL
     */
    public function getMySQLConnect():MySQL
    {
        return $this->MySQLConnect;
    }

}