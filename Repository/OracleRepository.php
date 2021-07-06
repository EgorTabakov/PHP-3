<?php


namespace AbstractFactory\Repository;

use AbstractFactory\DB\Oracle;

/**
 * Class OracleRepository
 * @package AbstractFactory\Repository
 */
class OracleRepository

{
    /**
     * @var Oracle
     */

    private $OracleConnect;

    /**
     * @param Oracle $OracleConnect
     */

    public function __construct(Oracle $OracleConnect)
    {
        $this->OracleConnect = $OracleConnect;
    }

     /**
     * @return Oracle
     */
    public function getOracleConnect(): Oracle
    {
        return $this->OracleConnect;
    }

}