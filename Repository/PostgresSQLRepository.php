<?php


namespace AbstractFactory\Repository;

use AbstractFactory\DB\PostgresSQL;

/**
 * Class PostgresRepository
 * @package AbstractFactory\Repository
 */
class PostgresSQLRepository

{
    /**
     * @var PostgresSQL
     */

    private $PostgresSQLConnect;

    /**
     * @param PostgresSQL $PostgresSQLConnect
     */

    public function __construct(PostgresSQL $PostgresSQLConnect)
    {
        $this->PostgresSQLConnect = $PostgresSQLConnect;
    }

    /**
     * @return PostgresSQL
     */
    public function getPostgresSQLConnect(): PostgresSQL
    {
        return $this->PostgresSQLConnect;
    }

}