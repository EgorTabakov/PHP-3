<?php


namespace AbstractFactory\Repository;

use AbstractFactory\Contract\DBRecordRepositoryInterface;
use AbstractFactory\Entity\DBRecord;

class PostgresSQLRecordRepository extends PostgresSQLRepository
    implements DBRecordRepositoryInterface
{

    /**
     * @param DBRecord $record
     * @return mixed|void
     */
    public function add(DBRecord $record)
    {
        // TODO: Implement add() method.
    }

    /**
     * @param DBRecord $record
     * @return mixed|void
     */
    public function update(DBRecord $record)
    {
        // TODO: Implement update() method.
    }

    /**
     * @param DBRecord $record
     * @return mixed|void
     */
    public function delete(DBRecord $record)
    {
        // TODO: Implement delete() method.
    }
}